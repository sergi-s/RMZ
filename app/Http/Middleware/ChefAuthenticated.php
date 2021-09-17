<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChefAuthenticated
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
            // if user is not chef take him to The home page
            if (!Auth::user()->isChef) {
                return redirect()->route('chefform')->with('warning', 'you are not a chef yet, Plz register');
            }

            // allow admin to proceed with request
            else if (Auth::user()->isChef) {
                return $next($request);
            }
        }
        return redirect()->route('login')->with('warning', 'you are not logged in, Plz login');
    }
}
