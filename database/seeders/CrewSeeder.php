<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Crews;

class CrewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $crews = [
            [
                'nama' => 'Feliciano Surya M',
                'id_divisi' => 13,
                'role' => 'anggota',
            ],
            [
                'nama' => 'Joanne Kessie K',
                'id_divisi' => 13,
                'role' => 'koor',
            ],
            [
                'nama' => 'Raphael Gregorius Hakim',
                'id_divisi' => 13,
                'role' => 'anggota',
            ],
            [
                'nama' => 'Dea Noveriyanti',
                'id_divisi' => 13,
                'role' => 'anggota',
            ],
            [
                'nama' => 'Christopher',
                'id_divisi' => 13,
                'role' => 'anggota',
            ],
            [
                'nama' => 'Anastasia',
                'id_divisi' => 1,
                'role' => 'anggota',
            ],
            [
                'nama' => 'Angie',
                'id_divisi' => 11,
                'role' => 'anggota',
            ],
            [
                'nama' => 'Whitney',
                'id_divisi' => 10,
                'role' => 'anggota',
            ],
            [
                'nama' => 'Dika',
                'id_divisi' => 9,
                'role' => 'anggota',
            ]
        ];

        foreach($crews as $crew => $value){
            Crews::create($value);
        }
    }
}
