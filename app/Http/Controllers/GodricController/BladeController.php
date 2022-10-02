<?php

namespace App\Http\Controllers\GodricController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BladeController extends Controller
{

    //Departments Blade

    public function departments(){
        return view('myApp.departments.departments');
    }

    public function departments2(){
        return view('myApp.departments.departments2');
    }








    public function MainPage(){
        return view('myApp.main');
    }


    public function bladeHeader(){
        return view('include.header');
    }

    public function bladeFooter(){
        return view('include.footer');
    }



}

