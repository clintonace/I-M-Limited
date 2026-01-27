<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerifyCodeController extends Controller
{
    public function verifyCode(Request $request)
    {
        $request->validate([
            'code' => 'required|digits:5',
        ]);

        $user = $request->user();

        if ($user->email_code == $request->code) {
            // Mark email as verified
            $user->markEmailAsVerified();

            return redirect()->intended('/home?verified=1');
        } else {
            return back()->withErrors(['code' => 'The provided verification code is incorrect.']);
        }
    }
}
