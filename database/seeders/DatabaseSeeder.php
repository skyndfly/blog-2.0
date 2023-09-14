<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\User::factory(5)->create();
//         \App\Models\Article::factory(10)->create();
//
//         \App\Models\User::factory()->create([
//             'name' => 'root',
//             'email' => 'root@root.com',
//             'password' => Hash::make(123456)
//         ]);
        Category::factory(3)->create();
    }
}
