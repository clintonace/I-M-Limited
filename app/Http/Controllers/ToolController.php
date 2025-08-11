<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Hobby;
use App\Models\Skill;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ToolController extends Controller
{
    public function deptView()
    {
        $data['department']= Department::latest()->get();
        return view('admin.tools.department', $data);
    }

    public function skillView()
    {
        $data['skill']= Skill::latest()->get();
        return view('admin.tools.skill', $data);
    }

    public function hobbyView()
    {
        $data['hobby']= Hobby::latest()->get();
        return view('admin.tools.hobby', $data);
    }

    public function deptCreate(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $dept = new Department();
        $dept->name = $request->name;
        $dept->save();

        Alert::success('Success', 'Department updated Successfully.');
        return back();
    }

    public function skillCreate(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $skill = new Skill();
        $skill->name = $request->name;
        $skill->save();

        Alert::success('Success', 'Skill updated Successfully.');
        return back();
    }

    public function hobbyCreate(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $hobby = new Hobby();
        $hobby->name = $request->name;
        $hobby->save();

        Alert::success('Success', 'Hobby updated Successfully.');
        return back();
    }


    public function deptEdit(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $dept = Department::findOrFail($request->id);
        $dept->name = $request->name;
        $dept->save();

        Alert::success('Success', 'Department updated Successfully.');
        return back();
    }
    public function skillEdit(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $dept = Skill::findOrFail($request->id);
        $dept->name = $request->name;
        $dept->save();

        Alert::success('Success', 'Skill updated Successfully.');
        return back();
    }
    public function hobbyEdit(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $dept = Hobby::findOrFail($request->id);
        $dept->name = $request->name;
        $dept->save();

        Alert::success('Success', 'Hobby updated Successfully.');
        return back();
    }
}
