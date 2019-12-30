<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    public function getHome(){ //ham login
    	return view('backend.home');  //sau khi LogIn -> tro toi file views: home.blade.php
    }

    public function getLogout(){ // ham logout
    	Auth::logout();
    	return redirect()->intended('login');  //sau khi LogOut -> tro toi file views: login.blade.php
    }
}
