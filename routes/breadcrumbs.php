<?php
// routes/breadcrumbs.php


use App\Models\Category;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use App\Models\Article;


// Index
Breadcrumbs::for('index', function (BreadcrumbTrail $trail) {
    $trail->push('Главная', route('index'));
});

// Index > Articles
Breadcrumbs::for('articles', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push('Статьи', route('articles.index'));
});

// Home > Category > Article
Breadcrumbs::for('articles.show', function (BreadcrumbTrail $trail, Category $category, Article $article) {
    $trail->push('Главная', route('index'));
    $trail->push($category->name, route('articles.index'));
    $trail->push($article->title, route('articles.show', $article));
});

// Home > Login
Breadcrumbs::for('login', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push('Авторизация', route('login'));
});

// Home > Forgot
Breadcrumbs::for('password.request', function (BreadcrumbTrail $trail) {
    $trail->parent('login');
    $trail->push('Восстановить пароль', route('password.request'));
});

// Home > Reset
Breadcrumbs::for('password.reset', function (BreadcrumbTrail $trail) {
    $trail->parent('login');
    $trail->push('Сбросить пароль', route('password.reset'));
});

// Home > Register
Breadcrumbs::for('register', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push('Создать аккаунт', route('register'));
});
