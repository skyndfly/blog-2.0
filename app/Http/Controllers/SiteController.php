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
        Cache::forget('article');// TODO удалить
        $articles = Cache::rememberForever('article', function () {
            return Article::query()
                ->where('status', Article::STATUS_PUBLISHED)
                ->with('category.parentCategory')
                ->orderByRaw('created_at DESC')
                ->take(6)
                ->get();
        });


        return view('index', ['articles' => $articles]);
    }



}
