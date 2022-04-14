<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

Auth::routes();

// Show home
Route::get('/',  function () {
    return view('welcome');
});
Route::get('/home',  function () {
    return view('welcome');
});

// Show user profile
Route::get('/userProfile', [UserController::class,'userProfile']);

// Show user bought game
Route::get('/userGameList/{id}', [UserController::class,'user_order_relation']);

// Registration
Route::get('/register/admin', [RegisterController::class,'showAdminRegisterForm']);
Route::post('/register/admin', [RegisterController::class, 'createAdmin']);
Route::get('logout', [LoginController::class,'logout']);
Route::group(['middleware'=> ['protectedPage']], function() {
    Route::get('adminGame', [AdminController::class,'gameDetails']);
});

// CRUD orders
Route::get('/order/index', [OrderController::class, 'index']);
Route::post('/order/store', [OrderController::class, 'store']);
Route::delete('/order/{id}', [OrderController::class, 'destroy']);

// Checkout
Route::get('/Checkout', function () {
    return view('checkout');
});
Route::post('Checkout/createOrder', [OrderController::class,'createOrder']);

// CRUD games
Route::get('deleteGame/{id}', [AdminController::class,'deleteGame']);
Route::get('updateGame/{id}', [AdminController::class,'showUpdate']);
Route::post('updateGame/{id}', [AdminController::class,'updateGame']);
Route::get('/createGames', function () {
    return view('createGames');
});
Route::post('createGames', [GameController::class,'create']);

// Show game details
Route::get('/gameDetails', function () {
    return view('gameDetails');
});
Route::get('/gameDetails/index', [GameController::class, 'index']);
Route::post('/gameDetails/store', [GameController::class, 'store']);
Route::delete('/gameDetail/{id}', [GameController::class, 'destroy']);