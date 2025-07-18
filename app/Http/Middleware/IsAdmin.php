<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check())
        {
            if(Auth::user()->is_admin === 'y')
            {
                return $next($request);
            }
            else
            {
                Session::flush();
                return redirect()->route('login');
            }
        }
        else
        {
            return redirect()->route('login');
        }
    }
}
