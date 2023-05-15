<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VineyardController;
use App\Http\Controllers\WineController;
use App\Http\Controllers\WineryController;
use Illuminate\Support\Facades\Route;

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

Route::get('/vini', [WineController::class, 'index'])->name('vini');

Route::get('/cantine', [WineryController::class, 'index'])->name('cantine');

Route::get('/vitigni', [VineyardController::class, 'index'])->name('vitigni');

Route::get('/', [HomeController::class, 'index'])->name('home');


// EXTRA

Route::get('/viniExtra', [WineController::class, 'extra'])->name('viniExtra');
