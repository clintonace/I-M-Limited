<?php

namespace App\Http\Controllers;

use App\Mail\PromptUsersMail;
use App\Models\Information;
use App\Models\PromptUsers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class BroadcastController extends Controller
{
    public function promptView()
    {

        $data['users'] = User::all();
        $data['infos'] = Information::all();
        return view('admin.broadcast.index', $data);
    }

    public function promptCreate(Request $request)
    {

        $validatedData = $request->validate([
            'percentage' => 'integer|min:25|max:100',
            // 'email' => 'email',
            'message' => 'required|string',
        ]);

        $usersPercentage = Information::where('profile_completion_percentage', "<=" , $request->percentage)->latest()->get();


        // dd($usersPercentage);
        if ($usersPercentage->isEmpty()) {

            Alert::info('Info', 'No user with this specification.');
            return back();
        }

        // dd('here');
        $usersPrompt = PromptUsers::create($validatedData);
        foreach ($usersPercentage as $user) {
            // dd($user->email);

            Mail::to("$user->email")->send(new PromptUsersMail($usersPrompt));
        }

        Alert::success('Success', 'Broadcast Prompt Sent Successfully.');
        return back();

    }
}
