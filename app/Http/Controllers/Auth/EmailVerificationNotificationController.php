<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
    {

        $user = $request->user();

        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        // $request->user()->sendEmailVerificationNotification();

            $code = random_int(10000, 99999);

            $user->email_code = $code;
            $user->save();

            // Mail::send(
            //     'emails.verify-email', 
            //     ['user' => $user, 'code' => $code],
            //     function ($message) use ($user) {
            //         $message->to($user->email)
            //             ->subject('Verify Your Email Address');
            //     }
            // );

            Mail::to($user->email)->send(
                new VerifyCodeMail($user, $code)
            );

        return back()->with('status', 'verification-link-sent');
    }
}
