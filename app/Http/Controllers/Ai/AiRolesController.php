<?php

namespace App\Http\Controllers\Ai;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;



class AiRolesController extends Controller
{
    // activity()
    // ->causedBy(Auth::user())
    // ->performedOn($role)
    // ->withProperties(['permission' => $permission->name])
    // ->log('Assigned permission to role');


    public function aiRolePermission()
    {

        $data['roles'] = Role::all();  
        $data['perm'] = Permission::all();
        $data['users'] = User::all();    

        return view('ai-project.roles_permissions.index', $data);
    }


    public function aiRoleToUser(Request $request)
    {

        if (!Auth::user()->hasRole('admin')) {
            Alert::error('Access Denied', 'You are not authorized to perform this action.');
            return back();
            }

            $request->validate([

                'email'=>'required|email|exists:users,email',
                'role'=>'required'
            ]);

            $user = User::where('email', $request->email)->first();
            $user->assignRole($request->role);   

            // Alert::success('Success', 'Assigned Successfully.');
            return back();
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

            // Alert::success('Success', 'You have assigned permissions to this role');
            return back();
        
    }


    // public function aiRevokePermissionsFromRole(Request $request)
    // {

    //         if (!Auth::user()->hasRole('admin')) {
    //         Alert::error('Access Denied', 'You are not authorized to perform this action.');
    //         return back();
    //         }

    //         $request->validate([
    //                 'role' => 'required|exists:roles,name',
    //                 'perm' => 'required|exists:permissions,name',*
    //         ]);

    //         $role =  Role::where('name', $request->role)->firstOrFail();
    //         $permission = Permission::where('name', $request->perm)->firstOrFail();

    //         $role->revokePermissionTo($permission);

    //         Alert::success('Success', 'You have revoked permissions from this role');
    //         return back();
        
    // }


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
    

        // Alert::success('Success', 'Role created.');
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
    

        // Alert::success('Success', 'Permission created.');
        return back();
    }

      public function aiDeletePerm(Request $request)
    {
        $request->validate([
            'perm_id'=>'required',
        ]);

        $user = Auth::user();
        if ($user->hasRole('admin')) {

            $delete = DB::table('permissions')
            ->where('id', $request->perm_id)
            ->delete();
            
            Alert::success('Success', ' Permission deleted');

            return back();

            // return response()->view('errors.link-expired', [], 403);
        }

        return back();
    }


    public function aiDeleteRole(Request $request)
    {
        $request->validate([
            'role_id'=>'required',
        ]);

        $user = Auth::user();
        if ($user->hasRole('admin')) {

            $delete = DB::table('roles')
            ->where('id', $request->role_id)
            ->delete();

            $rows = DB::table('model_has_roles')
            ->where('role_id', $request->role_id)
            ->delete();

            $rows = DB::table('role_has_permissions')
            ->where('role_id', $request->role_id)
            ->delete();
            
            Alert::success('Success', 'Role deleted and every connection to this role disconnected.');
            return back();
            // return response()->view('errors.link-expired', [], 403);
        }

        return back();
    }

    public function aiAllDisplay($display)
    {


        if($display == 'permissions'){
            

            $data['dets'] = Permission::with(['roles', 'users'])->paginate(10);
            $data['display'] = $display;
            return view('ai-project.roles_permissions.display', $data);
        }

        if($display == 'roles'){
            
            $data['dets'] = Role::with('users')->paginate(10);
            $data['display'] = $display;
            return view('ai-project.roles_permissions.display', $data);
        }
        

    }
}
