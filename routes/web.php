<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VineyardController;
use App\Http\Controllers\WineController;
use App\Http\Controllers\WineryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminWineryController;
use App\Http\Controllers\Admin\AdminWineController;
use App\Http\Controllers\Admin\AdminVineyardController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('wineries', WineryController::class);
Route::resource('wines', WineController::class);
Route::resource('vineyards', VineyardController::class);

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function() {

    Route::get('dashboard', [DashboardController::class, 'home']);

    Route::resource('wineries', AdminWineryController::class);
    Route::resource('wines', AdminWineController::class);
    Route::resource('vineyards', AdminVineyardController::class);

});




Route::get('/', [HomeController::class, 'index'])->name('home');


// EXTRA

Route::get('/viniExtra', [WineController::class, 'extra'])->name('viniExtra');


require __DIR__.'/auth.php';

