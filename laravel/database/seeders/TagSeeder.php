<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::factory()
            ->count(4)
            ->sequence(
                ['name' => 'PHP'],
                ['name' => 'JavaScript'],
                ['name' => 'Laravel'],
                ['name' => 'Angular'],
            )
            ->create();
    }
}
