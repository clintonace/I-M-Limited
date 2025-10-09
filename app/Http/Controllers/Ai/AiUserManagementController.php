<?php

namespace App\Http\Controllers\Ai;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
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
    
    


}
