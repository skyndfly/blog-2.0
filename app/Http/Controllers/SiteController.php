<?php

namespace App\Http\Controllers;


use App\ReadRepository\ArticleReadRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    /**
     * @var ArticleReadRepository
     */
    protected ArticleReadRepository $repository;

    public function __construct(ArticleReadRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(): View
    {
        $left_article = 1;//в какой позиции выводить новость с левой катигорией
        $right_article = 3;//в какой позиции выводить новость с правой катигорией
        Cache::forget('article');// TODO удалить
        $articles = Cache::rememberForever('article', function () {
            return $this->repository->getPublishedAllLimit();
        });


        return view('index', [
            'articles' => $articles,
            'left_article' => $left_article,
            'right_article' => $right_article
        ]);
    }


}
