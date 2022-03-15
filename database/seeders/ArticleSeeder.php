<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [
            [
                'judul' => 'Kemana aja mereka?',
                'id_crews' => 2,
                'id_divisi' => 2,
                'waktu' => '2022-10-20 10:00:00',
                'image' => 'halo.png',
                'description' => 'kemarin hantu datang makan daun cabe merah'
            ],
            [
                'judul' => 'Manfaat Meminum Coklat Panas Untuk Kesehatan Tubuh',
                'id_crews' => 7,
                'id_divisi' => 5,
                'waktu' => '2022-10-18 18:00:00',
                'image' => 'halo.png',
                'description' => 'kemarin hantu datang makan daun cabe merah'
            ],
            [
                'judul' => 'Amerika Sedang Perang Dengan Rusia',
                'id_crews' => 3,
                'id_divisi' => 5,
                'waktu' => '2022-10-29 17:00:00',
                'image' => 'halo.png',
                'description' => 'kemarin hantu datang makan daun cabe merah'
            ],
            [
                'judul' => 'Tidak Pernah Sakit Hati',
                'id_crews' => 5,
                'id_divisi' => 4,
                'waktu' => '2022-10-10 14:00:00',
                'image' => 'halo.png',
                'description' => 'kemarin hantu datang makan daun cabe merah'
            ],
        ];
        
        foreach($articles as $article => $value){
            Article::create($value);
        }
    }
}
