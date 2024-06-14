<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


//get the main page
Route::get('/', [OrderController::class,'index'])->name('index');
// Route::get('/', function(){return view('restaurants');});

//get details for a popular dish 
Route::get('/orders/dish/{food}',[OrderController::class,'popularDish']);

//get the restaurant detail 
Route::get('/orders/rest/{rest}',[OrderController::class,'exploreRestaurant']);

//render checkout page
Route::get('/orders/checkout',[OrderController::class,'checkout'])->name('checkout')->middleware('auth');
//get all orders
Route::get('/orders',[OrderController::class,'orders'])->middleware('auth')->name('orders');
//cancelling an order
Route::get('/orders/cancel/{order}',[OrderController::class,'cancel']);
//render add order page
Route::get('/orders/add',[OrderController::class,'add'])->name('addOrder');

//add item to the cart
Route::post('/cart/add',[CartController::class,'add'])->middleware('auth');
//delete item from the cart
Route::get('/cart/delete/{food}',[CartController::class,'remove'])->middleware('auth');

//render register user page
Route::get('/user/register',[UserController::class,'register']);
//save user 
Route::post('/user/register',[UserController::class,'store']);

//save user by admin
Route::post('/user/adminregister',[UserController::class,'adminStore']);

//render login page 
Route::get('/user/signIn',[UserController::class,'sign'])->name('login');
//authenticate user
Route::post('/user/signIn',[UserController::class,'authenticate']);
//log a user out
Route::get('/user/logout',[UserController::class,'logout'])->middleware('auth');

//get all users
Route::get('/users',[UserController::class,'allUsers'])->name('users');

//remove user
Route::get('/users/remove/{user}',[UserController::class,'remove']);

//get update user page
Route::get('/users/update/{user}',[UserController::class,'edit']);

//update a user
Route::post('/users/update/{user}',[UserController::class,'update']);

//render add user page
Route::get('/users/add',[UserController::class,'add']);





//get all restaurants
Route::get('/restaurants',[RestaurantController::class,'restaurants']);
//get all restaurants for admin
Route::get('/restaurants/all',[RestaurantController::class,'all'])->name('restaurants');

//remove user
Route::get('/restaurants/remove/{rest}',[RestaurantController::class,'remove']);

//render update restaurant page
Route::get('/restaurants/update/{rest}',[RestaurantController::class,'edit']);

//update restaurant functionality
Route::post('/restaurants/update/{rest}',[RestaurantController::class,'update']);

// Route::get('/checkout', [StripeController::class,'checkout'])->name('checkout');
//making paymement
Route::post('/session', [StripeController::class,'session'])->name('session')->middleware('auth');
//render checkout page 
Route::get('/success', [StripeController::class,'success'])->name('success')->middleware('auth');

//Admin Related routes

//admin dashboard
Route::get('/adminstrator',[AdminController::class,'dashboard']);


//get the admin login page
Route::get('/adminstrator/login',[AdminController::class,'index']);
//register admin
Route::post('adminstrator/register',[AdminController::class,'store']);

//authenticate admin
Route::post('/adminstrator/authenticate',[AdminController::class,'authenticate']);

//get add category page 
Route::get('/categories/add',[CategoryController::class,'index'])->name('categories');

//add category
Route::post('/categories/add',[CategoryController::class,'add']);

//update category
Route::post('/categories/update/{cat}',[CategoryController::class,'update']);

//remove a category
Route::get('/categories/remove/{cat}',[CategoryController::class,'remove']);


