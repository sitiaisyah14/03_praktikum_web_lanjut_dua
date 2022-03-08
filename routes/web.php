<?php

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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodayController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FoodMenuController;
use App\Http\Controllers\ContactController;

// Route Home
Route::get('/', [HomeController::class, 'index'])->name('home');


// Route Prefix
Route::get('todayspecial', [TodayController::class, 'today'])->name('todayspecial');

// Route Biasa
Route::get('menu', [MenuController::class, 'menu'])->name('menu');

Route::get('foodmenu', [FoodMenuController::class, 'foodmenu'])->name('foodmenu');

// Route Resource
Route::resource('contact', ContactController::class);

