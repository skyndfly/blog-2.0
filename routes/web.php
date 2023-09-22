<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', SiteController::class)->name('index');
Route::get('/articles', [ArticleController::class, 'show_all'])->name('articles.index');
