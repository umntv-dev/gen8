<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DivisiSeeder::class);
        $this->call(CrewSeeder::class);
        $this->call(HeadSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(ProgramSeeder::class);
        $this->call(SeasonSeeder::class);
        $this->call(EpisodeSeeder::class);
    }
}
