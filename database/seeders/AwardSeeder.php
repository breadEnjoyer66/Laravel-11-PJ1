<?php

namespace Database\Seeders;

use App\Models\Award;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Award::create([
            'alt' => 'asus 2023 apac',
            'file_name' => 'asus-2023-apac.jpg',
        ]);
        Award::create([
            'alt' => 'apc best reseller 2024',
            'file_name' => 'apc-best-reseller-2024.jpg',
        ]);
        Award::create([
            'alt' => 'vst ecs champion',
            'file_name' => 'vst-ecs-champion.jpg',
        ]);
        Award::create([
            'alt' => 'AMD Brand',
            'file_name' => 'les-award.jpg',
        ]);
        Award::create([
            'alt' => 'asus golden partner',
            'file_name' => 'asus-golden-partner.jpg',
        ]);
        Award::create([
            'alt' => 'asus business partner gold',
            'file_name' => 'asus-business-partner-gold.jpg',
        ]);
        Award::create([
            'alt' => 'adakom 2025',
            'file_name' => 'adakom-2025.jpg',
        ]);
        Award::create([
            'alt' => 'value added solution hikvision',
            'file_name' => 'value-added-solution-hikvision.jpg',
        ]);
        Award::create([
            'alt' => 'best solution product synex',
            'file_name' => 'best-solution-product-synex.jpg',
        ]);
        Award::create([
            'alt' => 'asus golden partner 2024',
            'file_name' => 'asus-golden-partner-2024.jpg',
        ]);
        Award::create([
            'alt' => 'asus golden partner (2)',
            'file_name' => 'asus-golden-partner-(2).jpg',
        ]);
        Award::create([
            'alt' => 'best partner 2023',
            'file_name' => 'best-partner-2023.jpg',
        ]);
        Award::create([
            'alt' => 'asus partner',
            'file_name' => 'asus-partner.jpg',
        ]);
    }
}
