<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Company;
use App\Models\Department;
use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CompanyController extends Controller
{
    public function profileView()
    {

        $data['depts'] = Department::latest()->get();
        return view('company.update-profile', $data);
    }

    public function profile()
    {

        $data['user']= Auth::user();
        $data['company'] = Company::where('user_id', $data['user']->id)->first();
        return view('company.profile', $data);
    }

    public function profileUpdate(Request $request)
    {

        $validatedData = $request->validate([
            'company_name' => 'nullable|string|max:255',
            'company_email' => 'nullable|email|max:255',
            'country' => 'nullable|string|max:255',
            'company_logo' => 'nullable',
            'company_address' => 'nullable|string',
            'company_phone' => 'nullable|string|max:20',
            'company_size' => 'nullable|string|max:50',
            'company_since' => 'nullable|string|max:10',
            'company_description' => 'nullable|string',
            'company_sector' => 'nullable|string|max:100',
        ]);


        $user = Auth::user();

        $image = self::imageUploader($validatedData['company_logo'], $user, 'Company_logo');
        $company = new Company();
        $company->company_name = $validatedData['company_name'] ?? null;
        $company->company_email = $validatedData['company_email'] ?? null;
        $company->country = $validatedData['country'] ?? null;
        $company->company_logo = $image ?? null;
        $company->company_address = $validatedData['company_address'] ?? null;
        $company->company_phone = $validatedData['company_phone'] ?? null;
        $company->company_size = $validatedData['company_size'] ?? null;
        $company->company_since = $validatedData['company_since'] ?? null;
        $company->company_description = $validatedData['company_description'] ?? null;
        $company->company_sector = $validatedData['company_sector'] ?? null;
        $company->user_id = Auth::user()->id;
        $company->save();

        Alert::success('Success', 'Company details save.');
        return back();

    }

    public function eventsDisplay()
    {

        $data['user']= Auth::user();
        $data['company'] = Company::where('user_id', $data['user']->id)->get();
        $data['bookings']= Booking::where('company_email', $data['user']->email)->get();
        return view('company.events', $data);
    }
    public function requestsDisplay()
    {


        $data['user']= Auth::user();
        $data['company'] = Company::where('user_id', $data['user']->id)->get();
        $data['reqs']= ModelsRequest::where('company_email', $data['user']->email)->get();
        return view('company.request', $data);
    }












      // My tools
      public static function imageUploader($fileRequest, $user, $folderName){


        $ext = $fileRequest->getClientOriginalExtension();
        $name = \Str::slug($user->name).time().".".$ext;
        $file_path = $fileRequest->storeAs('public/'.$folderName, $name);

        $file_name = '/'.'storage/'.$folderName.'/'.$name;
        return $file_name;

    }
    public static function videoUploader($fileRequest, $user, $folderName){


        $ext = $fileRequest->getClientOriginalExtension();
        $name = \Str::slug($user->name).time().".".$ext;
        $file_path = $fileRequest->storeAs('public/'.$folderName, $name);

        $file_name = '/'.'storage/'.$folderName.'/'.$name;
        return $file_name;

    }

    public function testEureka()
    {

        // return view('test-eureka');

        return view('ai-project.index');

    }


    public function aiProject()
    {


        dd('here');
        return view('ai-project.index');
    }
}
