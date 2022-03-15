<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Divisi;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisi = [
            [
                'nama' => 'bph'
            ],
            [
                'nama' => 'Redaksi'
            ],
            [
                'nama' => 'News'
            ],
            [
                'nama' => 'HRD'
            ],
            [
                'nama' => 'CCP'
            ],
            [
                'nama' => 'Program'
            ],
            [
                'nama' => 'Event'
            ],
            [
                'nama' => 'Partnership'
            ],
            [
                'nama' => 'Media Relation'
            ],
            [
                'nama' => 'Marketing Production'
            ],
            [
                'nama' => 'Visual'
            ],
            [
                'nama' => 'Social Media Handler'
            ],
            [
                'nama' => 'IT & WEB'
            ],
            [
                'nama' => 'Teknis'
            ]
        ];

        foreach($divisi as $data => $value){
            Divisi::create($value);
        }
    }
}
