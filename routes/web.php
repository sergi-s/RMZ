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
// Route::post("/vipform", function () {
//     return view("vipform");
// })->name('vipform');


// Route::post("/chefform", function () {
//     return view("chefform");
// })->name('chefform');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/vipform', [App\Http\Controllers\HomeController::class, 'vipform'])->name('vipform');
Route::get('/chefform', [App\Http\Controllers\HomeController::class, 'chefform'])->name('chefform');

//TODO: 1- create user controller and move all functionalities there
//TODO: 2- create a middler ware for diffrent type of users (checf, admin, normal)
//TODO: 3- make a user VIP -> payment method is fictional 
//TODO: 4- make a user chef -> form that takes pdf, name, years of expirence  