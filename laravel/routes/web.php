<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::get('product/{id}', [\App\Http\Controllers\ProductController::class, 'index'])->name('product.details');
    Route::get('/catalog', [App\Http\Controllers\CatalogController::class, 'index'])->name('catalog');
    Route::get('/settings', [App\Http\Controllers\SettingController::class, 'index'])->name('settings');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/', [GuestController::class, 'index'])->name('guest.index');
});
