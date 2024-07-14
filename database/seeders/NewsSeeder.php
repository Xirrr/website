<?php

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run()
    {
        News::create([
            'title' => 'Berita Pertama',
            'content' => 'Ini adalah isi dari berita pertama.',
        ]);
        News::create([
            'title' => 'Berita Kedua',
            'content' => 'Ini adalah isi dari berita kedua.',
        ]);
    }
}
