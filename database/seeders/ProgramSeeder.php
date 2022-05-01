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
                'description' => 'Ultimates bingung mau cari berita yang aktual, faktual, dan ter-update, tapi yang dikemas secara santai? Jangan khawatir karena Meja Redaksi akan memberikan berbagai informasi dari dalam negeri, luar negeri, dan lingkungan kampus yang akan dibawakan oleh News Anchor terpercaya dan profesional. Sherlina, Fakhira, Gabriela, dan Afik Walid akan mengupas tuntas berita setiap hari Senin pukul 19.00 WIB hanya di kanal Youtube UMNTV.', 
                'day' => 'Monday',
                'time' => '19:00:00',
                'image' => 'mejaRedaksi.png',    
            ],
            [
                'nama' => 'PEPOX',
                'id_divisi' => 6,
                'desc_highlight' => 'Wadah kalian berdiskusi tentang apa pun. Kami mengundang banyak orang dari berbagai latar belakang untuk berpendapat tentang opini yang kalian punya tentang berbagai topik. Jadi, mari berdiskusi!',
                'description' => 'Halo Ultimates! PEPOX menghadirkan tayangan yang tentunya akan membuat pikiran kalian lebih terbuka lagi, serta mengetahui gimana sih sudut pandang dari orang lain? Banyak banget hal/topik yang akan kita bahas nanti nya seperti, Kamu tim bubur diaduk atau tidak diaduk? First date lebih baik dijemput atau tidak dijemput? Dan masih banyak lagi topik menarik lainnya. Jadi Ultimates, tungguin yaa PEPOX setiap selasa pukul 19.00 WIB hanya di kanal Youtube UMNTV.', 
                'day' => 'Tuesday',
                'time' => '19:00:00',
                'image' => 'pepox.png',    
            ],
            [
                'nama' => 'NO CAP',
                'id_divisi' => 6,
                'desc_highlight' => 'Program yang mengangkat topik mengenai problematika generasi Z. Dikemas dengan lebih ringan dan santai.',
                'description' => 'Hai Bestie! No Cap hadir dengan menayangkan tontonan yang membahas seputar percintaan, karir, mental health, dan masih banyak lagi yang pasti nya cocok banget di tonton untuk kalian para Gen-Z. Bersama Fio dan Amel, dijamin kalian akan terhibur dan  juga mendapatkan insight baru disini. Kita tunggu ya di Youtube UMNTV setiap hari Rabu Pukul 19.00 WIB \n NO CAP? THROW THE NONSENSE~', 
                'day' => 'Wednesday',
                'time' => '19:00:00',
                'image' => 'noCap.png',    
            ],
            [
                'nama' => 'Act For Impact',
                'id_divisi' => 5,
                'desc_highlight' => 'Program dari Creative Content Production yang menghadirkan pengetahuan, inspirasi serta motivasi dari narasumber kompeten yang inspiratif dengan dikemas secara ringan.',
                'description' => 'Hai Ultimates! Act for Impact menghadirkan inspirasi hidup yang menarik dan tentunya berbobot dengan narasumber inspiratif yang kredibel dan insightful.
                Tunggu apalagi? Let’s Act and Make An Impact! bersama Fio dan Kelvin, setiap Rabu pukul 19.00 WIB hanya di Instagram UMN TV.', 
                'day' => 'Wednesday',
                'time' => '19:00:00',
                'image' => 'act.png',    
            ],
            [
                'nama' => 'GOST',
                'id_divisi' => 6,
                'desc_highlight' => 'Program yang mengangkat hal-hal seram dari dalam dan luar negeri yang dikemas dalam bentuk talkshow.',
                'description' => 'Hai Gostiemates! This is GOST, Gosipan Seram Terkini. GOST siap menemani malam kalian dengan pembahasan seram dari dalam maupun luar negeri, karena Gostiemates sejatinya kalian akan lebih hidup jika merasa lebih dekat dengan kisah para arwah.  Bersama Fadly dan Clara menjelajahi hal-hal seram', 
                'day' => 'Thursday',
                'time' => '19:00:00',
                'image' => 'gost.png',    
            ],
            [
                'nama' => 'Kulik-Kulik',
                'id_divisi' => 3,
                'desc_highlight' => 'Program yang mengulas berbagai topik tentang dunia perkuliahan dan dikemas dalam bentuk soft news.',
                'description' => 'Dunia perkuliahan terkadang membingungkan dan sulit, belum lagi berbagai masalah psikologi yang harus dihadapi. Kulikers ngerasa struggle sama kuliah? Atau bingung gimana cara survive di perkuliahan? Tenang aja Whitney Karnisa akan mengajak kalian untuk membahas informasi mengenai perkuliahan, jadi kalian tidak struggling lagi! Jangan lupa saksikan Kulik-Kulik.', 
                'day' => 'Friday',
                'time' => '19:00:00',
                'image' => 'kulikKulik.png',    
            ],
            [
                'nama' => 'Lo Tau Ga?',
                'id_divisi' => 5,
                'desc_highlight' => 'Program dari Creative Content Production yang membahas topik-topik menarik serta hal-hal unik yang dikemas dalam skit yang ringan dan menghibur.',
                'description' => 'Ultimates tau gak, kenapa baju cowok kancingnya di sebelah kanan sedangkan baju cewek kancingnya di sebelah kiri? Atau kenapa tahun 1900 bukan tahun kabisat padahal bisa dibagi 4?
                Topik-topik menarik dan hal-hal unik akan dibahas dengan skit yang ringan dan menghibur hanya di Lo Tau Gak? bersama Dilah dan Fathi, setiap Jumat pukul 19.00 WIB hanya di Instagram UMN TV.', 
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
