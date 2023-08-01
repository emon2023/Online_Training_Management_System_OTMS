<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $trainings;
    public  function index()
    {
        $this->trainings = Training::where('status', 1)->get();
        return view('website.home.index',['trainings'=>$this->trainings]);
    }

    public  function about()
    {
        return view('website.about.index');
    }

    public  function trainingCategory()
    {
        return view('website.training-category.index');
    }

    public  function allTraining()
    {
        return view('website.training.index');
    }

    public  function contact()
    {
        return view('website.contact.index');
    }

    public  function auth()
    {
        return view('website.auth.index');
    }
}
