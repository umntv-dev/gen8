<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EpisodeController;
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

Auth::routes(['verify' => true]);

Route::get('/home',function(){
    return view('home');
});

Route::get('/admin', function () {
    return view('admin.admin');
})->middleware('auth');

Route::get('/admin/article', function () {
    return view('admin.article');
});

Route::get('/admin/program', [AdminController::class, 'showProgram']);
Route::get('/admin/addprogram',[AdminController::class,'addProgram']);
Route::get('admin/program/{idProgram}',[AdminController::class,'editProgram']);
Route::post('admin/program/add',[AdminController::class,'createProgram']);
Route::post('admin/program/update',[AdminController::class,'updateProgram']);
Route::get('admin/program/delete/{idProgram}',[AdminController::class,'deleteProgram']);

Route::get('admin/program/episode/{idProgram}',[EpisodeController::class,'index']);
Route::get('admin/program/episode/{idProgram}/addepisode',[EpisodeController::class,'addEpisode']);
Route::get('admin/program/episode/{idProgram}/edit/{idepisode}',[EpisodeController::class,'editEpisode']);
Route::post('admin/program/episode/add',[EpisodeController::class,'createEpisode']);
Route::post('admin/program/episode/update',[EpisodeController::class,'updateEpisode']);
Route::get('admin/program/episode/{idProgram}/delete/{idepisode}',[EpisodeController::class,'deleteEpisode']);

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
