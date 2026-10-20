<?php

namespace App\Http\Controllers\New;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FreeForMeet;
use App\Models\ClientForMeet;
use Carbon\Carbon;

use RealRashid\SweetAlert\Facades\Alert;

class OnboardingController extends Controller
{
    //
    public function contact()
    {

        return view('newonboarding.contact');

    }

    public function bookACall()
    {

        $schedule = FreeForMeet::where('is_active', true)->get();

        // dd($schedule);

        return view('newonboarding.bookacall', compact('schedule'));

    } 
    
    
    public function bookClient(Request $request)
    {
        // dd($request->all());


        $request->merge([
            'start_time' => Carbon::parse(
                $request->date . ' ' . $request->start_time
            )->format('Y-m-d H:i:s'),

            'end_time' => Carbon::parse(
                $request->date . ' ' . $request->end_time
            )->format('Y-m-d H:i:s'),
        ]);
        // Validate the request data
        $validatedData = $request->validate([
            'date' => 'required|date_format:Y-m-d',
            'email' => 'required|email|max:255',
            'start_time' => 'required|date_format:Y-m-d H:i:s',
            'end_time' => 'required|date_format:Y-m-d H:i:s|after:start_time',
            'schedule_id' => 'required|exists:freeformeets,id',
            'notes' => 'nullable|string|max:255',
        ]);


        // Create a new ClientForMeet record
        $clientForMeet = new ClientForMeet();
        $clientForMeet->email = $validatedData['email'];
        $clientForMeet->freeformeet_id = $request->input('schedule_id');
        $clientForMeet->starts_at = $request->input('start_time');
        $clientForMeet->ends_at = $request->input('end_time');
        $clientForMeet->status = 'confirmed'; // Set the status to confirmed
        $clientForMeet->notes = $validatedData['notes'];
        $clientForMeet->save(); 

        Alert::success('Booking Confirmed', 'Your booking has been successfully confirmed!');
        return back();
       

    }   

    public function faqs()
    {
        return view('newonboarding.faqs');
    }

    public function services()
    {
        return view('newonboarding.services');
    }

    public function aboutus()
    {
        return view('newonboarding.aboutus');
    }

    public function howItWorks()
    {
        return view('newonboarding.howitworks');
    }

}
