<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function __invoke(): View
    {
        $left_article = 1;//в какой позиции выводить новость с левой катигорией
        $right_article = 3;//в какой позиции выводить новость с правой катигорией
        Cache::forget('article');// TODO удалить
        $articles = Cache::rememberForever('article', function () {
            return Article::query()
                ->where('status', Article::STATUS_PUBLISHED)
                ->with('category.parentCategory')
                ->orderByRaw('created_at DESC')
                ->take(6)
                ->get();
        });


        return view('index', [
            'articles' => $articles,
            'left_article' => $left_article,
            'right_article' => $right_article
        ]);
    }


}
