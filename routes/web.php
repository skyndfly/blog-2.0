<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PersonalCabinetController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', SiteController::class)->name('index');
Route::get('/articles', [ArticleController::class, 'show_all_limit'])->name('articles.index');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');



//Auth
Route::get('/login', LoginController::class)->name('login');
Route::get('/registration', [RegisterController::class, 'show'])->name('register');
Route::post('/registration', [RegisterController::class, 'store'])->name('register');

//personal cabinet
Route::get('/personal-cabinet/{id}', PersonalCabinetController::class)
    ->name('cabinet')
    ->middleware('auth');
