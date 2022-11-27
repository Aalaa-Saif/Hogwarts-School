<?php

namespace App\Http\Controllers\AuthController;

use view;
use File;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\loginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AuthController\LoginController;

class LoginController extends Controller
{

    public function admin_login(loginRequest $request){
        //validation

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->intended('dashboard');
        }
        return redirect()->back()->onlyInput('email');
    }


    public function bladeDashboard(){
        $user = Auth::user();
        return view('layouts.dashboard-layout',['user'=> $user]);
    }

    public function bladelogin(){
        return view('myApp.auth.login');
    }

    public function updateAdminName(Request $request, $id){
        $update = Auth::user()->find($id);
        if(!$update)
        return redirect()->back()->with(['name_fail'=>'name didn\'t update']);

        //update
        $update->name = $request->name;
        $update->update();

        return redirect()->route('dashboard');
    }

}
