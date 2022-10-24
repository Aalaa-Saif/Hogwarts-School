<?php

namespace App\Http\Controllers\GodricController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BladeController extends Controller
{



    public function MainPage(){
        return view('myApp.main');
    }

}

