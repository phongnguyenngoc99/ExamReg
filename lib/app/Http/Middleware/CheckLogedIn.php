<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckLogedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)  // dang nhap roi ma vao login thi vao home
    {
        if(Auth::check()){
            return redirect()->intended('admin/home');
        }
        return $next($request);
    }
}
