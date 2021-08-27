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
        return view("AllMeals", ['meals' => Meal::all()]);
    }
    public function getmeal($id)
    {
        return view("Meal", ['meal' => Meal::find($id)]);
    }
}
