<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use function PHPUnit\Runner\validate;

class TeacherController extends Controller
{
    private $teacher, $teachers;

    public  function index()
    {
        return view('admin.teacher.index');
    }

    public  function create(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'mobile' => 'required',
            'image' => 'required|image',
        ]);

        Teacher::newTeacher($request);
        return back()->with('message','Create Teacher Info Successfully');
    }


    public  function manage()
    {
        $this->teachers = Teacher::all();
        return view('admin.teacher.manage',['teachers'=>$this->teachers]);
    }

    public  function edit($id)
    {
        $this->teacher = Teacher::find($id);
        return view('admin.teacher.edit',['teacher'=>$this->teacher]);
    }

    public  function update(Request $request,$id)
    {
        Teacher::updatedTeacher($request, $id);
        return redirect('/teacher/manage')->with('message','Update Teacher Info Successfully');
    }

    public  function delete($id)
    {
        Teacher::deleteTeacher($id);
        return back()->with('message','Delete Teacher Info Successfully');
    }


}
