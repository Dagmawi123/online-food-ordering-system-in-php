<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function (){
    Route::group(['controller'=>OrderController::class,'prefix'=>'/orders'],function (){
//render checkout page 
Route::get('/checkout','checkout')->name('checkout');

//get all specific user orders
Route::get('','orders')->name('orders');

//cancelling an order
Route::get('/cancel/{order}','cancel');

//render add order page
Route::get('/add','add')->name('addOrder');
    });

//log a user out
Route::get('/user/logout',[UserController::class,'logout']);
// Route::get('/checkout', [StripeController::class,'checkout'])->name('checkout');

Route::group(['controller'=>StripeController::class],function (){

//making payment
Route::post('/session', 'session')->name('session');

//render checkout page 
Route::get('/success', 'success')->name('success');
});

});

/*
return all orders
Route::get('/orders',')
*/



Route::middleware('admin')->group(function (){
    Route::group(['controller'=>UserController::class],function(){

//save user by admin
Route::post('/user/adminregister','adminStore');

//get all users
Route::get('/users','allUsers')->name('users');

//remove user
Route::get('/users/remove/{user}','remove');

//get update user page
Route::get('/users/update/{user}','edit');

//update a user
Route::put('/users/update/{user}','update');

//render add user page
Route::get('/users/add','add');

});

Route::group(['controller'=>RestaurantController::class,'prefix'=>'/restaurants'],function(){

//get all restaurants for admin
Route::get('/all','all')->name('restaurants');

//remove user
Route::get('/remove/{rest}','remove');

//render update restaurant page
Route::get('/update/{rest}','edit');

//update restaurant functionality
Route::put('/update/{rest}','update');


//render add restaurant page
Route::get('/add','add');

// add restaurant 
Route::post('/add','store');

});

Route::group(['controller'=>AdminController::class,'prefix'=>'/adminstrator'],function(){

//admin dashboard
Route::get('/','dashboard');

//logout an admin
Route::get('/logout','logout');    
});


Route::group(['controller'=>CategoryController::class,'prefix'=>'/categories'],function(){

    //get add category page 
Route::get('/add','index')->name('categories');


//add category
Route::post('/add','add');

//get update category page
Route::get('/update/{cat}','edit');

//update category
Route::put('/update/{cat}','update');

//remove a category
Route::get('/remove/{cat}','remove');
});

Route::group(['controller'=>FoodController::class,'prefix'=>'/foods'],function(){

    //render all foods page
Route::get('/','index')->name('foods');


    //get update food page
Route::get('/update/{food}','edit');

    // update food 
Route::put('/update/{food}','update');


//delete a food
Route::get('/remove/{food}','remove');

//render add food page
Route::get('/add','add');
// add food 
Route::post('/add','store');

});
Route::group(['controller'=>OrderController::class,'prefix'=>'/orders'],function(){
//get all orders page
Route::get('/all','all')->name('allOrders');   
//remove an order
Route::get('/remove/{order}','remove');

//view an order
Route::get('/{order}','view');

//dispatch an order
Route::get('/dispatch/{order}','dispatch');
});


});





//Common Routes accessible by both guest and authenticated user

//get the main page
Route::get('/', [OrderController::class,'index'])->name('index');

Route::group(['controller'=>OrderController::class,'prefix'=>'/orders'],function (){

    //get details for a popular dish 
Route::get('/dish/{food}','popularDish');

//get the restaurant detail 
Route::get('/rest/{rest}','exploreRestaurant');
});

//get all restaurants
Route::get('/restaurants',[RestaurantController::class,'restaurants']);


Route::group(['controller'=>CartController::class,'prefix'=>'/cart'],function (){
    //add item to the cart
    Route::post('/add','add');
   
    //delete item from the cart
    Route::get('/delete/{food}','remove');
        });




//The  following routes don't need any form of authentication / u need to be a guest
Route::middleware(['guest','checkAdmin'])->group(function(){
Route::group(['controller'=>UserController::class,'prefix'=>'/user'],function(){

//render register user page
Route::get('/register','register');

//save user 
Route::post('/register','store');

//render login page 
Route::get('/signIn','sign')->name('login');

//authenticate user
Route::post('/signIn','authenticate');

});
Route::group(['controller'=>AdminController::class,'prefix'=>'/adminstrator'],function (){

    //get the admin login page
    Route::get('/login','index')->name('adminlogin');

    //register admin
    Route::post('/register','store');
    
    //authenticate admin
    Route::post('/authenticate','authenticate');    
    });
});  


    

