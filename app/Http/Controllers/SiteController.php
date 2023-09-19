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
        $articles = Cache::rememberForever('articles', function () {
            return Article::query()
                ->where('status', Article::STATUS_PUBLISHED)
                ->with('category.parentCategory')
                ->orderByRaw('created_at DESC')
                ->get();
        });

        return view('index', ['articles' => $articles]);
    }

    private function checkForNewArticles(): bool
    {
        $latestId = Article::max('id');
        $cacheKey = 'articles_latest_id';
        $cachedLatestId = Cache::get($cacheKey);

        if ($cachedLatestId && $latestId <= $cachedLatestId) {
            // Нет новых записей
            return false;
        }

        Cache::put($cacheKey, $latestId);
        // Есть новые записи
        return true;
    }

}
