<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programs = [
            [
                'nama' => 'Meja Redaksi',
                'id_divisi' => 2,
                'desc_highlight' => 'meja redaksi adalah lalalala',
                'description' => 'Meja Redaksi adalah program berita dengan beragam informasi aktual, faktual, dan ter-update yang dikemas secara menarik dan santai. Meja Redaksi kembali hadir dengan beragam informasi untuk Anda!', 
                'day' => 'Senin',
                'time' => '17:00:00',
                'image' => 'halo.png',    
            ],
            [
                'nama' => 'Sanantara',
                'id_divisi' => 2,
                'desc_highlight' => 'Sanantara adalah lalalala',
                'description' => 'Chelsea akan menemani kalian di Sanantara dengan memberikan informasi dan fakta menarik seputar budaya Indonesia, tentunya dengan sajian yang menarik dan inovatif, lho! Sanantara, Pahami Nusantara!', 
                'day' => 'Rabi',
                'time' => '17:00:00',
                'image' => 'halo.png',    
            ],
            [
                'nama' => 'PEPOX',
                'id_divisi' => 2,
                'desc_highlight' => 'PEPOX adalah lalalala',
                'description' => 'Halo, mari berdiskusi. Apakah timun adalah buah atau sayur? Mungkinkah bumi benar-benar bulat? Apakah kamu tim bubur diaduk? Kalau iya kenapa?
                Pepox menjadi wadah untuk kalian berdiskusi tentang apa pun. Kami mengundang banyak orang dari berbagai latar belakang untuk berpendapat tentang opini yang kalian punya tentang berbagai topik. Jadi, mari berdiskusi!', 
                'day' => 'Rabu',
                'time' => '19:00:00',
                'image' => 'halo.png',    
            ],
            [
                'nama' => 'Kulik Kulik',
                'id_divisi' => 2,
                'desc_highlight' => 'Kulik kulik adalah lalalala',
                'description' => 'Halo, Kulikers! Kali ini, Kulik-Kulik kembali hadir untuk menyajikan konten inspiratif dan juga mengedukasi tentang literasi sosial. Ditemani Ratujesya Akira, Kulik-Kulik akan membuat Jumat malam kalian penuh makna, lho!', 
                'day' => 'Jumat',
                'time' => '19:00:00',
                'image' => 'halo.png',    
            ],
        ];  
        foreach($programs as $program => $value){
            Program::create($value);
        }
    }
}
