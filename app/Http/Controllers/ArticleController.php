<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function show_all():View
    {
        Cache::forget('articles');// TODO удалить
        $articles = Cache::rememberForever('articles', function () {
            return Article::query()
                ->where('status', Article::STATUS_PUBLISHED)
                ->with('category.parentCategory')
                ->orderByRaw('created_at DESC')
                ->paginate(6);
        });


        return view('article.articles', ['articles' => $articles]);
    }
}
