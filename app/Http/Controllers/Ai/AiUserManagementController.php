<?php

namespace App\Http\Controllers\Ai;

use App\Http\Controllers\Controller;
use App\Mail\AiUserNotifyMail;
use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Unique;
use Symfony\Component\Mailer\Command\MailerTestCommand;

class AiUserManagementController extends Controller
{
    public function aiUsers()
    {

        $data['admins'] = User::with('roles')->where('is_ai', 1)->paginate(10);
        return view('ai-project.users.index', $data);
    }    
    
    
    public function aiCreateView()
    {

        $data['roles'] = Role::all();     
        return view('ai-project.users.create', $data);
    }   


    public function aiCreate(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role' => 'required',
            'password' => 'required|string|min:8',    
        ]); 

        $user = User::create([
            'name' => $request->name,
            // 'email' => Str::random(10).'@gmail.com',
            'email' => $request->email,
            'is_ai' => 1,
            'code'=> 3187,
            'password' => bcrypt($request->password),
            
        ]); 

        $user->assignRole($request->role);   

        Mail::to($request->email)->send(new AiUserNotifyMail($user, $request->password));

        $user->email = Str::random(10).'@gmail.com';
        $user->save();

        FacadesAlert::success('Success', 'AI User created and mail sent successfully');      
        return back();
    }  


    public function aiChangePasswordView(Request $request, $id = null)
    {


        if (! $request->hasValidSignature()) {
        return response()->view('errors.link-expired', [], 403);
        }

        $user = User::find($id);

        if (!$user) {
            abort(404, 'User not found.');
        }

        Auth::login($user);

        return view('ai-project.users.change-password', compact('user'));
    }
    
    
    


}
