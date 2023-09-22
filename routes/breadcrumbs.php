<?php // routes/breadcrumbs.php


use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use App\Models\Article;


Breadcrumbs::for('post', function (BreadcrumbTrail $trail, Article $article) {
    $trail->parent('articles');
    $trail->push($article->title, route('post', $article));
});

// Home
Breadcrumbs::for('index', function (BreadcrumbTrail $trail) {
    $trail->push('Главная', route('index'));
});

// Home > Blog
Breadcrumbs::for('articles', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push('Статьи', route('index'));
});

// Home > Blog > [Category]
Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category));
});
