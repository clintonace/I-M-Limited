<?php

namespace App\Http\Controllers\Ai;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;
use Spatie\Permission\Models\Role;

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
            'email' => $request->email,
            'is_ai' => 1,
            'code'=> 3187,
            'password' => bcrypt($request->password),
        ]); 

        $user->assignRole($request->role);   

        FacadesAlert::success('Success', 'AI User created and mail sent successfully');      
        return back();
    }  

    
    
    


}
