<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\ExitController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PersonalCabinetController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', SiteController::class)->name('index');
Route::get('/articles', [ArticleController::class, 'show_all_limit'])->name('articles.index');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');



//Auth
Route::middleware('guest')->group(function (){
    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login', [LoginController::class, 'auth'])->name('auth');
    Route::get('/registration', [RegisterController::class, 'show'])->name('register');
    Route::post('/registration', [RegisterController::class, 'store'])->name('register');
});

//personal cabinet
Route::middleware('auth')->group(function (){
    Route::get('/personal-cabinet/{id}', PersonalCabinetController::class)
        ->name('cabinet');
    Route::delete('/exit', ExitController::class)->name('exit');

});
