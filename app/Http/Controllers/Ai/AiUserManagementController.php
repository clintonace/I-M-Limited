<?php

namespace App\Http\Controllers\Ai;

use App\Http\Controllers\Controller;
use App\Mail\AiUserNotifyMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

        $data['admins'] = User::with('roles')
            ->where('is_ai', 1)
            ->paginate(10);
        return view('ai-project.users.index', $data);
    }    
    
    
    public function aiCreateView()
    {

        $data['roles'] = Role::where('name', '!=' , 'admin')->get();     
        return view('ai-project.users.create', $data);
    }  
    
    
    public function aiUsersFromRole($id = null)
    {

        $role = Role::findOrFail($id);
        $data['dets'] = $role->users()->distinct()->paginate(20); 
        $data['display'] = $role->name;   

        return view('ai-project.roles_permissions.display', $data);
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
            'rob'=>'clinton',
            'password' => bcrypt($request->password),
            
        ]); 

        $user->assignRole($request->role);   

        Mail::to($request->email)->send(new AiUserNotifyMail($user, $request->password));

        // $user->email = Str::random(10).'@gmail.com';
        // $user->save();

        // FacadesAlert::success('Success', 'AI User created and mail sent successfully');      
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

    public function aiDeleteUser($id= null)
    {

        $user = Auth::user();
        if ($user->hasRole('admin')) {

            $delete = User::find($id);
            $delete->delete();

            $rows = DB::table('model_has_roles')
            ->where('model_id', $id)
            ->delete();
            
            FacadesAlert::success('Success', 'User deleted');

            return back();

            // return response()->view('errors.link-expired', [], 403);
        }

        return back();
    }

    public function aiChangePassword(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',    
        ]); 

        $user = User::where('email', $request->email)->first();

        if ($user) {

            $user->email_verified_at = Carbon::now();
            $user->name = $request->name;
            $user->password = bcrypt($request->password);
            $user->save();
          
            FacadesAlert::success('Success', 'You can access this tool now within the permissions granted to you.');
            return back();
        }

        FacadesAlert::info('Info', 'Email error reach out to you up-line.');
        return back();

    }


     public function aiChangeDets(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',    
        ]); 

        $user = User::where('email', Auth::user()->email)->first();

        if ($user) {

            $user->email_verified_at = Carbon::now();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
          
            FacadesAlert::success('Success', 'Details changed.');
            return back();
        }

        FacadesAlert::info('Info', 'Email error reach out to you up-line.');
        return back();

    }
    
    
    


}
