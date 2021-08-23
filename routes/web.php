<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect("/home");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//? All Routes for admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', function () {
        dd("you are an admins");
    });
});

//? All Routes for chef
Route::middleware(['auth', 'chef'])->group(function () {
    Route::get('/chef', function () {
        dd("you are an chef");
    });
});

//? All Routes for VIP
Route::middleware(['auth', 'VIP'])->group(function () {
    Route::get('/vip', function () {
        dd("you are a VIP member");
    });
});

//? All Routes for Normal authenticated users
Route::middleware(['auth'])->group(function () {
    Route::get('/user', function () {
        dd("you are an user");
    });

    Route::get('/vipmember', [App\Http\Controllers\UserController::class, 'vipmember'])->name('vipmember');
    Route::get('/vipform', [App\Http\Controllers\HomeController::class, 'vipform'])->name('vipform');
    Route::get('/chefform', [App\Http\Controllers\HomeController::class, 'chefform'])->name('chefform');
    Route::post('/chefform', [App\Http\Controllers\UserController::class, 'applyForChef'])->name('applyForChef');
});


//DONE: 1- create user controller and move all functionalities there
//DONE: 2- create a middler ware for diffrent type of users (chef, admin, normal, VIP)
//TODO: 5- create om el Database with it's relations 
//TODO: 5.1-    chef profile
//TODO: 5.2-    items 
//TODO: 5.3-    subscribtions
//TODO: 5.4-    orders
//TODO: 5.5-    categories
//TODO: 3- make a user VIP form -> payment method is fictional 
//TODO: 4- make a user chef form  -> form that takes pdf, name, years of expirence  