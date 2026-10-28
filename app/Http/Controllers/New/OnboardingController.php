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

        Alert::success('Free Time Updated', 'Your free time has been successfully updated!');
        return back();
       

    }   

    // public function editFreeTime(Request $request, $id= null)
    // {

    //     dd($request->all());
    //     // $clientForMeet = ClientForMeet::findOrFail($id);
    //     // $schedule = FreeForMeet::where('is_active', true)->get();

    //     // return view('newonboarding.editbookacall', compact('clientForMeet', 'schedule'));
        
        
    // }

    public function editFreeTime(Request $request, $id)
    {
        $validated = $request->validate([
            'day_of_week' => 'required|integer|between:1,7',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'duration_minutes' => 'required|integer|min:1',
            'is_active' => 'required|boolean',
        ]);

        // Round both times to the nearest hour
        $roundTime = function ($time) {
            $date = Carbon::createFromFormat('H:i', $time);

            if ($date->minute >= 30) {
                $date->addHour();
            }

            return $date->startOfHour()->format('H:i:s');
        };

        $startTime = $roundTime($validated['start_time']);
        $endTime = $roundTime($validated['end_time']);

        // Prevent saving an invalid time range after rounding
        if ($endTime <= $startTime) {
            return back()
                ->withInput()
                ->withErrors([
                    'end_time' => 'The end time must be later than the start time after rounding.',
                ]);
        }

        $freetime = Freeformeet::findOrFail($id);

        $freetime->update([
            'day_of_week' => $validated['day_of_week'],
            'start_time' => $startTime,
            'end_time' => $endTime,
            'duration_minutes' => $validated['duration_minutes'],
            'is_active' => $validated['is_active'],
        ]);

        Alert::success('Free Time Updated', 'Your free time has been successfully updated!');
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
