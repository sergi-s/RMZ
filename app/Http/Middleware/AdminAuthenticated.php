<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminAuthenticated
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
            // if user is not admin take him to the home page
            if (!Auth::user()->isAdmin) {
                return redirect()->route('home')->with('error', 'Unauthorized Access, you are not an admin');
            }

            // allow admin to proceed with request
            else if (Auth::user()->isAdmin) {
                return $next($request);
            }
        }
        return redirect()->route('login')->with('warning', 'you are not logged in, Plz login');;
    }
}
