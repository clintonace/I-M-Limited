<?php

namespace App\Http\Controllers\New;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Freeformeet;
use App\Models\Clientformeet;
use App\Models\FaqQuestion;
use Carbon\Carbon;
use App\Jobs\SendClientMailJob;
use App\Mail\MeetingBookingMail;
use Illuminate\Support\Facades\Mail;

use RealRashid\SweetAlert\Facades\Alert;

class OnboardingController extends Controller
{
    //


    public function sendClientMail(Request $request, Clientformeet $id)
    {

    // dd($request->all(), $id);

        $email = $id->email;

        // dd($email);

        if($email == null){

            Alert::error('Error', 'No mail was associated with this.');
            return back();
        }

        $validated = $request->validate([
            
            'subject' => ['required', 'string', 'max:255'],
            'note' => ['required', 'string'],
        ]);

        SendClientMailJob::dispatch(
            $email,
            auth()->user()->email,
            $validated['subject'],
            $validated['note']
        );

        Alert::success('Mail queued', 'Your mail has been queued and wwill be sent shortly!');

        return back();
    }

    


    public function contact()
    {

        return view('newonboarding.contact');

    }

    public function bookACall()
    {

        $schedule = Freeformeet::where('is_active', true)->get();

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

        // Get the selected schedule
        $schedule = Freeformeet::findOrFail(
            $validatedData['schedule_id']
        );

        // Check how many bookings already exist for this schedule and day
        $bookedCount = Clientformeet::where(
            'freeformeet_id',
            $schedule->id
        )
            ->whereDate('starts_at', $validatedData['date'])
            ->where('status', 'confirmed')
            ->count();

        // Get the maximum number of slots available per day
        $availableSlots = $schedule->slots_per_day;

        // Stop booking if all slots are filled
        if ($bookedCount >= $availableSlots) {
            Alert::error(
                'Booking Filled',
                'Sorry, all available booking slots for this day have been filled.'
            );

            return back()->withInput();
        }


        // Create a new Clientformeet record
        $clientForMeet = new Clientformeet();
        $clientForMeet->email = $validatedData['email'];
        $clientForMeet->freeformeet_id = $request->input('schedule_id');
        $clientForMeet->starts_at = $request->input('start_time');
        $clientForMeet->ends_at = $request->input('end_time');
        $clientForMeet->status = 'confirmed'; // Set the status to confirmed
        $clientForMeet->notes = $validatedData['notes'];
        $clientForMeet->save(); 

        // Prepare meeting details
        $meetingDate = Carbon::parse($validatedData['start_time'])
            ->format('d M Y');

        $startTime = Carbon::parse($validatedData['start_time'])
            ->format('h:i A');

        $endTime = Carbon::parse($validatedData['end_time'])
            ->format('h:i A');

        // Application email from your mail configuration
        $adminEmail = config('mail.from.address');

        // Queue notification to the application email
        if ($adminEmail) {
            Mail::to($adminEmail)->queue(
                new MeetingBookingMail(
                    'admin',
                    $clientForMeet->email,
                    $meetingDate,
                    $startTime,
                    $endTime,
                    $clientForMeet->notes
                )
            );
        }

        // Queue confirmation to the client
        Mail::to($clientForMeet->email)->queue(
            new MeetingBookingMail(
                'client',
                $clientForMeet->email,
                $meetingDate,
                $startTime,
                $endTime,
                $clientForMeet->notes
            )
        );

        Alert::success('Meeting Booked', 'Your meeting has been booked you will recieve a confirmation mail!');
        return back();
       

    }   

    // public function editFreeTime(Request $request, $id= null)
    // {

    //     dd($request->all());
    //     // $clientForMeet = Clientformeet::findOrFail($id);
    //     // $schedule = Freeformeet::where('is_active', true)->get();

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

        // Calculate total available minutes
        $start = Carbon::createFromFormat('H:i:s', $startTime);
        $end = Carbon::createFromFormat('H:i:s', $endTime);

        $totalMinutes = $start->diffInMinutes($end);

        // Calculate available slots using the duration
        $slotsPerDay = intdiv(
            $totalMinutes,
            $validated['duration_minutes']
        );

        if ($slotsPerDay < 1) {
            return back()
                ->withInput()
                ->withErrors([
                    'duration_minutes' => 'The selected duration must allow at least one booking slot.',
                ]);
        }

        // Update the free-time schedule
        $freetime = Freeformeet::findOrFail($id);

        $freetime->update([
            'day_of_week' => $validated['day_of_week'],
            'day_name' => Carbon::now()
                ->startOfWeek()
                ->addDays((int) $validated['day_of_week'] - 1)
                ->format('l'),
            'start_time' => $startTime,
            'end_time' => $endTime,
            'duration_minutes' => $validated['duration_minutes'],
            'slots_per_day' => $slotsPerDay,
            'is_active' => $validated['is_active'],
        ]);

        Alert::success(
            'Free Time Updated',
            "Your free time has been updated successfully. {$slotsPerDay} booking slots are available per day."
        );

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

    public function sendFaqMail(Request $request)
    {
        // Silently ignore bots that fill the hidden honeypot field
        if ($request->filled('website')) {
            return back();
        }

        $validated = $request->validate([
            // 'name' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            // 'subject' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        FaqQuestion::create($validated);

        Alert::success('Question Received', 'Thank you! Your question has been received and we will get back to you shortly.');

        return back();
    }


    

}
