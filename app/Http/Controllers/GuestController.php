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
        return view('home', [
            'meals' => Meal::all(),
            "chefs" => User::has('chef')->get(),
            "sub_chefs" => $retArr
        ]);
    }
    public function chefs()
    {
        return view("Allchefs", ["Title" => "All Chefs", "chefs" => User::has('chef')->get()]);
    }
    public function chef($id)
    {
        $chef = User::find($id);
        if (!$chef->isChef) {
            return $chef->name . " is not a chef";
        }
        $meals = User::find($id)->getMeals;
        return view("Chef", ['chef' => User::find($id), "meals" => $meals]);
    }
}