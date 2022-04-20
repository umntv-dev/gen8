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
                'judul' => 'MEJA REDAKSI (EPISODE PILOT) - Penarikan Kinder Joy karena Diduga Mengandung Bakteri Salmonella',
                'id_season' => '1',
                'sinopsis' => '[Meja Redaksi: Penarikan Kinder Joy karena Diduga Mengandung Bakteri Salmonella| EPISODE PILOT]
                  \n\n  
                Badan Pengawas Obat dan Makanan (BPOM) Indonesia menarik peredaran produk snack
                cokelat yang bermerek Kinder Joy karena diduga mengandung bakteri Salmonella.
                \n\n
                Kinder Joy yang terkontaminasi bakteri Salmonella dapat menyebabkan diare, demam, dan
                sakit perut bila dikonsumsi. BPOM Indonesia melakukan pengecekan dan penelitian ulang
                terhadap produk Kinder Joy.',
                'image' => 'MejaRedaksi/thumbnail_pilot_episode.png',
                'link' => 'wSVTC0g6ztM'
            ],
            [
                'id_program' => 2,
                'episode' => 1,
                'judul' => 'PEPOX (EPISODE PILOT) - Keluh Kesah Fans, Kita Ga Aneh Kok!',
                'id_season' => '1',
                'sinopsis' => 'Wibu … Kpopers … hmm pasti di antara sobat POXIE ada kan yang seorang wibu atau kpopers atau malah kalian bukan keduanya nih? 
                \n\n
                Ngefans sama K-Pop dibilang fanatik, suka sama anime dibilang halu….
                Jadi serba salah, padahal kedua hal tersebut bisa menjadi sumber kebahagiaan dari seseorang loh!
                Banyak juga orang-orang yang bukan bagian dari mereka kadang memandang negatif tanpa mengetahui atau mencoba mengenal lebih dalam tentang hal-hal yang mereka sukai. Padahal mereka hanyalah para penggemar pada umumnya yang ingin mengekspresikan rasa suka mereka. Maka dari itu PEPOX mengundang kalian untuk melihat perspektif dari seorang wibu, kpopers, dan juga pihak netral untuk mengetahui pandangan mereka tentang satu sama lain. 
                \n\n
                so , what about you guys? Kita juga mau nih denger sudut pandang kalian.',
                'image' => 'pepox/thumbnail_pilot_episode.png',
                'link' => 'rLN2BYc0AXU'
            ],
            [
                'id_program' => 3,
                'episode' => 1,
                'judul' => 'NO CAP (EPISODE PILOT) - GET TO KNOW YOUR ZODIAC: SUN, MOON, RISING',
                'id_season' => '1',
                'sinopsis' => 'Hi, Bestie! Selamat datang di No Cap! Throw the Nonsense. Menjadi episode pembuka di season
                ini, Get to Know Your Zodiac: Sun, Moon, Rising ingin mengajak kalian, para bestie untuk
                mengenal lebih dalam lagi mengenai BIG 3 zodiak yang ada di dalam diri kalian. Tak hanya itu,
                No Cap juga mengundang salah satu tiktoker yang terkenal karena konten-konten zodiak ini,
                Bestie. Penasaran siapa? Tonton sampai habis ya episode kali ini! See you, Bestie~~
                ',
                'image' => 'noCap/thumbnail_pilot_episode.png',
                'link' => 'wJvtL10j_Wc'
            ],
        ];
        foreach($episode as $data => $value){
            Episode::create($value);
        }
    }
}
