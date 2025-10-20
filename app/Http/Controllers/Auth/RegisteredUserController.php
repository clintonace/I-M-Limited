<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        dd('sorry bro/sis or whatever you are.');
    //         $request->validate([
    //             'name' => ['required', 'string', 'max:255'],
    //             'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
    //             'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //             // 'attack' => 'required'
    //         ]);

    //    if ($request->has('code')) {
    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'code' => 3189,
    //         'password' => Hash::make($request->password),
    //         // 'attack'=> $request->attack
    //     ]);
    //    }else {
    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         // 'attack'=> $request->attack
    //     ]);
    //    }

    //     event(new Registered($user));

    //     Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }


      public function storee(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'rob'=> 'required',
            
        ]);

        if ($request->rob == 'clinton') {
           dd('null');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rob'=>$request->rob,
            
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
