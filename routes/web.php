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

Route::get('/',  function () {
    return view('welcome');
});

Route::get('/home',  function () {
    return view('welcome');
});

// Route::get('/list/{id}', [GameController::class,'testOneGame']);
Route::view('gamelisting','gameListing');
// Route::view('app','app');

Route::get('/userProfile', [UserController::class,'userProfile']);

Auth::routes();

//crate Games blade
Route::get('/createGames', function () {
    return view('createGames');
});
Route::post('createGames', [GameController::class,'create']);



// // Route::get('gameDetails', [GameController::class,'list']);
Route::get('/gameDetails', function () {
    return view('gameDetails');
});

Route::get('/gameDetails/index', [GameController::class, 'index']);
// Route::get('/gameDetails/{id}', [GameController::class, 'show']);
Route::post('/gameDetails/store', [GameController::class, 'store']);
// Route::put('/edit/{id}', [GameController::class, 'update']);
Route::delete('/gameDetail/{id}', [GameController::class, 'destroy']);

// Route::prefix('image')->group(function () {
//     Route::get('game/{filename}','ImageController@showGameImage')
//     ->name('gameImage');
//  });

//************     Koo Xin Tong   ***********************
Route::get('/register/admin', [RegisterController::class,'showAdminRegisterForm']);
Route::post('/register/admin', [RegisterController::class, 'createAdmin']);
Route::get('logout', [LoginController::class,'logout']);
//Route::get('datatest', [LoginController::class,'test']);

Route::group(['middleware'=> ['protectedPage']], function()
{
    Route::get('adminGame', [AdminController::class,'gameDetails']);
});

//order
Route::get('/order/index', [OrderController::class, 'index']);
// Route::get('/gameDetails/{id}', [OrderController::class, 'show']);
Route::post('/order/store', [OrderController::class, 'store']);
// Route::put('/edit/{id}', [OrderController::class, 'update']);
Route::delete('/order/{id}', [OrderController::class, 'destroy']);

//checkout
Route::get('/Checkout', function () {
    return view('checkout');
});

Route::post('Checkout/createOrder', [OrderController::class,'createOrder']);

Route::get('/admin', function () {
    return view('admin', [UserController::class,'userinner']);
});

//
Route::get('deleteGame/{id}', [AdminController::class,'deleteGame']);

Route::get('updateGame/{id}', [AdminController::class,'showUpdate']);
Route::post('updateGame/{id}', [AdminController::class,'updateGame']);
