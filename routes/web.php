<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AdminController;
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

// Route::get('/program', function () {
//     return view('page.program');
// });

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/admin/addprogram', function () {
    return view('admin.addprogram');
});

Route::get('/admin/article', function () {
    return view('admin.article');
});

Route::get('/admin/program', [AdminController::class, 'showProgram']);

Route::get('/article', [ArticleController::class,  'index']);


Route::get('/',[ProgramController::class, 'index']);
Route::get('/program/{nama}', [ProgramController::class, 'detail']);
Route::get('/program/video/{nama}/{embed}', [ProgramController::class, 'playvideo']);

Route::get('/article/detail/{article:slug}', [ArticleController::class,  'detail']);

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
