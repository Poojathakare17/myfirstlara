<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == "admin" && Auth::guard($guard)->check()) {
            return redirect('/admin');
        }
        if ($guard == "customer" && Auth::guard($guard)->check()) {
            return redirect('/customer');
        }
        if ($guard == "support" && Auth::guard($guard)->check()) {
            return redirect('/support');
        }
        if ($guard == "marketing" && Auth::guard($guard)->check()) {
            return redirect('/marketing');
        }
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }

        return $next($request);
    }
}