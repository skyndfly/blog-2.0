<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;
use App\ReadRepository\ArticleReadRepository;

class ArticleController extends Controller
{
    /**
     * @var ArticleReadRepository
     */
    protected ArticleReadRepository $repository;

    public function __construct(ArticleReadRepository $repository)
    {
        $this->repository = $repository;
    }

    public function show_all_limit():View
    {
        Cache::forget('articles');// TODO удалить
        $articles = Cache::rememberForever('articles', function () {
            return $this->repository->getPublishedAllPaginate();
        });


        return view('article.articles', ['articles' => $articles]);
    }

    public function show(int $id): View
    {
        $model = $this->repository->getPublishedById($id);

        return view('article.show', ['model' => $model]);
    }
}
