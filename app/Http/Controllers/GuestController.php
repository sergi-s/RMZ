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
     * @return View
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
        $date = Carbon::now()->subDays(1);
        $lastDay = Meal::where('created_at', '>=', $date)->get();

        return view('home', [
            'meals' => $retarr2,
            "chefs" => User::has('chef')->where("isChef", "=", True)->get(),
            "lastDay" => $lastDay,
        ]);
    }

    /**
     * All Chefs 
     * Send Title to reuse the Allchefs View
     * 
     * @return View
     */
    public function chefs()
    {
        return view("Allchefs", ["Title" => "All Chefs", "chefs" => User::has('chef')->where("isChef", "=", True)->get()]);
    }
    /**
     * Display chef's profile, his meals and if user is subscribed or not
     * 
     * @return View
     */
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
    /**
     * About Us Page 
     * 
     * @return View
     */
    public function aboutus()
    {
        return view("aboutus");
    }
}
