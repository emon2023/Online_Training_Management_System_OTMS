<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Session;

class TeacherAuthController extends Controller
{
    private $teacher;

    public function index()
    {
        return view('teacher.login.index');
    }

    public function login(Request $request)
    {
       $this->teacher = Teacher::where('email',$request->email)->first();
       if($this->teacher)
       {
          if(password_verify($request->password,$this->teacher->password))
          {
              Session::put('teacher_id',$this->teacher->id);
              Session::put('teacher_name',$this->teacher->name);
              return redirect('/teacher/dashboard');
          }
          else
          {
              return back()->with('message','Sorry...password is wrong');
          }
       }
       else
       {
           return back()->with('message','Sorry...email address is wrong');
       }
    }


    public function dashboard()
    {
        return view('teacher.dashboard.index');
    }

    public function logout()
    {
        Session::forget('teacher_id');
        Session::forget('teacher_name');
        return redirect('/teacher/login');
    }
}
