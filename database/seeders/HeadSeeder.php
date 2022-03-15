<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Heads;

class HeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $heads = [
            [
                'nama' => 'Devin',
                'id_divisi' => 2,
                'image' => 'halo.png'
            ],
            [
                'nama' => 'Kevin',
                'id_divisi' => 3,
                'image' => 'halo.png'
            ],
            [
                'nama' => 'Daniel',
                'id_divisi' => 4,
                'image' => 'halo.png'
            ],
            [
                'nama' => 'Vanessa',
                'id_divisi' => 5,
                'image' => 'halo.png'
            ],
            [
                'nama' => 'Nehamia',
                'id_divisi' => 6,
                'image' => 'halo.png'
            ],
            [
                'nama' => 'Joanne',
                'id_divisi' => 13,
                'image' => 'halo.png'
            ],
        ];
        
        foreach($heads as $head => $value){
            Heads::create($value);
        }
    }
}
