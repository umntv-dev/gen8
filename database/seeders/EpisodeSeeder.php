<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Episode;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $episode = [
            [
                'id_program' => 1,
                'episode' => 1,
                'judul' => 'Indahnya Dunia Indonesia',
                'id_season' => '1',
                'sipnosis' => 'Indahnya Dunia Indonesia merupakan sesuatu yang sangat indah dan anugerah',
                'image' => 'foto.png',
                'link' => 'link foto'
            ],
            [
                'id_program' => 2,
                'episode' => 1,
                'judul' => 'Yang muda yang berbudaya',
                'id_season' => '1',
                'sipnosis' => 'Indahnya Dunia Indonesia merupakan sesuatu yang sangat indah dan anugerah',
                'image' => 'foto.png',
                'link' => 'link foto'
            ],
            [
                'id_program' => 2,
                'episode' => 2,
                'judul' => 'Kerenna anak muda zaman sekarang',
                'id_season' => '1',
                'sipnosis' => 'Indahnya Dunia Indonesia merupakan sesuatu yang sangat indah dan anugerah',
                'image' => 'foto.png',
                'link' => 'link foto'
            ],
            [
                'id_program' => 2,
                'episode' => 3,
                'judul' => 'Mantap juga muda sekali',
                'id_season' => '1',
                'sipnosis' => 'Indahnya Dunia Indonesia merupakan sesuatu yang sangat indah dan anugerah',
                'image' => 'foto.png',
                'link' => 'link foto'
            ],
        ];
        foreach($episode as $data => $value){
            Episode::create($value);
        }
    }
}
