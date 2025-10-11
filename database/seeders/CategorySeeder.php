<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();
        Category::create([
            'name' => 'Uncategorized',
            'slug' => 'uncategorized',
            'color' => 'black',
        ]);

        Category::create([
            'name' => 'News',
            'slug' => 'news',
            'color' => 'green',
        ]);

        Category::create([
            'name' => 'Technology',
            'slug' => 'technology',
            'color' => 'blue',
        ]);

        Category::create([
            'name' => 'General',
            'slug' => 'general',
            'color' => 'yellow',
        ]);
    }
}
