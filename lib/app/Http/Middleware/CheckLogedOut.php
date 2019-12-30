<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckLogedOut
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)  //chua dang nhap ma vao trang chu thi phai login
    {
        if(Auth::guest()){
            return redirect()->intended('login');
        }
        return $next($request);
    }
}
