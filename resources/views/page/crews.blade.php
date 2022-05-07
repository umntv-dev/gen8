@extends('template.app')
@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/page/crews.css') }}">
@endsection

@section('content')
<div class="sec1">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 img-crew">
                <img src="{{ asset('images/crews/Zahra.png') }}" alt="">
            </div>
            <div class="col-lg-6 img-crew">
                <img src="{{ asset('images/crews/Anastasia.png') }}" alt="">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 img-crew">
                <img src="{{ asset('images/crews/Ariella.png') }}" alt="">
            </div>
            <div class="col-lg-3 img-crew">
                <img src="{{ asset('images/crews/Tannayu.png') }}" alt="">
            </div>
            <div class="col-lg-3 img-crew">
                <img src="{{ asset('images/crews/Deanata.png') }}" alt="">
            </div>
            <div class="col-lg-3 img-crew">
                <img src="{{ asset('images/crews/JessicaGracia.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="sec2">
    <div class="p-2">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="row">
                    <h1 class="title-crew mb-4">Publication</h1>
                    <div class="col-lg-5">
                        <p class="nama-crew mt-4">
                        Cindy<br>
                        Verllencia<br>
                        Kania Ivanka Ardania<br>
                        Tirza Rephaelica<br>
                        Fina Valentina<br>
                        William Louwi<br>
                        Aurelia<br>
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{ asset('images/crews/Vanessa.png') }}" class="gambar-1">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row">
                    <h1 class="title-crew mb-4">Marketing</h1>
                    <div class="col-lg-5">
                        <p class="nama-crew-redaksi mt-4">
                            Sheren Gho <br>
                            Patrick<br>
                            Dyna Muliana Tjahyadi<br>
                            Clara Amelia<br>
                            Alma Maulidiana<br>
                            Marissa Amran<br>
                            Zahra Triandita<br>
                            Rika Oktavia<br>
                            Marco Gunawan<br>
                            Gabriella<br>
                            Christabella Chika Wijaya<br>
                            Elisabeth Dian Kurnia Putri<br>
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{ asset('images/crews/Aliza.png') }}" class="gambar-1">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row">
                    <h1 class="title-crew mb-4">Human Resource Development</h1>
                    <div class="col-lg-5">
                        <p class="nama-crew mt-4">
                        Cayaning Yoska<br>
                        Pricilla Brenda<br> 
                        Galih Aulia Orlanda Aditomo<br>
                        Robbi Agung Surya Nugraha Ronie<br>
                        Angeline Lumbangaol<br>
                        Selma Sekar Seto<br>
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{ asset('images/crews/Nehamia.png') }}" class="gambar-1">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row">
                    <h1 class="title-crew mb-4">Technical</h1>
                    <div class="col-lg-5">
                        <p class="nama-crew mt-5">
                        Tamara Puspita Dewi<br>
                        Nadia Noor Shabrina<br>
                        Muhammad Haekal Atthariq Hossaien<br>
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{ asset('images/crews/Jason.png') }}" class="gambar-1">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row">
                    <h1 class="title-crew mb-4">IT & Web</h1>
                    <div class="col-lg-5">
                        <p class="nama-crew mt-5">
                        Dea Noveriyanti <br>
                        Feliciano Surya Marcello<br>
                        Raphael Gregorius Hakim<br>
                        Christophorus Augusta Wangsa<br>
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{ asset('images/crews/Joanne.png') }}" class="gambar-1">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row">
                    <h1 class="title-crew ">Redaction</h1>
                    <h3 class="text-white mb-4">NEWS</h3>
                    <div class="col-lg-6">
                        <div class="row ms-lg-5">
                            <div class="col-lg-6">
                                <p class="nama-crew-redaksi mt-lg-5 text-center">
                                    Vicky Fiona Susanto <br>
                                    Cantya Kirana Dewi<br>
                                    Vanessa Benedicta<br>
                                    Fiebe Virginia<br>
                                    Angela Wenda Oktavianti<br>
                                    Anindita Purwania Damayanti<br>
                                    Sherlina Purnamasari<br>
                                    Fakhira Nurul Ramadhani<br>
                                    Kelly Stefany<br>
                                </p>  
                            </div>
                            <div class="col-lg-6">
                                <p class="nama-crew-redaksi mt-lg-5 text-center">
                                    Ivana Marshintauli Devi Hutapea<br>
                                    Whitney Karnisa<br>
                                    Fitria Andhika<br>
                                    Gabriela Yessica Hardani<br>
                                    Carla Evania Fernandes <br>
                                    Muhammad Afiq Walid<br>
                                    Salma Permata Dewi<br>
                                    </p>
                            </div>
                            </div>
                        </div>
                    <div class="col-lg-4 text-center">
                        <img src="{{ asset('images/crews/Adeline.png') }} " class="foto-crew">
                        <img src="{{ asset('images/crews/Ferdinand.png') }}"class="foto-crew">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row">
                    <h1 class="title-crew ">Redaction</h1>
                    <h3 class="text-white mb-4">PROGRAM</h3>
                    <div class="col-lg-6">
                        <div class="row ms-lg-5">
                            <div class="col-lg-6">
                                <p class="nama-crew-redaksi mt-lg-5 text-center">
                                    Satrya Bima Pramudatama <br>
                                    Grace Vilia<br>
                                    Rava Shabrina Wiryawan<br>
                                    Ketut Sakti Andika<br>
                                    Naila Medita<br>
                                    Angelica<br>
                                    Felicitas Yudith Donatirsa L  <br>
                                </p>  
                            </div>
                            <div class="col-lg-6">
                                <p class="nama-crew-redaksi mt-lg-5 text-center">
                                    Christina Cindy Saputra<br>
                                    Betari Naratayaka<br>
                                    Sinta Makdalena<br>
                                    Jennifer Abigail<br>
                                    Gabriella Ursula Thendean<br>
                                    Evelyn Ivana Anggi Nabasa<br>
                                    Victoria glory<br>
                                    </p>
                            </div>
                            </div>
                        </div>
                    <div class="col-lg-4 text-center">
                        <img src="{{ asset('images/crews/Adeline.png') }} " class="foto-crew">
                        <img src="{{ asset('images/crews/Ferdinand.png') }}"class="foto-crew">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row">
                    <h1 class="title-crew ">Redaction</h1>
                    <h3 class="text-white mb-4">Creative Content Production</h3>
                    <div class="col-lg-5">
                        <p class="nama-crew mt-lg-5 text-center">
                            Elora Shaloomita Sianto <br>
                            Angelina Priska Alfionita<br>
                            Arista Amelinda<br>
                            Nurul Fadilah<br>
                            Ghina Hanifah<br>
                            Muhammad Fathi Mudzakir<br>
                            kelvin triantovel<br>
                            Jennifer Landau<br>
                            Vanca Angela Silagarki<br>
                        </p>  
                        </div>
                    <div class="col-lg-5 text-center">
                        <img src="{{ asset('images/crews/Adeline.png') }}" class="foto-crew">
                        <img src="{{ asset('images/crews/Ferdinand.png') }}"class="foto-crew">
                    </div>
                </div>
            </div>



            </div>
            <div class="swiper-pagination"></div>
        </div> 
        <div class="swiper-line"></div> 
    </div>
</div>
@endsection

@section('custom-js')
<script>
    var swiper = new Swiper(".mySwiper", {
    direction: 'vertical',
    slidesPerView: 1,
    mousewheel: true,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
            var divisi = ['Publication', 'Marketing', 'HRD', 'Technical', 'IT&Web', 'Redaction' , 'Redaction', 'Redaction'];
            return '<div class="pagination"><p class="text-end text-white">' + divisi[index] + '</p><span class="' + className + '"></span></div>';
        }
    }
});
</script>
@endsection
