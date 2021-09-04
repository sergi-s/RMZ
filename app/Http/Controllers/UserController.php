<?php

namespace App\Http\Controllers;

use App\Models\ChefProfile;
use App\Models\Subscription;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * transfer a user to a chef
     *
     */
    public function index(Request $request)
    {
        //*get subscribed to chefs
        $retArr = [];
        $subs =  Auth::user()->subscription;
        foreach ($subs as $value) {
            array_push($retArr, User::find($value->chef_id));
        }
        //*get ordered items
        $Items =  Auth::user()->ordered_items;

        return view("Profile", ["sub_chefs" => $retArr, "ordered_items" => $Items]);
    }
    public function subscribe($id)
    {
        $user_id = Auth::user()->id;
        if ($id == $user_id) {
            return "cant sub to urself";
        }
        if (!User::findOrFail($id)->chef) {
            return "Internal server error";
        }
        $isApproved = DB::table('chef_profiles')->where("user_id", $id)->value("approved");

        if ($isApproved) {
            $temp = DB::table('subscriptions')->where("chef_id", $id)->where("user_id", $user_id)->value("id");
            if ($temp !== null) {
                return "you are already subscribed";
            }
            $sub = new Subscription(["chef_id" => $id, "user_id" => $user_id]);
            $sub->save();
            // return "you subscribed to" . User::find($id)->name;
            return redirect(route("chef", $id));
        }

        return "Internal server error";
    }
    public function applyForChef(Request $request)
    {
        $request->validate([
            'license' => 'required|mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf|max:2048'
        ]);

        $user  = User::find(Auth::user()->id);
        $chef = new ChefProfile;
        $chef->id = Auth::user()->id;

        $chef->years_of_xp = $request->input('years_of_xp');

        if ($request->file()) {

            $fileName = time() . '.' . $request->license->extension();

            $request->license->move(public_path('uploads/CVs'), $fileName);

            $chef->license = '/uploads/CVs/' . $fileName;
        }
        $user->chef()->save($chef);
        return back()->with('success', 'File has uploaded to the database.')->with('file', $fileName);
    }
    public function adminDashboard()
    {
        $unapproved = ChefProfile::where("approved", 0)->get();
        $cats = Category::all();
        return view("AdminDashboard", ['unapproved_apps' => $unapproved, "cats" => $cats]);
    }
    public function approveChef($id)
    {
        $user  = User::find($id);
        $user->isChef = True;
        $user->save();

        $chef = ChefProfile::find($id);
        $chef->approved = True;
        $chef->save();
        //TODO: push notification to chef
        return redirect(route("admin"));
    }
    public function denyChef($id)
    {
        $user  = User::find($id);
        $user->isChef = False;
        $user->save();
        ChefProfile::find($id)->delete();
        //TODO: push notification to chef
        return redirect(route("admin"));
    }

    public function vipChef($id)
    {
        $chef = ChefProfile::find($id);
        $chef->isVIP = True;
        $chef->save();
    }
    public function vipmember()
    {
        $user  = User::find(Auth::user()->id);
        $user->isVIP = True;
        $user->save();
        return redirect("home");
    }
}
