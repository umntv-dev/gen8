<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Season;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seasons = [
            [
                'nama' => 'Season 1'
            ],
        ];
        foreach($seasons as $season => $value){
            Season::create($value);
        }
    }
}
