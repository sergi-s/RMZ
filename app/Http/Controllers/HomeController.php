<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ChefProfile;
use App\Models\User;
use App\Models\Meal;
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
        return view('home', ['meals' => Meal::all()]);
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
