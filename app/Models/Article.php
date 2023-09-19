<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;
    const STATUS_PUBLISHED = true;
    const STATUS_NOT_PUBLISHED = false;
    protected $fillable = [
        'title',
        'text',
        'status',
        'user_id',
        'category_id',
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    protected static function boot(): void
    {
        parent::boot();
        static::created(function () {
            Cache::forget('articles'); // Сбросить кэш при создании новой записи
        });

        static::updated(function () {
            Cache::forget('articles'); // Сбросить кэш при обновлении записи

        });
    }
}
