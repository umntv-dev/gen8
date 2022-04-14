@extends('template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/page/playvideo.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="videowrapper">
        <iframe src="https://www.youtube.com/embed/Hqq3uLjMOEE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="videoplayer" allowfullscreen></iframe>
    </div>
    <div class="details">
        <div class="title">
            <h3>Episode 1</h3>
            <h1>Jajanan Khas Nusantara yang Bisa Kamu Temui di Pasar!</h1>
            <p>Hallo, Taruna!!

                Pada episode pertama di season 2 ini, Chelsea mengajak Taruna untuk menjelajahi wilayah Nusantara melalui jajanan tradisional yang bisa taruna temukan di pasar. Selain kaya akan rasa, jajanan-jajanan tersebut juga kaya akan sejarah dan cerita yang unik. Yuk, makan bareng Chelsea sambil kita ulik satu-satu cerita unik dibalik setiap jajanan!</p>
        </div>
    </div>
</div>

<div class="sec2 mb-5">
    <div class="container">
        <div class="season">
            <h1>Season 1</h1>
        </div><hr>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="/playvideo">
                      <img src="{{ asset('images/program/video1.png') }}" class="mw-100">
                      <h2 class="detail-program text-center">Episode 1</h2>
                   </a>
                </div>
                <div class="swiper-slide">
                    <a href="/playvideo">
                      <img src="{{ asset('images/program/video1.png') }}" class="mw-100">
                      <h2 class="detail-program text-center">Episode 1</h2>
                   </a>
                </div>
                <div class="swiper-slide">
                    <a href="/playvideo">
                      <img src="{{ asset('images/program/video1.png') }}" class="mw-100">
                      <h2 class="detail-program text-center">Episode 1</h2>
                   </a>
                </div>
                <div class="swiper-slide">
                    <a href="/playvideo">
                      <img src="{{ asset('images/program/video1.png') }}" class="mw-100">
                      <h2 class="detail-program text-center">Episode 1</h2>
                   </a>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>


          <div class="season">
            <h1>Season 2</h1>
        </div><hr>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="/playvideo">
                      <img src="{{ asset('images/program/video1.png') }}" class="mw-100">
                      <h2 class="detail-program text-center">Episode 1</h2>
                   </a>
                </div>
                <div class="swiper-slide">
                    <a href="/playvideo">
                      <img src="{{ asset('images/program/video1.png') }}" class="mw-100">
                      <h2 class="detail-program text-center">Episode 1</h2>
                   </a>
                </div>
                <div class="swiper-slide">
                    <a href="/playvideo">
                      <img src="{{ asset('images/program/video1.png') }}" class="mw-100">
                      <h2 class="detail-program text-center">Episode 1</h2>
                   </a>
                </div>
                <div class="swiper-slide">
                    <a href="/playvideo">
                      <img src="{{ asset('images/program/video1.png') }}" class="mw-100">
                      <h2 class="detail-program text-center">Episode 1</h2>
                   </a>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
    </div>
</div>

@endsection

@section('custom-js')
<script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 5,
      slidesPerGroup: 2,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 2500,
        },

        breakpoints: {
            1200: {
            slidesPerView: 2,
          },
         },
    });
  </script>
@endsection
