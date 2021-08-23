<?php

namespace App\Http\Controllers;

use App\Models\ChefProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function applyForChef(Request $request)
    {
        $request->validate([
            'license' => 'required|mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf|max:2048'
        ]);

        $user  = User::find(Auth::user()->id);
        $chef = new ChefProfile;

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
