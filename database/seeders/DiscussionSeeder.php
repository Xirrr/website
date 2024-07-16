<?php

use Illuminate\Database\Seeder;
use App\Models\Discussion;

class DiscussionSeeder extends Seeder
{
    public function run()
    {
        Discussion::create([
            'title' => 'Pertanyaan mengenai pembuatan meja custom',
            'content' => 'Deskripsi diskusi atau pertanyaan pengguna tentang pembuatan meja custom. Silakan berikan pandangan Anda!',
        ]);

        Discussion::create([
            'title' => 'Rekomendasi untuk sofa custom',
            'content' => 'Berbagi pengalaman atau mencari rekomendasi untuk pembuatan sofa custom. Mari kita diskusikan bersama!',
        ]);

        Discussion::create([
            'title' => 'Tips memilih material untuk lemari pakaian custom',
            'content' => 'Bagikan tips atau pertanyaan seputar pemilihan material untuk lemari pakaian custom. Mari kita berdiskusi!',
        ]);

        Discussion::create([
            'title' => 'Desain terbaru untuk kursi makan custom',
            'content' => 'Bagikan ide atau pertanyaan seputar desain terbaru untuk kursi makan custom. Mari kita berkolaborasi!',
        ]);
    }
}
