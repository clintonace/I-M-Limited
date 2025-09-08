<?php

namespace App\Http\Controllers\Ai;

use App\Http\Controllers\Controller;
use App\Http\Requests\AiUploaadedRequest;
use App\Models\AiUpload;
use App\Models\ConvertedId;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\MessageBag;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class AiConverterController extends Controller
{
    public function aiProject()
    {

        return view('ai-project.index');

    }

//    public function aiSee()
//     {
//         $path = 'public/IandM.116917.pdf'; // inside storage/app/public

//     if (Storage::exists($path)) {
//         // Get a public URL for the file
//         $fileUrl = asset('storage/IandM.116917.pdf');

//         return redirect($fileUrl);
//     } else {
//         return abort(404, "File not found in storage");
//     }

//     }

// public function aiSee()
// {
//     // List all files inside storage/app/public
//     $files = Storage::allFiles('public');

//     dd($files);
// }

// public function aiSee()
// {
//     $path = 'public/uploads/IandM.116917.pdf';

//     if (Storage::exists($path)) {
//         // If storage is linked/copied to public/storage
//         $fileUrl = asset('storage/uploads/IandM.116917.pdf');
//         return redirect($fileUrl);

//         // Or, if you want to return it directly (without public/storage):
//         // return Storage::download($path);
//     } else {
//         return abort(404, "File not found in storage");
//     }
// }



// public function aiSee()
// {
//     $path = 'public/uploads/IandM.116917.pdf';

//     if (Storage::exists($path)) {
//         return Storage::download($path); // forces download
//         // or:
//         // return response()->file(storage_path('app/'.$path)); // opens in browser
//     }

//     return abort(404, "File not found");
// }


    public function aiSeeUploads($p = null)
    {
        $path  = 'public/uploads/'.$p;
        
        if (Storage::exists($path)) {
            return response()->file(storage_path('app/'.$path));
            // dd(response()->file(storage_path('app/'.$path)));
        }

        return abort(404, "File not found");
    }

    public function aiSeeConverted($p = null)
    {
        $path  = 'public/converted/'.$p;
        
        if (Storage::exists($path)) {
            return response()->file(storage_path('app/'.$path));
            // dd(response()->file(storage_path('app/'.$path)));
        }

        return abort(404, "File not found");
    }

    public function aiDashboard()
    {

        return view('ai-project.dashboard');
    }

    public function aiDeleteConverted (Request $request, $id = null){

    
        $file = AiUpload::find($request->id);

       

        if($file != null){

            $filePath = storage_path('app/public/converted/' . $file->pdf);

            if (file_exists($filePath)) {
                unlink($filePath);
            }

            $file->delete();

            Alert::success('Erfolgreich', 'Datei erfolgreich gelöscht.');
            return back();


        }
        Alert::info('Info', 'Datei nicht gefunden.');
        return back();
    }

    public function aiWorkArea($id = null)
    {

        $data['results'] = AiUpload::where('batch',$id)->where('status', 'converted')->get();
        return view('ai-project.workarea', $data);
    }

    // public function aiUploadFile(AiUploaadedRequest $request)
    // {
    //     return back();
    // }

    public function aiUploadFile(AiUploaadedRequest $request)
    {
        $validated = $request->validate([
            'files' => 'required|array',
            'files.*' => 'file|mimes:pdf|max:10240',
            // 'convert_type'=>'required',      
        ]);

        // In the future, we will want the admin to be able to add this automatically form the admin panel. 
        // the admin will be able to do this if we make a model to hold the models type.
        //Then we can call out the model type here and on the frontend.

        //for now 
        //finger hause = 1
        //schwörer = 2
        //dfh = 3
        //haas = 4

        $route = 'https://ai-bxij.onrender.com';

        $batch = Str::random(5) . Str::random(5) . "CB";

        foreach ($request->file('files') as $f) {

            $file = $f;
            $originalFileName = $file->getClientOriginalName();
            $uniqueName = 'IandM.' . rand(100000, 999999) . '.pdf';
            $path = $file->storeAs('/public/uploads', $uniqueName);
            $fullPath = storage_path('app/' . $path);

            $response = Http::attach(
                'file',          // name of form field expected by FastAPI
                file_get_contents($fullPath),
                $uniqueName
                //The url should carry the covert type as a param 
            )->post($route .'/process_pdf/');

            if ($response->successful()) {

                // Log into DB
                $upload = new AiUpload();
                $upload->file_name = $uniqueName;
                $upload->path = 'uploads/'.$uniqueName;
                $upload->batch = $batch;
                $upload->save();

                $data = $response->json(); // Decode the JSON response

                $upload->txt = $data['output_files']['txt'] ?? null;
                $upload->excel = $data['output_files']['excel'] ?? null;
                $upload->pdf = $data['output_files']['pdf'] ?? null;
                $upload->base_file = $data['base_filename'] ?? null;
                $upload->original_name = $originalFileName ?? null;
                $upload->save();

                $files = $data['output_files'];
                $base = $data['base_filename'];

                foreach ($files as $type => $filename) {
                    $downloadUrl = $route."/download/{$filename}";

                    // dd($downloadUrl);
                    $fileResponse = Http::get($downloadUrl);

                    // dd($fileResponse);

                    if ($fileResponse->successful()) {

                        // $converted = 
                        Storage::disk('local')->put("public/converted/{$filename}", $fileResponse->body());
                    }

                    $upload->status = 'converted';
                    $upload->save();
                }

                $data['txt'] = $upload->txt;
                $data['excel'] = $upload->excel;
                $data['pdf'] = $upload->pdf;
                $data['base_file'] = $upload->base_file;
                $data['original_name'] = $originalFileName;

            }else{

                Alert::info('Error', 'One or all of you files did not process successfully.');
                return back();

            }

        }

        // The list of the uploaded files ids to be imploded here. 
        Alert::success('Erfolgreich', 'Verarbeitung erfolgreich.');
        return redirect()->route('ai-workarea', ['id' => $upload->batch]);

    }

    public function downloadFile($file)
    {
        $path = storage_path("app/public/converted/{$file}");

        // dd($path);

        if (!file_exists($path)) {
            abort(404, 'File not found');
        }

        Alert::success('Success', 'File Downloaded');
        return response()->download($path);
    }

    // https://ai-bxij.onrender.com/
    public function aiLogin()
    {

        if (headers_sent($file, $line))
             {     dd("Headers already sent in $file on line $line");   
                  return $this;
             } 

        // dd(session()->all());
        // dd('here');
        return view('ai-project.login');
    }

    public function aiLoginAction(Request $request)
    {


        // dd('here');
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // dd($request->all());

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('ai-project');
        }

        Alert::info('Failed', 'User Not found');
        return back()->withErrors(new MessageBag([
            'login' => 'Invalid credentials. Please try again.'
        ]))->withInput();
    }


}
