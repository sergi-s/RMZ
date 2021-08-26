<?php

namespace App\Http\Controllers;

use App\Models\ChefProfile;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\PseudoTypes\True_;

class UserController extends Controller
{
    /**
     * transfer a user to a chef
     *
     */
    public function index(Request $request)
    {
    }
    public function subscribe($id)
    {
        if ($id == Auth::user()->id) {
            return "cant sub to urself";
        }
        if (!User::findOrFail($id)->chef) {
            return "failed";
        }
        $isApproved = DB::table('chef_profiles')->where("user_id", $id)->value("approved");

        if ($isApproved) {
            //TODO fix if subscribed already or not
            // $isrepeated = DB::table('subscriptions')->where("user_id", Auth::user()->id)->where("chef_id", $id)->value('id');
            // dd($isrepeated);
            // // $temp = DB::table('Subscription')->where("user_id", "=", Auth::user()->id)->where("chef_id", "=", $id);
            // $temp = DB::table('Subscription')
            //     ->whereRaw('user_id = ? and chef_id = ?', [Auth::user()->id, $id])
            //     ->get();
            // dd($temp);
            $sub = new Subscription(["chef_id" => $id, "user_id" => Auth::user()->id]);
            $sub->save();
            return "you subscribed to" . User::find($id)->name;
        }

        return "error";
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

            $request->license->move(public_path('uploads'), $fileName);

            $chef->license = '/uploads/' . $fileName;
        }
        $user->chef()->save($chef);
        return back()->with('success', 'File has uploaded to the database.')->with('file', $fileName);
    }
    public function approveChef($id)
    {
        $user  = User::find($id);
        $user->isChef = True;
        $user->save();

        $chef = ChefProfile::find($id);
        $chef->approved = True;
        $chef->save();
        return "User Approved";
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
