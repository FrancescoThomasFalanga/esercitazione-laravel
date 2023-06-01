<?php

use App\Http\Controllers\Api\VineyardController;
use App\Http\Controllers\Api\WineController;
use App\Http\Controllers\Api\WineryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Wines
Route::get('wines', [WineController::class, 'index']);
Route::get('wines/{id}', [WineController::class, 'show']);

// Wineries
Route::get('wineries', [WineryController::class, 'index']);
Route::get('wineries/{id}', [WineryController::class, 'show']);

// Vineyards
Route::get('vineyards', [VineyardController::class, 'index']);
Route::get('vineyards/{id}', [VineyardController::class, 'show']);