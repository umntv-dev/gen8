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
                        Tirza RephaelicaFina Valentina<br>
                        William Louwi<br>
                        Aurelia<br>
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{ asset('images/crews/Vanessa.png') }}">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row">
                    <h1 class="title-crew mb-4">Marketing</h1>
                    <div class="col-lg-5">
                        <p class="nama-crew mt-4">
                        Sheren Gho<br>
                        Patrick<br>
                        Dyna Muliana Tjahyadi<br>
                        Clara Amelia<br>
                        Alma Maulidiana<br>
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{ asset('images/crews/Aliza.png') }}">
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
                        <img src="{{ asset('images/crews/Nehamia.png') }}">
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
                        <img src="{{ asset('images/crews/Jason.png') }}">
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
                        <img src="{{ asset('images/crews/Joanne.png') }}">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row">
                        <h1 class="title-crew mb-4">Redaction</h1>
                        <div class="col-lg-5">
                            <img src="{{ asset('images/crews/Adeline.png') }}">
                        </div>
                        <div class="col-lg-5">
                            <img src="{{ asset('images/crews/Ferdinand.png') }}">
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
            var divisi = ['Publication', 'Marketing', 'HRD', 'Technical', 'IT&Web', 'Redaction'];
            return '<div class="pagination"><p class="text-end text-white">' + divisi[index] + '</p><span class="' + className + '"></span></div>';
        }
    }
});
</script>
@endsection
