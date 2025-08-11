<?php

namespace App\Http\Controllers;

use App\Mail\BookingCancelNotification;
use App\Mail\BookingNotification;
use App\Mail\RequestResponseNotification;
use App\Models\Booking;
use App\Models\Company;
use App\Models\Department;
use App\Models\Education;
use App\Models\Information;
use App\Models\Media;
use App\Models\Request as ModelsRequest;
use App\Models\User;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{


    public function deactivateCompany($company)
    {

        $com = Company::findOrFail($company);
        $com->is_active = 0;
        $com->save();
        Alert::success('Success', 'Company Deactivated');
        return back();
    }
    public function activateCompany($company)
    {

        $com = Company::findOrFail($company);
        $com->is_active = 1;
        $com->save();
        Alert::success('Success', 'Company Activated');
        return back();
    }
    public function book(Request $request)
    {

        $request->validate([
            'company_email'=>'required',
            'candidate_email'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'link'=>'required',
            'details'=>'required',
        ]);

        $book = new Booking();
        $book->company_email = $request->company_email;
        $book->candidate_email = $request->candidate_email;
        $book->start_date = $request->start_date;
        $book->end_date = $request->end_date;
        $book->start_time = $request->start_time;
        $book->end_time = $request->end_time;
        $book->link = $request->link;
        $book->participants= $request->participants;
        $book->details = $request->details;
        $book->save();

        $message = [
            'start_date' => $book->start_date,
            'end_date' => $book->end_date,
            'start_time' => $book->start_time,
            'end_time' => $book->end_time,
            'link' => $book->link,
            'details' => $book->details,
            'participants' => $book->participants,
        ];

        Mail::to('clintonace09@gmail.com')
            ->cc($book->company_email)
            ->bcc($book->candidate_email)
            ->send(new BookingNotification($message));

        Alert::success('Success', 'Meeting fixed, reminder mails sent successfully.');
        return redirect()->route('admin.all.events');

    }

    public function updateEvent(Request $request, Booking $booking)
    {
        $request->validate([
            'company_email' => 'required',
            'candidate_email' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'link' => 'required',
            'details' => 'required',
            'participants' => 'required',
        ]);

        $book = Booking::updateOrCreate(
            [
                'id' => $booking->id,
            ],
            [
                'company_email' => $request->company_email,
                'candidate_email' => $request->candidate_email,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'link' => $request->link,
                'participants' => $request->participants,
                'details' => $request->details,
            ]
        );

        $message = [
            'start_date' => $book->start_date,
            'end_date' => $book->end_date,
            'start_time' => $book->start_time,
            'end_time' => $book->end_time,
            'link' => $book->link,
            'details' => $book->details,
            'participants' => $book->participants,
        ];

        Mail::to('clintonace09@gmail.com')
            ->cc($book->company_email)
            ->bcc($book->candidate_email)
            ->send(new BookingNotification($message));

        Alert::success('Success', 'Meeting fixed, reminder mails sent successfully.');
        return redirect()->route('admin.all.events');
    }

    public function bookEvent()
    {
        $data['infos'] = Information::all();
        $data['companies'] = Company::all();
        return view('admin.book-event', $data);
    }

    public function activateUser($info)
    {

        $theUser= Information::findOrFail($info);

        if ($theUser->is_active == 1 ) {
            Alert::info('Info', 'This user is already activated.');
            return back();
        }

        if ($theUser->is_active == 0 ) {
            $theUser->is_active = 1;
            $theUser->save();
            Alert::success('Success', 'You have activated this user. The profile will be live now.');
            return back();
        }
    }

    public function deactivateUser($info)
    {

        $theUser= Information::findOrFail($info);

        if ($theUser->is_active == 0 ) {
            Alert::info('Info', 'This user is already deactivated.');
            return back();
        }

        if ($theUser->is_active == 1 ) {
            $theUser->is_active = 0;
            $theUser->save();
            Alert::success('Success', 'You have deactivated this user. The profile will not be displayed anymore.');
            return back();
        }
    }

    public function allCompanies()
    {

        $users = User::whereCode(3189)->where('is_new', true)->get();
        foreach ($users as $user) {
            $user->is_new = false;
            $user->save();
        }

        $data['companies'] = Company::all();
        $data['depts'] = Department::latest()->get();
        return view('admin.all-company', $data);
    }

    public function editCompanyView($c)
    {
        $data['company'] = Company::findOrFail($c);
        $data['depts'] = Department::latest()->get();

        return view('admin.edit-company', $data);

    }

    public function editCompany(Request $request, $id)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'company_name' => 'nullable|string|max:255',
            'company_email' => 'nullable|email|max:255',
            'country' => 'nullable|string|max:255',
            'company_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'company_address' => 'nullable|string',
            'company_phone' => 'nullable|string|max:20',
            'company_size' => 'nullable|string|max:50',
            'company_since' => 'nullable|string|max:10',
            'company_description' => 'nullable|string',
            'company_sector' => 'nullable|string|max:100',
        ]);

        // Retrieve the company record
        $company = Company::findOrFail($id);

        // Check if the logged-in user owns the company record
        // if ($company->user_id !== Auth::id()) {
        //     Alert::error('Error', 'You are not authorized to edit this company.');
        //     return back();
        // }

        // Handle the company logo upload
        if ($request->hasFile('company_logo')) {
            $image = self::imageUploader($validatedData['company_logo'], $company->company_name, 'Company_logo');
            $company->company_logo = $image;
        }

        // Update the company details
        $company->company_name = $validatedData['company_name'] ?? $company->company_name;
        $company->company_email = $validatedData['company_email'] ?? $company->company_email;
        $company->country = $validatedData['country'] ?? $company->country;
        $company->company_address = $validatedData['company_address'] ?? $company->company_address;
        $company->company_phone = $validatedData['company_phone'] ?? $company->company_phone;
        $company->company_size = $validatedData['company_size'] ?? $company->company_size;
        $company->company_since = $validatedData['company_since'] ?? $company->company_since;
        $company->company_description = $validatedData['company_description'] ?? $company->company_description;
        $company->company_sector = $validatedData['company_sector'] ?? $company->company_sector;

        // Save the updated details
        $company->save();

        Alert::success('Success', 'Company details updated successfully.');
        return back();
    }

    public function allCandidates()
    {
        $users = User::with('info')->whereCode(3188)->get();
        foreach ($users->where('is_new', true) as $user) {
            $user->is_new = false;
            $user->save();
        }
        return view('admin.all-candidates', compact('users'));
    }

    public function allUsers()
    {
        $users = User::with('info')->where('code',3188)->get();
        return view('admin.all-users', compact('users'));
    }

    public function deleteUser($userId = null)
    {

        //we have to delete the user and all the related data
        // information, works, educations, medias, bookings, requests
        // dd($userId);
        $user = User::findOrFail($userId);
        $user->delete();
        Alert::success('Success', 'User deleted successfully.');
        return back();
    }

    public function allRequest()
    {
        $data['reqs'] = ModelsRequest::all();

        foreach ($data['reqs']->where('is_new', true) as $req) {
            $req->is_new = false;
            $req->save();
        }
        return view('admin.all-request', $data);
    }

    public function allEvents()
    {
        $data['bookings'] = Booking::all();

        return view('admin.all-events', $data);
    }

    public function singleCandidate($email)
    {

        $data['user'] = User::with('info')->whereEmail($email)->first();
        $data['works'] = Work::where('user_id', $data['user']->id)->get();
        $data['eds'] = Education::where('user_id', $data['user']->id)->get();
        $data['medias'] = Media::where('user_id', $data['user']->id)->get();
        $data['bookings'] = Booking::where('candidate_email', $data['user']->email)->get();
        // $data['reqs'] = ModelsRequest::where('candidate_email', $data['user']->email)->get();
        return view('admin.single-candidate', $data);
    }

    public function singleRequest($request_id)
    {
        $data['request'] = ModelsRequest::findOrFail($request_id);
        return view('admin.single-request', $data);
    }

    public function cancelEvent($booking)
    {

        $book = Booking::findOrFail($booking);
        $message = [
            'start_date' => $book->start_date,
            'end_date' => $book->end_date,
            'start_time' => $book->start_time,
            'end_time' => $book->end_time,
            'link' => $book->link,
            'details' => $book->details,
            'participants' => $book->participants,
        ];

        Mail::to('clintonace09@gmail.com')
            ->cc($book->company_email)
            ->bcc($book->candidate_email)
            ->send(new BookingCancelNotification($message));

        Alert::success('Success', 'Meeting Cancelled, reminder mails sent successfully.');
        return redirect()->route('admin.all.events');
    }

    public function remakeEvent($booking)
    {

        $data['booking']= Booking::findOrFail($booking);
        $data['infos'] = Information::all();
        $data['companies'] = Company::all();
        return view('admin.remake-event', $data);

    }

    public function respondRequest($req)
    {

        $respond = ModelsRequest::findOrFail($req);
        $respond->response ='We got you mail, we will respond to you shortly.';
        $message = [
            'response' => 'We got you mail, we will respond to you shortly.',
        ];

        Mail::to('clintonace09@gmail.com')
            ->cc($respond->company_email)
            ->send(new RequestResponseNotification($message));

            $respond->save();
        Alert::success('Success', 'Response Mail sent.');
        return back();
    }




    public static function imageUploader($fileRequest, $user, $folderName){


        $ext = $fileRequest->getClientOriginalExtension();
        $name = \Str::slug('edited').time().".".$ext;
        $file_path = $fileRequest->storeAs('public/'.$folderName, $name);

        $file_name = '/'.'storage/'.$folderName.'/'.$name;
        return $file_name;

    }



}
