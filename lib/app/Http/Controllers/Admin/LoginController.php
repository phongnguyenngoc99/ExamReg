<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    //
    public function getLogin(){
    	return view('backend.login');   // hien thi trang login
    }

    public function postLogin(Request $request) //postLogin dung de gui yeu caau -> database
    {
  
    	$arr = ['id' => $request->id, 'password' =>$request->password];
        if ($request->remember = 'Remember Me') {
            $remember = true;
        }
        else {
            $remember = false;
        }
    	if(Auth::attempt($arr, $remember)){
            if(Auth::user()->level == 2){
    		     return redirect()->intended('admin/subs/add');  
            }
            else if(Auth::user()->level == 1){
                 return redirect()->intended('admin/home');  
            }
    	}
    	else
    		return back()->withInput()->with('error','Tài khoản hoặc mật khẩu chưa đúng'); //if false
    } 
}
