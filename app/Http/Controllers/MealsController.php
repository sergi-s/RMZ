<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;

class MealsController extends Controller
{
    public function index()
    {
    }
    public function getAllmeals()
    {
        $retarr = [];
        foreach (Meal::all() as $value) {
            if ($value->chef->isChef) {
                array_push($retarr, $value);
            }
        }

        return view("AllMeals", ['meals' => $retarr]);
    }
    public function getmeal($id)
    {
        return view("Meal", ['meal' => Meal::find($id)]);
    }
}
