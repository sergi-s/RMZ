<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Meal;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    public function index()
    {
        $retArr = [];
        if (Auth::check()) {

            $subs =  Auth::user()->subscription;
            foreach ($subs as $value) {
                array_push($retArr, User::find($value->chef_id));
            }
        }

        $retarr2 = [];
        foreach (Meal::all() as $value) {
            if ($value->chef->isChef) {
                array_push($retarr2, $value);
            }
        }

        return view('home', [
            'meals' => $retarr2,
            "chefs" => User::has('chef')->where("isChef", "=", True)->get(),
            "sub_chefs" => $retArr
        ]);
    }
    public function chefs()
    {
        return view("Allchefs", ["Title" => "All Chefs", "chefs" => User::has('chef')->where("isChef", "=", True)->get()]);
    }
    public function chef($id)
    {
        $chef = User::find($id);
        if (!$chef->isChef) {
            return $chef->name . " is not a chef";
        }
        $meals = User::find($id)->getMeals;
        $flag = false;
        foreach (Auth::user()->subscription as $key => $value) {
            if ($value->chef_id == $id) {
                $flag = true;
            }
        }
        return view("Chef", ['chef' => User::find($id), "meals" => $meals, "subscribed" => $flag]);
    }
}
