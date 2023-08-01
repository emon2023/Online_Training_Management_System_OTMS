<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Training;
use Illuminate\Http\Request;
use Session;

class TrainingController extends Controller
{
    private  $training, $trainings, $categories;

    public  function index()
    {
        $this->categories = Category::all();
        return view('teacher.training.index',['categories'=>$this->categories]);
    }

    public  function create(Request $request)
    {
        $this->validate($request,[
            'title'         => 'required',
            'description'   => 'required',
            'starting_date' => 'required',
            'prize'         => 'required',
            'image'         => 'required|image',
        ]);

        Training::newTraining($request);
        return back()->with('message','Training Info Create Successfully');
    }


    public  function manage()
    {
        $this->trainings = Training::where('teacher_id',Session::get('teacher_id'))->get();
        return view('teacher.training.manage',['trainings'=> $this->trainings]);
    }

    public  function edit($id)
    {
        $this->training = Training::find($id);
        return view('teacher.training.edit',['training'=> $this->training]);
    }
    public  function detail($id)
    {
        $this->training = Training::find($id);
        return view('teacher.training.detail',['training'=> $this->training]);
    }



    public  function update(Request $request,$id)
    {
        Training::updatedTraining($request,$id);
        return redirect('/training/manage')->with('message','Training Info Update Successfully');

    }

    public  function delete($id)
    {
        Training::deleteTraining($id);
        return back()->with('message','Training Info Delete Successfully');
    }
}
