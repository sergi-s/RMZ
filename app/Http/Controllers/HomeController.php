<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
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
        return view("vipform", ['user' => Auth::user()]);
    }
    public function chefform()
    {
        return view("chefform", ['user' => Auth::user()]);
    }
}
