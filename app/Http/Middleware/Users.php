<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Closure;

class Users
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check())
        {
            if (auth()->user()->admin == 0) {
                return $next($request);
            }
        }
        else{
            return redirect('/admin/login');    
        }
        return redirect('/admin')->with('error', 'You are not admin, So you cant access User properties');
    }
}
