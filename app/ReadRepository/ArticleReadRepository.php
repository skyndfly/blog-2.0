<?php

namespace App\ReadRepository;

use App\Models\Article;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class ArticleReadRepository
{
    public function getPublishedAllPaginate(): LengthAwarePaginator
    {
      return  Article::query()
            ->where('status', Article::STATUS_PUBLISHED)
            ->with('category.parentCategory')
            ->orderByRaw('created_at DESC')
            ->paginate(Article::POST_TO_SHOW);
    }
    public function getPublishedAllLimit():Collection
    {
       return Article::query()
            ->where('status', Article::STATUS_PUBLISHED)
            ->with('category.parentCategory')
            ->orderByRaw('created_at DESC')
            ->take(Article::POST_TO_SHOW)
            ->get();
    }

    public function getPublishedById(int $id): Model|null
    {
       return Article::query()
            ->where('status', Article::STATUS_PUBLISHED)
            ->where('id', $id)
            ->with('category')
            ->first();
    }
}
