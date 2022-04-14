@extends('template.app')
@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/page/crews.css') }}">
@endsection

@section('content')
<div class="sec1">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 img-crew">
                <img src="{{ asset('images/crews/crews1.png') }}" alt="">
            </div>
            <div class="col-lg-6 img-crew">
                <img src="{{ asset('images/crews/crews1.png') }}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 img-crew">
                <img src="{{ asset('images/crews/crews1.png') }}" alt="">
            </div>
            <div class="col-lg-3 img-crew">
                <img src="{{ asset('images/crews/crews1.png') }}" alt="">
            </div>
            <div class="col-lg-3 img-crew">
                <img src="{{ asset('images/crews/crews1.png') }}" alt="">
            </div>
            <div class="col-lg-3 img-crew">
                <img src="{{ asset('images/crews/crews1.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="sec2">
    <div class="container">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="nama-crew">
                            Feliciano <br>
                            Raph <br>
                            Dea <br>
                            Ito <br>
                            Joen
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('images/crews/crews1.png') }}">
                    </div>
                </div>

            </div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div>
            </div>
            <div class="swiper-pagination"></div>
        </div>  
    </div>
</div>
@endsection

@section('custom-js')
<script>
    var swiper = new Swiper(".mySwiper", {
        direction: 'vertical',
    slidesPerView: 1,
    mousewheel: true,
     pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
    });
  </script>
@endsection
