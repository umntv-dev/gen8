@extends('template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/page/program.css') }}">
@endsection

@section('content')
<div class="sec1">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6 kotak-img">
              <img src="{{ asset('images/program/program1.png') }}" class="img-program">
            </div>
            <div class="col-lg-6">
              <h1 class="title-program">Sanantara</h1>
              <p class="detail-program">News</p>
                <p class="detail-program">
                  Seberapa tau nih Ultimates tentang budaya Indonesia? 
                  Jangan khawatir, Chelsea akan nemenin kalian di Sanantara dengan berbagai 
                  informasi dan fakta menarik seputar budaya Indonesia lho, tentunya dengan sajian yang menarik dan inovatif.
                <br><br>
                Yukk! Kulik hal-hal baru bersama Sanantara, hanya di UMN TV setiap Selasa pukul 19:00 WIB Hanya di Kanal Youtube UMN TV.
                <br> <br>
                Sanantara, Yang Muda Yang Berbudaya!
                </p>
            <div class="jadwal">
                <p class="detail-program"><i class="fa-regular fa-clock"></i> Setiap Selasa pukul 19:00 WIB </p>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="sec2">
    <div class="container">
        <div class="title">
            <h1>Season 1</h1>
        </div><hr>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="/playvideo">
                      <img src="{{ asset('images/program/video1.png') }}" alt="">
                      <h2 class="detail-program text-center">Episode 1</h2>
                   </a>
                </div>
                <div class="swiper-slide">
                    <a href="/playvideo">
                      <img src="{{ asset('images/program/video1.png') }}" alt="">
                      <h2 class="detail-program text-center">Episode 1</h2>
                   </a>
                </div>
                <div class="swiper-slide">
                    <a href="/playvideo">
                      <img src="{{ asset('images/program/video1.png') }}" alt="">
                      <h2 class="detail-program text-center">Episode 1</h2>
                   </a>
                </div>
                <div class="swiper-slide">
                    <a href="/playvideo">
                      <img src="{{ asset('images/program/video1.png') }}" alt="">
                      <h2 class="detail-program text-center">Episode 1</h2>
                   </a>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>


          <div class="title">
            <h1>Season 2</h1>
        </div><hr>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="/playvideo">
                      <img src="{{ asset('images/program/video1.png') }}" alt="">
                      <h2 class="detail-program text-center">Episode 1</h2>
                   </a>
                </div>
                <div class="swiper-slide">
                    <a href="/playvideo">
                      <img src="{{ asset('images/program/video1.png') }}" alt="">
                      <h2 class="detail-program text-center">Episode 1</h2>
                   </a>
                </div>
                <div class="swiper-slide">
                    <a href="/playvideo">
                      <img src="{{ asset('images/program/video1.png') }}" alt="">
                      <h2 class="detail-program text-center">Episode 1</h2>
                   </a>
                </div>
                <div class="swiper-slide">
                    <a href="/playvideo">
                      <img src="{{ asset('images/program/video1.png') }}" alt="">
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
      slidesPerView: 2,
      spaceBetween: 5,
      slidesPerGroup: 2,
      loop: true,
      mousewheel: true,
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
    });
  </script>
@endsection