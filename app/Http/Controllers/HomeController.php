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
     * ‘User Subscribe to a certain Chef
     *
     * @return View
     */
    public function sub_chefs()
    {
        $retArr = [];
        $subs =  Auth::user()->subscription;
        foreach ($subs as $value) {
            array_push($retArr, User::find($value->chef_id));
        }
        return view("Allchefs", ["Title" => "Subscriptions", "chefs" => $retArr]);
    }

    /**
     * VIP form page
     *
     * @return VIP
     */
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
    
    /**
     * apply for Chef page 
     *
     * @return response()
     */
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
