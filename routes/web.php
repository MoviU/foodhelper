<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PlacesController;
use App\Http\Controllers\Admin\UsersController;

use App\Http\Controllers\Restaurants\HomeController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('restaurants')->group(function () {
    Route::get('/index', [App\Http\Controllers\Restaurants\HomeController::class, 'index'])->name('restaurants');

    Route::resource('place', HomeController::class);
});

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

    Route::resource('category', CategoryController::class);
    Route::resource('places', PlacesController::class);

    Route::middleware(['role:SuperAdmin'])->resource('users', UsersController::class);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('profile','profile')->name('profile');
});
