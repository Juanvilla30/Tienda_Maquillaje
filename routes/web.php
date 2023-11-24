<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [HomeController::class, 'index'] )->name('about');
Route::get('/welcome', [HomeController::class, 'home'])->name('home');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/store', [HomeController::class, 'store'])->name('store');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

