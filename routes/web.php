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

//? All Guest Routes  
Route::get('/', function () {
    return redirect("/home");
});

Route::get("/meals", [App\Http\Controllers\MealsController::class, 'index']);
Route::get("/meal/{id}", [App\Http\Controllers\MealsController::class, 'show'])->where('id', '[0-9]+');
Route::get('/chefs', [App\Http\Controllers\GuestController::class, 'chefs'])->name('chefs');
Route::get('/chef/{id}', [App\Http\Controllers\GuestController::class, 'chef'])->name('chef')->where('id', '[0-9]+');
Route::get('/home', [App\Http\Controllers\GuestController::class, 'index'])->name('home');
Route::get('/aboutus', [App\Http\Controllers\GuestController::class, 'aboutus'])->name('aboutus');
Auth::routes();

//? All Routes for admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\UserController::class, 'adminDashboard'])->name("admin");

    Route::get('approveChef/{id}', [App\Http\Controllers\UserController::class, 'approveChef'])->where('id', '[0-9]+');
    Route::get('unapproveChef/{id}', [App\Http\Controllers\UserController::class, 'denyChef'])->where('id', '[0-9]+');

    Route::post('/category', [App\Http\Controllers\MealsController::class, 'store2'])->name('category.store');
    Route::delete('/category/{id}', [App\Http\Controllers\MealsController::class, 'delete2'])->name('category.delete')->where('id', '[0-9]+');
});

//? All Routes for chef
Route::middleware(['auth', 'chef'])->group(function () {

    Route::get('/chef', [App\Http\Controllers\MealsController::class, 'create'])->name('chefDashboard');
    Route::post('/post', [App\Http\Controllers\MealsController::class, 'store'])->name('post.store');
    Route::delete('/post/{id}', [App\Http\Controllers\MealsController::class, 'delete'])->name('post.delete')->where('id', '[0-9]+');
});

//? All Routes for VIP
Route::middleware(['auth', 'VIP'])->group(function () {
    Route::get('/vip', function () {
        dd("VIP profile");
    })->name("vip");
});

//? All Routes for Normal authenticated users
Route::middleware(['auth'])->group(function () {

    Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('profile');

    Route::get('/cart', [App\Http\Controllers\MealsController::class, 'cart'])->name('cart');
    Route::get('/checkout', [App\Http\Controllers\MealsController::class, 'checkout'])->name('checkout');
    Route::get('/add-to-cart/{id}', [App\Http\Controllers\MealsController::class, 'addToCart'])->name('add.to.cart');
    Route::patch('/update-cart', [App\Http\Controllers\MealsController::class, 'update'])->name('update.cart');
    Route::get('/remove-from-cart/{id}', [App\Http\Controllers\MealsController::class, 'remove'])->where('id', '[0-9]+');

    Route::get('/subscriptions', [App\Http\Controllers\HomeController::class, 'sub_chefs'])->name('sub_chefs');
    Route::get('/vipmember', [App\Http\Controllers\UserController::class, 'vipmember'])->name('vipmember');
    Route::get('/vipform', [App\Http\Controllers\HomeController::class, 'vipform'])->name('vipform');
    Route::get('/chefform', [App\Http\Controllers\HomeController::class, 'chefform'])->name('chefform');
    Route::post('/chefform', [App\Http\Controllers\UserController::class, 'applyForChef'])->name('applyForChef');
    Route::get("/subscribe/{id}", [App\Http\Controllers\UserController::class, 'subscribe'])->name("subscribe")->where('id', '[0-9]+');


    Route::post('/comment/store', [App\Http\Controllers\CommentController::class, 'store'])->name('comment.add');
    Route::post('/reply/store', [App\Http\Controllers\CommentController::class, 'replyStore'])->name('reply.add');



    Route::post('/pusher/auth', [App\Http\Controllers\HomeController::class, "authenticate"]);
    Route::get("/testRTC", function () {
        return view("homew");
    });
});


//DONE: 1- create user controller and move all functionalities there
//DONE: 2- create a middler ware for diffrent type of users (chef, admin, normal, VIP)
//DONE: 3- make a user VIP form -> payment method is fictional 
//DONE: 4- make a user chef form  -> form that takes pdf, name, years of expirence  
//DONE: 4.1-     make an admin can approve or dine application  
//DONE: 5- create om el Database with it's relations 
//DONE: 5.1-    chef profile
//DONE: 5.2-    meals
//DONE: 5.3-    subscribtions
//DONE: 5.4-    orders
//DONE: 5.5-    categories
//DONE: 5.6-    comments
//DONE: 6- make an admin control panel  
//DONE: 6.1-      create a resource route for admin to curd the categories
//DONE: 7- create a resource route for chef to crd (without update) the meals
//DONE: 8- differentiate between chefs and vip chefs  
//DONE: 9- Add image attribute for meals and chefs, meals
//TODO: 10 update readme.md (add info about build in users)
//DONE: 11- Add video attribute for meals and chefs