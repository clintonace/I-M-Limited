<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SiteBuilderController extends Controller
{
    public function testimoniesView()
    {
        $data['companies'] = Company::all();
        return view('admin.site-builder.testimonies', $data);
    }


    public function storeTestimony(Request $request)
{

    $request->validate([
        'title' => 'nullable|string|max:255',
        'testimony' => 'nullable|string',
        'name' => 'nullable|string|max:255',
    ]);

    $logo=self::imageUploader($request->logo, Auth::user(), 'Testimony-Logo-uploads');

    Testimony::create([
        'title' => $request->title,
        'testimony' => $request->testimony,
        'logo' => $logo,
        'name' => $request->name,
    ]);

    Alert::success('Success', 'Testimony added successfully.');
    return back();

}


public static function imageUploader($fileRequest, $user, $folderName){


    $ext = $fileRequest->getClientOriginalExtension();
    $name = \Str::slug($user->name).time().".".$ext;
    $file_path = $fileRequest->storeAs('public/'.$folderName, $name);

    $file_name = '/'.'storage/'.$folderName.'/'.$name;
    return $file_name;

}
}


