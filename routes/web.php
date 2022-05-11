<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\CrewsController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
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

// Auth::routes();

Route::group(['prefix' => 'crewumntv'], function(){
    Route::get('/login-crew', [LoginController::class, 'showLoginForm']);
    Route::post('/login',[LoginController::class, 'login'])->name('login');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::group(['prefix' => 'cumanorangkerenyangbisaakses'],function(){
    Route::get('/register', [RegisterController::class, 'showRegistrationForm']);
    Route::post('/register', [RegisterController::class, 'register'])->name('register');
});

Route::group(['middleware' => 'auth'],function(){
    Route::group(['prefix' => 'admin'], function(){
        Route::get('/', [AdminController::class, 'index']);
        Route::get('addprogram',[AdminController::class,'addProgram']);
        Route::get('addarticle',[ArticleController::class,'addArticle']);
        Route::get('addcrews',[CrewsController::class,'addCrews']);
        Route::group(['prefix' => 'program'], function(){
            Route::get('/', [AdminController::class, 'showProgram']);
            Route::get('{idProgram}',[AdminController::class,'editProgram']);
            Route::post('add',[AdminController::class,'createProgram']);
            Route::post('update',[AdminController::class,'updateProgram']);
            Route::get('delete/{idProgram}',[AdminController::class,'deleteProgram']);
            Route::group(['prefix' => 'episode'], function(){
                Route::get('{idProgram}',[EpisodeController::class,'index']);
                Route::get('{idProgram}/addepisode',[EpisodeController::class,'addEpisode']);
                Route::get('{idProgram}/edit/{idepisode}',[EpisodeController::class,'editEpisode']);
                Route::post('add',[EpisodeController::class,'createEpisode']);
                Route::post('update',[EpisodeController::class,'updateEpisode']);
                Route::get('{idProgram}/delete/{idepisode}',[EpisodeController::class,'deleteEpisode']);
            });
        });
        Route::group(['prefix' => 'article'], function(){
            Route::get('/', [ArticleController::class, 'showArticle']);
            Route::get('{idArticle}',[ArticleController::class,'editArticle']);
            Route::post('add',[ArticleController::class,'createArticle']);
            Route::post('update',[ArticleController::class,'updateArticle']);
            Route::get('delete/{idArticle}',[ArticleController::class,'deleteArticle']);
        });
        Route::group(['prefix' => 'crews'], function(){
            Route::get('/', [CrewsController::class, 'showCrews']);
            Route::get('{idCrews}',[CrewsController::class,'editCrews']);
            Route::post('add',[CrewsController::class,'createCrews']);
            Route::post('update',[CrewsController::class,'updateCrews']);
            Route::get('delete/{idCrews}',[CrewsController::class,'deleteCrews']);
        });
    });
});

// Guest can access
Route::get('/article', [ArticleController::class,  'index']);
Route::get('/article/detail/{article:slug}', [ArticleController::class,  'detail']);
Route::get('/',[ProgramController::class, 'index'])->name('home');
Route::get('/program/{slug}', [ProgramController::class, 'detail']);
Route::get('/program/video/{slug}/{embed}', [ProgramController::class, 'playvideo']);

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
