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
                'id_divisi' => 3,
                'desc_highlight' => 'Program berita dengan beragam informasi aktual, faktual, dan ter-update yang dikemas secara menarik dan santai. Meja redaksi kembali hadir dengan beragam informasi untuk Anda.',
                'description' => 'Meja Redaksi adalah program berita dengan beragam informasi aktual, faktual, dan ter-update yang dikemas secara menarik dan santai. Meja Redaksi kembali hadir dengan beragam informasi untuk Anda!', 
                'day' => 'Monday',
                'time' => '19:00:00',
                'image' => 'mejaRedaksi.png',    
            ],
            [
                'nama' => 'PEPOX',
                'id_divisi' => 6,
                'desc_highlight' => 'Wadah kalian berdiskusi tentang apa pun. Apakah timun adalah buah atau sayur? Apakah kamu tim bubur diaduk? Kalau iya kenapa? Kami mengundang banyak orang dari berbagai latar belakang untuk berpendapat tentang opini yang kalian punya tentang berbagai topik. Jadi, mari berdiskusi!',
                'description' => 'Chelsea akan menemani kalian di Sanantara dengan memberikan informasi dan fakta menarik seputar budaya Indonesia, tentunya dengan sajian yang menarik dan inovatif, lho! Sanantara, Pahami Nusantara!', 
                'day' => 'Tuesday',
                'time' => '19:00:00',
                'image' => 'pepox.png',    
            ],
            [
                'nama' => 'NO CAP',
                'id_divisi' => 6,
                'desc_highlight' => 'Program yang mengangkat topik mengenai problematika generasi Z. Dikemas dengan lebih ringan dan santai.',
                'description' => 'Halo, mari berdiskusi. Apakah timun adalah buah atau sayur? Mungkinkah bumi benar-benar bulat? Apakah kamu tim bubur diaduk? Kalau iya kenapa?
                Pepox menjadi wadah untuk kalian berdiskusi tentang apa pun. Kami mengundang banyak orang dari berbagai latar belakang untuk berpendapat tentang opini yang kalian punya tentang berbagai topik. Jadi, mari berdiskusi!', 
                'day' => 'Wednesday',
                'time' => '19:00:00',
                'image' => 'noCap.png',    
            ],
            [
                'nama' => 'Act For Impact',
                'id_divisi' => 5,
                'desc_highlight' => 'Program dari Creative Content Production yang menghadirkan pengetahuan, inspirasi serta motivasi dari narasumber kompeten yang inspiratif dengan dikemas secara ringan.',
                'description' => 'Halo, Kulikers! Kali ini, Kulik-Kulik kembali hadir untuk menyajikan konten inspiratif dan juga mengedukasi tentang literasi sosial. Ditemani Ratujesya Akira, Kulik-Kulik akan membuat Jumat malam kalian penuh makna, lho!', 
                'day' => 'Wednesday',
                'time' => '19:00:00',
                'image' => 'act.png',    
            ],
            [
                'nama' => 'GOST',
                'id_divisi' => 6,
                'desc_highlight' => 'Program yang mengangkat hal-hal seram dari dalam dan luar negeri yang dikemas dalam bentuk talkshow.',
                'description' => 'Halo, Kulikers! Kali ini, Kulik-Kulik kembali hadir untuk menyajikan konten inspiratif dan juga mengedukasi tentang literasi sosial. Ditemani Ratujesya Akira, Kulik-Kulik akan membuat Jumat malam kalian penuh makna, lho!', 
                'day' => 'Thursday',
                'time' => '19:00:00',
                'image' => 'gost.png',    
            ],
            [
                'nama' => 'Kulik-Kulik',
                'id_divisi' => 3,
                'desc_highlight' => 'Program yang mengulas berbagai topik tentang dunia perkuliahan dan dikemas dalam bentuk soft news.',
                'description' => 'Halo, Kulikers! Kali ini, Kulik-Kulik kembali hadir untuk menyajikan konten inspiratif dan juga mengedukasi tentang literasi sosial. Ditemani Ratujesya Akira, Kulik-Kulik akan membuat Jumat malam kalian penuh makna, lho!', 
                'day' => 'Friday',
                'time' => '19:00:00',
                'image' => 'kulikKulik.png',    
            ],
            [
                'nama' => 'Lo Tau Ga?',
                'id_divisi' => 5,
                'desc_highlight' => 'Program dari Creative Content Production yang membahas topik-topik menarik serta hal-hal unik yang dikemas dalam skit yang ringan dan menghibur.',
                'description' => 'Halo, Kulikers! Kali ini, Kulik-Kulik kembali hadir untuk menyajikan konten inspiratif dan juga mengedukasi tentang literasi sosial. Ditemani Ratujesya Akira, Kulik-Kulik akan membuat Jumat malam kalian penuh makna, lho!', 
                'day' => 'Friday',
                'time' => '19:00:00',
                'image' => 'lotauga.png',    
            ],
        ];  
        foreach($programs as $program => $value){
            Program::create($value);
        }
    }
}
