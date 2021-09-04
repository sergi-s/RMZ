<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Meal;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    /**
     * Show the application Home page.
     *
     * @return Home page
     */

    public function index()
    {
        //* Get meals for approved chefs of paginated by 6
        $retarr2 = [];
        foreach (Meal::paginate(6) as $value) {
            if ($value->chef->isChef) {
                array_push($retarr2, $value);
            }
        }

        //* Get meals for approved chefs of the last day
        $date = Carbon::now()->subDays(7);
        $lastDay = Meal::where('created_at', '>=', $date)->get();
        
        return view('home', [
            'meals' => $retarr2,
            "chefs" => User::has('chef')->where("isChef", "=", True)->get(),
            "lastDay" => $lastDay,
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
        if (Auth::check()) {
            foreach (Auth::user()->subscription as $key => $value) {
                if ($value->chef_id == $id) {
                    $flag = true;
                }
            }
        }
        return view("Chef", ['chef' => User::find($id), "meals" => $meals, "subscribed" => $flag]);
    }
    public function aboutus()
    {
        return view("aboutus");
    }
}
