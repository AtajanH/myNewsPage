<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    public function run()
    {
        // Создаем 12 новостей через фабрику
        News::factory()->count(12)->create();
    }
}
