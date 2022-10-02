<?php

namespace App\Http\Controllers\AuthController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class logoutController extends Controller
{
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('admin login');
    }
}
