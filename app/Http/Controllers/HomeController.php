<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ChefProfile;
use App\Models\User;
use App\Models\Meal;
use Illuminate\Http\Request;
use \Pusher\Pusher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function authenticate(Request $request)
    {
        $socketId = $request->socket_id;
        $channelName = $request->channel_name;

        $pusher = new Pusher('83c9614fa128f8d6027a', '21cc55200cb583256bf2', '497574', [
            'cluster' => 'ap2',
            'encrypted' => true
        ]);

        $presence_data = ['name' => Auth::user()->name];
        $key = $pusher->presenceAuth($channelName, $socketId, Auth::user()->id, $presence_data);

        return response($key);
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function sub_chefs()
    {
        $retArr = [];
        $subs =  Auth::user()->subscription;
        foreach ($subs as $value) {
            array_push($retArr, User::find($value->chef_id));
        }
        return view("Allchefs", ["Title" => "Subscriptions", "chefs" => $retArr]);
    }

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
