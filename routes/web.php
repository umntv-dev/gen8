<?php

use App\Http\Controllers\ArticleController;
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

Route::get('/', function () {
    return view('page.home');
});

Route::get('/playvideo', function () {
    return view('page.playvideo');
});

Route::get('/article', [ArticleController::class,  'index']);


Route::get('/article/detail/{article:judul}', [ArticleController::class,  'detail']);

Route::get('/crews', function () {
    return view('page.crews');
});

Route::get('/about', function () {
    return view('page.about');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
