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

Route::get("/meals", [App\Http\Controllers\MealsController::class, 'getAllmeals']);
Route::get("/meal/{id}", [App\Http\Controllers\MealsController::class, 'getmeal']);
Route::get('/chefs', [App\Http\Controllers\GuestController::class, 'chefs'])->name('chefs');
Route::get('/chef/{id}', [App\Http\Controllers\GuestController::class, 'chef'])->name('chef');
Route::get('/home', [App\Http\Controllers\GuestController::class, 'index'])->name('home');
Auth::routes();

//? All Routes for admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', function () {
        dd("you are an admins");
    });
    // approveChef
    Route::get('approveChef/{id}', [App\Http\Controllers\UserController::class, 'approveChef']);
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

    Route::get('/subscriptions', [App\Http\Controllers\HomeController::class, 'sub_chefs'])->name('sub_chefs');
    Route::get('/vipmember', [App\Http\Controllers\UserController::class, 'vipmember'])->name('vipmember');
    Route::get('/vipform', [App\Http\Controllers\HomeController::class, 'vipform'])->name('vipform');
    Route::get('/chefform', [App\Http\Controllers\HomeController::class, 'chefform'])->name('chefform');
    Route::post('/chefform', [App\Http\Controllers\UserController::class, 'applyForChef'])->name('applyForChef');
    Route::get("/subscribe/{id}", [App\Http\Controllers\UserController::class, 'subscribe']);
});


//DONE: 1- create user controller and move all functionalities there
//DONE: 2- create a middler ware for diffrent type of users (chef, admin, normal, VIP)
//TODO: 5- create om el Database with it's relations 
//DONE: 5.1-    chef profile
//DONE: 5.2-    meals
//DONE: 5.3-    subscribtions
//TODO: 5.4-    orders
//DONE: 5.5-    categories
//TODO: 5.6-    comments
//DONE: 3- make a user VIP form -> payment method is fictional 
//DONE: 4- make a user chef form  -> form that takes pdf, name, years of expirence  
//TODO: 4.1-     make an admin can approve or dine application  
//TODO: 6- make an admin control panel  
//TODO: 6.1      create a resource route for admin to curd the categories