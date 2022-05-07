@extends('template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/page/home.css') }}">
@endsection

@section('content')
<div class="sec1">
      <div class="container">
        @if($count == 0)
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            @foreach($all as $highlight)
              <div class="swiper-slide s1">
                <div class="row">
                  <div class="col-lg-6">
                    <img src="{{ asset('storage/Images/Program/' . $highlight->image) }}" class="img-program">
                  </div>
                  <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 class="title-program">{{ $highlight->nama }}</h1>
                    <p class="detail-program">{{ $highlight->desc_highlight }}</p>
                    <div class="btn-program d-flex flex-column align-items-lg-start">
                      <p class="detail-program"><i class="fa-regular fa-clock"></i> Hari
                        @if($highlight->day == 'Monday') Senin
                          @elseif($highlight->day == 'Tuesday') Selasa
                          @elseif($highlight->day == 'Wednesday') Rabu
                          @elseif($highlight->day == 'Thursday') Kamis
                          @elseif($highlight->day == 'Friday') Jumat
                        @endif
                        pukul 19:00 WIB </p>
                      <button class="btn">
                        <a href="/program/{{ $highlight->slug }}">
                          <p>Selengkapnya</p>
                        </a>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
      </div>
        @else
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              @foreach($highlights as $highlight)
                <div class="swiper-slide s1">
                  <div class="row">
                    <div class="col-lg-6">
                      <img src="{{ asset('storage/Images/Program/' . $highlight->image) }}" class="img-program">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                      <h1 class="title-program">{{ $highlight->nama }}</h1>
                      <p class="detail-program">{{ $highlight->desc_highlight }}</p>
                      <div class="btn-program d-flex flex-column align-items-lg-start">
                        <p class="detail-program"><i class="fa-regular fa-clock"></i> Hari ini pukul 19:00 WIB </p>
                        <button class="btn">
                          <a href="/program/{{ $highlight->slug }}">
                            <p>Selengkapnya</p>
                          </a>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        @endif
    </div>
</div>

<div class="sec2">
  <div class="container">
    <div class="title">
      <h1>Programs</h1>
    </div><hr>
    <div class="swiper mySwiper2">
      <div class="swiper-wrapper">
        @foreach($programs as $program)
          <div class="swiper-slide s2">
            <figure class="hover-img">
              <img src="{{ asset('storage/Images/Program/' . $program->image) }}" alt="">
              <figcaption onclick="window.location='/program/{{ $program->slug }}'">
                <div><h2>{{ $program->nama }}</h2></div>
                 <div><p>{{ $program->desc_highlight }}</p></div>
                <a href="#"></a>
              </figcaption>			
            </figure>
          </div>
          @endforeach
      </div>
  </div>
  </div>
</div>

@endsection

@section('custom-js')
<script>
    var swiper = new Swiper(".mySwiper", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 2000,
        },
    });
  </script>

<script>
  var swiper = new Swiper(".mySwiper2", {
    mousewheel: true,
    effect: "coverflow",
    loop: true,
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
    },
    autoplay: {
        delay: 2500,
    },
  });
</script>
@endsection