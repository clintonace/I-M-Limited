<?php

namespace App\Http\Controllers\Ai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class AiRolesController extends Controller
{
    

    public function aiRolePermission()
    {

        $data['roles'] = Role::all();  
        $data['perm'] = Permission::all();  

        return view('ai-project.roles_permissions.index', $data);
    }


    public function aiAssignPermissionsToRole(Request $request)
    {

            if (!Auth::user()->hasRole('admin')) {
            Alert::error('Access Denied', 'You are not authorized to perform this action.');
            return back();
            }

            $request->validate([
                    'role' => 'required|exists:roles,name',
                    'perm' => 'required|exists:permissions,name',
            ]);

            $role =  Role::where('name', $request->role)->firstOrFail();
            $permission = Permission::where('name', $request->perm)->firstOrFail();

            $role->givePermissionTo($permission);

            Alert::success('Success', 'You have assigned permissions to this role');
            return back();
       
    }


    public function aiCreateRole(Request $request)
    {

        if (!Auth::user()->hasRole('admin')) {
            Alert::error('Access Denied', 'You are not authorized to perform this action.');
            return back();
            }


        $request->validate([

            'role' => 'required|unique:roles,name',

        ]);


        $role = new Role();
        $role->name = $request->role;
        $role->save();
    

        Alert::success('Success', 'Role created.');
        return back();
    }

    public function aiCreatePermission(Request $request)
    {

        if (!Auth::user()->hasRole('admin')) {
            Alert::error('Access Denied', 'You are not authorized to perform this action.');
            return back();
            }


        $request->validate([

            'permission' => 'required|unique:permissions,name',

        ]);


        $permission = new Permission();
        $permission->name = $request->permission;
        $permission->save();
    

        Alert::success('Success', 'Permission created.');
        return back();
    }

    public function aiAllDisplay($display)
    {


        if($display == 'permissions'){
            

            $data['dets'] = Permission::paginate(2);
            return view('ai-project.roles_permissions.display', $data);
        }

        if($display == 'roles'){
            
            $data['dets'] = Role::paginate(2);
            return view('ai-project.roles_permissions.display', $data);
        }
        

    }
}
