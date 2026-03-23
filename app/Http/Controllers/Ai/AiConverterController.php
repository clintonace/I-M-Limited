<?php

namespace App\Http\Controllers\Ai;

use App\Http\Controllers\Controller;
use App\Http\Requests\AiUploaadedRequest;
use App\Models\AiUpload;
use App\Models\ConvertedId;
use App\Models\Deleted;
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

    public function aiSearch(Request $request)
    {

        if ($request->type = 'ai_files') {
            
            // dd($request->all());
            $data['results'] = AiUpload::where('file_name', 'like', '%' . $request->search . '%')
                ->orWhere('original_name', 'like', '%' . $request->search . '%')
                ->paginate(20);
                return view('ai-project.dashboard', $data);
        } else {
            $data['results'] = AiUpload::latest()->paginate(20);
            return view('ai-project.dashboard', $data);
        }
        
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

    public function aiTrash()
    {

        $data['results'] = Deleted::latest()->paginate(20);
        return view('ai-project.trash', $data);
    }

    public function aiMassTrash()
    {

        $data['results'] = Deleted::where('id', '!=', 0)->delete();
        // Alert::success('Erfolgreich', 'Datei erfolgreich gelöscht.');
        return back();
    }

    public function aiDeleteConverted (Request $request, $id = null){

    
        $file = AiUpload::find($request->id);

        if($file != null){

            $filePath = storage_path('app/public/converted/' . $file->pdf);

            if (file_exists($filePath)) {
                unlink($filePath);
            }

            $file->delete();

            // Alert::success('Erfolgreich', 'Datei erfolgreich gelöscht.');
            return back();


        }else{

            $file = Deleted::find($request->id);

            // $filePath = storage_path('app/public/converted/' . $file->pdf);

            // if (file_exists($filePath)) {
            //     unlink($filePath);
            // }

            $file->delete();

            // Alert::success('Erfolgreich', 'Datei erfolgreich gelöscht.');
            return back();

        }   
        
        // Alert::info('Info', 'Datei nicht gefunden.');
        return back();
    }

    public function aiWorkArea($id = null)
    {
        // dd($id);

        $data['results'] = AiUpload::where('batch',$id)->where('status', 'converted')->get();
        // dd($data['results']);
        return view('ai-project.workarea', $data);
    }


    public function aiUploadFile(AiUploaadedRequest $request)
    {
        $validated = $request->validate([
            'files' => 'required|array',
            'files.*' => 'file|mimes:pdf,txt|max:10240',
               
        ]);

        // $route = 'https://ai-bxij.onrender.com';
        $route = 'http://31.97.126.130:2000';
        // $route = 'http://localhost:5000';

        

        $batch = Str::random(5) . Str::random(5) . "CB";

        foreach ($request->file('files') as $f) {

            $file = $f;
            $originalFileName = $file->getClientOriginalName();
            $orgExtension = $file->getClientOriginalExtension();
            $uniqueName = 'IandM_' . rand(100000, 999999) . '_' . '.'.$orgExtension;
            $path = $file->storeAs('/public/uploads', $uniqueName);
            // $path = $file->storeAs('/public/uploads', $originalFileName);
            $fullPath = storage_path('app/' . $path);

            // dd($fullPath);

            $response = Http::attach(
                'files',
                file_get_contents($fullPath),
                $uniqueName
            // )->post($route .'/process_pdf/');
            )->post($route .'/process_multiple_files');
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
                    // dd($output);
                    $upload->txt = $output['txt'] ?? null;
                    $upload->txtb = $output['txtb'] ?? null;
                    $upload->txtc = $output['txtc'] ?? null;
                    $upload->txtd = $output['txtd'] ?? null;
                    $upload->excel = $output['excel'] ?? null;
                    $upload->pdf = $output['pdf'] ?? null;
                    $upload->base_file = $output['base_filename'] ?? null;
                    $upload->original_name = $originalFileName ?? null;
                    $upload->save();

                    $downloadUrl = $route."/download/output_file/{$upload->txt}";

                    // dd($downloadUrl);

                 }

                $files = $data['output_files'];
                $base = $upload->base_file;
                // dd($files);

                foreach ($files as $type => $filename) {

                            $downloadables = [

                            'excel'=> $filename['excel'],
                            'txt'=> $filename['txt'],
                            'txtb'=> $filename['txtb'],
                            'txtc'=> $filename['txtc'],
                            'txtd'=> $filename['txtd'],
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

                // Alert::info('Fehler', 'Eine oder alle Ihre Dateien wurden nicht erfolgreich verarbeitet.');
                return back();

            }

        }

        // The list of the uploaded files ids to be imploded here. 
        // Alert::success('Erfolgreich', 'Verarbeitung erfolgreich.');

        // dd($upload->batch);
        return redirect()->route('ai-workarea', ['id' => $upload->batch]);

    }


    public function downloadFile($file)
    {
        $path = storage_path("app/public/converted/{$file}");

        if (!file_exists($path)) {
            abort(404, 'Datei nicht gefunden');
        }

        // Alert::success('Erfolg', 'Datei heruntergeladen');
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

        // Alert::info('Fehlgeschlagen', 'Benutzer nicht gefunden.');
        return back()->withErrors(new MessageBag([
            'login' => 'Ungültige Anmeldedaten. Bitte versuchen Sie es erneut.'
        ]))->withInput();
    }

    public function aiLogout()
    {
        Auth::logout();
        return redirect()->route('ai-login');
    }

    private static function downloadAll($batch, $txt){

        // dd($batch, $type);

         $txt = AiUpload::where('batch', $batch)->pluck($txt); //Rollo

         $txtb = AiUpload::where('batch', $batch)->pluck('txtb');  //Raff

         $txtc = AiUpload::where('batch', $batch)->pluck('txtc');  //Rollo2

         $txtd = AiUpload::where('batch', $batch)->pluck('txtd');  //Raff2
    
        //  $txt = AiUpload::where('batch', $batch)->whereNotNull('txt')->pluck('txt'); //Rollo

        //  dd($files, $txtb);

         $num = rand(0, 9999);

            if ($txt->isEmpty() && $txtb->isEmpty()) {
                Alert::info('Info', 'Keine Dateien für diesen Stapel gefunden.');
            }

            // Define zip filename + path
            $zipFileName = "batch_txt_{$batch}_{$num}.zip";
            $zipPath = storage_path("app/public/converted/{$zipFileName}");

            // Create new zip archive
            $zip = new ZipArchive;
            if ($zip->open($zipPath, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) === true) {
                //Rollo
                if (!$txt->isEmpty()) {
                        foreach ($txt as $file) {

                        if ($file === null) {
                            continue;
                        }
                        $filePath = storage_path("app/public/converted/{$file}");
                        if (file_exists($filePath)) {
                            $zip->addFile($filePath, basename($filePath));
                        }
                        // dd('processed txt');
                    }
                    
                }

                //Raff
                if (!$txtb->isEmpty()) {
                        foreach ($txtb as $file) {

                        if ($file === null) {
                            continue;
                        }
                        $filePath = storage_path("app/public/converted/{$file}");
                        if (file_exists($filePath)) {
                            $zip->addFile($filePath, basename($filePath));
                        }
                        // dd('processed txtb');
                    }
                    
                }

                //rollo2

                if (!$txtc->isEmpty()) {
                        foreach ($txtc as $file) {

                        if ($file === null) {
                            continue;
                        }
                        $filePath = storage_path("app/public/converted/{$file}");
                        if (file_exists($filePath)) {
                            $zip->addFile($filePath, basename($filePath));
                        }
                        // dd('processed txtc');
                    }
                    
                }

                //raff2

                if (!$txtd->isEmpty()) {
                        foreach ($txtd as $file) {

                        if ($file === null) {
                            continue;
                        }
                        $filePath = storage_path("app/public/converted/{$file}");
                        if (file_exists($filePath)) {
                            $zip->addFile($filePath, basename($filePath));
                        }
                        // dd('processed txtd');
                    }
                    
                }

                // if ($type != 'pdf') {
                //     foreach ($txtb as $file) {

                //         if ($file === null) {
                //             continue;
                //         }

                //         $filePath = storage_path("app/public/converted/{$file}");
                //         if (file_exists($filePath)) {
                //             $zip->addFile($filePath, basename($filePath));
                //         }
                //     }

                //     foreach ($txt as $file) {

                //         if ($file === null) {
                //             continue;
                //         }

                //         $filePath = storage_path("app/public/converted/{$file}");
                //         if (file_exists($filePath)) {
                //             $zip->addFile($filePath, basename($filePath));
                //         }
                //     }
                // }


                $zip->close();

            } else {
                Alert::info('Fehler', 'ZIP-Datei konnte nicht erstellt werden.');
            }

            // Return the zip for download and delete it afterwards
            // Alert::success('Erfolg', 'Alle Dateien wurden heruntergeladen.');
            return response()->download($zipPath)->deleteFileAfterSend(true);

    }

   


}
