<?php

namespace App\Http\Controllers\Ai;

use App\Http\Controllers\Controller;
use App\Http\Requests\AiUploaadedRequest;
use App\Models\AiUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\MessageBag;
use RealRashid\SweetAlert\Facades\Alert;

class AiConverterController extends Controller
{
    public function aiProject()
    {

        return view('ai-project.index');

    }

    public function aiWorkArea($id = null)
    {

        $data['result'] = AiUpload::where('id',$id)->where('status', 'converted')->first();
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
        ]);


        $uploadedFilesId = [];

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
            )->post('https://ai-bxij.onrender.com/process_pdf/');

            if ($response->successful()) {

                // Log into DB
                $upload = new AiUpload();
                $upload->file_name = $uniqueName;
                $upload->path = 'uploads/'.$uniqueName;
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
                    $downloadUrl = "https://ai-bxij.onrender.com/download/{$filename}";

                    $fileResponse = Http::get($downloadUrl);

                    if ($fileResponse->successful()) {

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

                $uploadedFilesId[]= $upload->id;
                // You can dreate a db that implodes the list of uploaded files ids
                // Then the id of that db will be sent to the ai-workarea route and 
                // the work area will fetch all the files with that id

            }else{

                Alert::info('Error', 'One or all of you files did not process successfully.');
                return back();

            }

        }

        // The list of the uploaded files ids to be imploded here. 
        Alert::success('Success', 'AI processing successful.');
        return redirect()->route('ai-workarea', ['id' => $uploadsId->id]);

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
