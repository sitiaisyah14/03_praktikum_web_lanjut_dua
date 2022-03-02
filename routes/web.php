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

// Route Home
Route::get('/', function () {
    return view('index');
})->name('home');


// Route Prefix
Route::prefix('product')->group(function () {
    Route::get('today-special', function () {
        return view('today');
    })->name('todayspecial');
});

// Route Biasa
Route::get('menu', function () {
    return view('menu');
})->name('menu');


// Route Resource
use App\Http\Controllers\ContactController;

Route::resource('contact', ContactController::class);

