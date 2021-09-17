<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VIPAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            // if user is not VIP take him to The home page
            if (!Auth::user()->isVIP) {
                return redirect()->route('vipform')->with('warning', 'you are not a VIP user, Plz register');
            }

            // allow VIP to proceed with request
            else if (Auth::user()->isVIP) {
                return $next($request);
            }
        }
        return redirect()->route('login')->with('warning', 'you are not Loggedin, Plz login');;
    }
}
