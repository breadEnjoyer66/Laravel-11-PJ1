<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Brand;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\Award;
use App\Models\Category;
use App\Models\Member;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $this->call([
            CategorySeeder::class,
            UserSeeder::class,
            BrandSeeder::class,
            AwardSeeder::class,
            MemberSeeder::class,
        ]);
        // Article::factory(50)->recycle([
        //     Category::all(),
        //     User::all(),
        //     Brand::all(),
        //     Award::all(),
        //     Member::all(),
        // ])->create();
    }
}
