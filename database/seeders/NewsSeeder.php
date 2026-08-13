<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::create([
            'date' => '2025-03-08',
            'title' => 'Archon Gives Back to Mother Nature',
            'image_url' => 'news1.png',
        ]);

        News::create([
            'date' => '2025-03-08',
            'title' => 'Archon, Sinotruk Strengthen Partnership',
            'image_url' => 'news2.png',
        ]);

        News::create([
            'date' => '2025-03-08',
            'title' => 'Philcon Event 2025',
            'image_url' => 'news3.png',
        ]);
    }
}
