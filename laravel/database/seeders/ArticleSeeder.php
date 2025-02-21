<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!Tag::exists()) {
            Tag::factory()->create();
        }

        Article::factory()
            ->hasAttached(Tag::inRandomOrder()->first())
            ->count(5)->create();
    }
}
