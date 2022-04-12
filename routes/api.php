<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\GameController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('gameDetails', [GameController::class, 'index']);
Route::get('gameDetails/{id}', [GameController::class, 'show']);
Route::post('game', [GameController::class, 'store']);
Route::put('game/{id}', [GameController::class, 'update']);
Route::delete('gameDetail/{id}', [GameController::class, 'destroy']);

//order
Route::get('orders', [OrderController::class, 'index']);
Route::post('createOrder', [OrderController::class,'store']);
Route::get('orders/{id}', [OrderController::class, 'show']);
Route::put('orderUpdate/{id}', [OrderController::class, 'update']);
Route::delete('order/{id}', [OrderController::class, 'destroy']);