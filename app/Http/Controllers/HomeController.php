<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application Home page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        //TODO 1 get all meals

        // dd($request->user());
        return view('home');
    }
    public function vipform()
    {
        $user = Auth::user();
        if ($user->isVIP) {
            return redirect(route('home'));
        }
        if ($user->isVIP) {
            return redirect(route('home'));
        }
        return view("vipform", ['user' => $user]);
    }
    public function chefform()
    {
        $user = Auth::user();
        if ($user->isChef) {
            return redirect(route('home'));
        }
        $count = DB::table('chef_profiles')->where('user_id', '=', $user->id)->count();
        if ($count > 0) {
            dd("wait for your application to be approved");
        }
        return view("chefform", ['user' => $user]);
    }
}
