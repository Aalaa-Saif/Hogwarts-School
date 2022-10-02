<?php

namespace App\Http\Controllers\AuthController;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\registerRequest;

class RegisterController extends Controller
{
    public function store(registerRequest $request){
        //validation
        User::create([
            "name" => $request->name,
            "email" =>$request->email,
            "password" => Hash::make($request->password),
        ]);

        return redirect()->back()->with(['success' => 'Register Done Seccessfully :)']);

    }


    public function register(){
        return view('myApp.auth.register');
    }
}
