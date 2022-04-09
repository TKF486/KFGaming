<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\Auth\RegisterController;

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
    return view('welcome');
});

// Route::get('/list/{id}', [GameController::class,'testOneGame']);
// Route::view('gamelisting','gameListing');
// Route::view('app','app');



// Auth::routes();

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
Route::get('/register/admin', [RegisterController::class, 'createAdmin']);


