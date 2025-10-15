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
use ZipArchive;


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

        $data['results'] = AiUpload::latest()->paginate(20);

        // dd('here');

        return view('ai-project.dashboard', $data);
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
        // dd($id);

        $data['results'] = AiUpload::where('batch',$id)->where('status', 'converted')->get();
        return view('ai-project.workarea', $data);
    }


    public function aiUploadFile(AiUploaadedRequest $request)
    {
        $validated = $request->validate([
            'files' => 'required|array',
            'files.*' => 'file|mimes:pdf|max:10240',
               
        ]);

        // $route = 'https://ai-bxij.onrender.com';
        $route = 'http://31.97.126.130:2000';
        // $route = 'http://localhost:5000';

        

        $batch = Str::random(5) . Str::random(5) . "CB";

        foreach ($request->file('files') as $f) {

            $file = $f;
            $originalFileName = $file->getClientOriginalName();
            $uniqueName = 'IandM.' . rand(100000, 999999) . '.pdf';
            $path = $file->storeAs('/public/uploads', $uniqueName);
            $fullPath = storage_path('app/' . $path);

            $response = Http::attach(
                'pdf_files',
                file_get_contents($fullPath),
                $uniqueName
            // )->post($route .'/process_pdf/');
            )->post($route .'/process_multiple_pdfs/');
            // )->post('http://31.97.126.130:2000/process_multiple_pdfs');


            if ($response->successful()) {

                // Log into DB
                $upload = new AiUpload();
                $upload->file_name = $uniqueName;
                $upload->path = 'uploads/'.$uniqueName;
                $upload->batch = $batch;
                $upload->save();
                
                $data = $response->json(); // Decode the JSON response

                // dd($data);
                foreach ($data['output_files']as $output) {
                    
                    $upload->txt = $output['txt'] ?? null;
                    $upload->txtb = $output['txtb'] ?? null;
                    $upload->excel = $output['excel'] ?? null;
                    $upload->pdf = $output['pdf'] ?? null;
                    $upload->base_file = $output['base_filename'] ?? null;
                    $upload->original_name = $originalFileName ?? null;
                    $upload->save();

                    $downloadUrl = $route."/download/output_file/{$upload->txt}";

                 }

                $files = $data['output_files'];
                $base = $upload->base_file;
                // dd($files);

                foreach ($files as $type => $filename) {

                            $downloadables = [

                            'excel'=> $filename['excel'],
                            'txt'=> $filename['txt'],
                            'txtb'=> $filename['txtb'],
                            'pdf' => $filename['pdf'],

                        ];


                    foreach ($downloadables as $key => $d) {

                        if ($d == null) {
                            continue; // Skip if the URL is null
                        }
                      
                        $downloadUrl = $route."/download/output_file/{$d}";

                        $fileResponse = Http::get($downloadUrl);

                        if ($fileResponse->successful()) {
                            Storage::disk('local')->put("public/converted/{$d}", $fileResponse->body());
                        }
                    }
                     

                    $upload->status = 'converted';
                    $upload->save();
                }

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

        if (!file_exists($path)) {
            abort(404, 'File not found');
        }

        Alert::success('Success', 'File Downloaded');
        return response()->download($path);
    }

    public function downloadTxt($batch)
    {
        return self::downloadAll($batch, 'txt');
    } 

    public function downloadPdf($batch)
    {
        return self::downloadAll($batch, 'pdf');
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

    public function aiLogout()
    {
        Auth::logout();
        return redirect()->route('ai-login');
    }

    private static function downloadAll($batch, $type){


         $files = AiUpload::where('batch', $batch)->pluck($type);
         $num = rand(0, 9999);

            if ($files->isEmpty()) {
                Alert::info('Info', 'No files found for this batch.');
            }

            // Define zip filename + path
            $zipFileName = "batch_{$type}_{$batch}_{$num}.zip";
            $zipPath = storage_path("app/public/converted/{$zipFileName}");

            // Create new zip archive
            $zip = new ZipArchive;
            if ($zip->open($zipPath, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) === true) {
                foreach ($files as $file) {
                    $filePath = storage_path("app/public/converted/{$file}");
                    if (file_exists($filePath)) {
                        $zip->addFile($filePath, basename($filePath));
                    }
                }
                $zip->close();
            } else {
                Alert::info('Error', 'Could not create zip file.');
            }

            // Return the zip for download and delete it afterwards
            Alert::success('Success', 'All files downloaded');
            return response()->download($zipPath)->deleteFileAfterSend(true);

    }

   


}
