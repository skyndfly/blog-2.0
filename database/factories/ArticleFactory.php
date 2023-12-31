<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::query()->inRandomOrder()->value('id'),
            'title' => ucfirst(fake()->words(3, true)),
            'text' => ucfirst(fake()->text(5000)),
            'status' => Article::STATUS_PUBLISHED,
            'category_id' => Category::query()->inRandomOrder()->value('id')

        ];
    }
}
