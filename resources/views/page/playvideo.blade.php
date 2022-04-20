@extends('template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/page/playvideo.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="videowrapper">
        <iframe src="https://www.youtube.com/embed/{{ $episode->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="videoplayer" allowfullscreen></iframe>
    </div>
    <div class="details">
        <div class="title">
          @if($episode->episode == 1)
            <h3>Pilot Episode</h3>
          @else
            <h3>Episode {{ $episode->episode -1 }}</h3>
          @endif
            <h1>{{ $episode->judul }}</h1>
            <p>{{ $episode->sinopsis }}</p>
        </div>
    </div>
</div>

<div class="sec2 mb-5">
    <div class="container">
      @foreach($season as $data)
        <div class="season">
            <h1>{{ $data->nama }}</h1>
        </div><hr>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              @php
              $i = 0;
              @endphp
                @foreach($program->episode as $episode)
                @if($data->id == $episode->id_season)
                <div class="swiper-slide p-5">
                <a href="/program/video/{{$episode->link}}">
                      <img src="{{ asset('images/Thumbnail/' . $episode->image) }}" width="500" alt="">
                      <h5 class="detail-program text-center mt-3">{{ $episode->judul }}</h5>
                   </a>
                </div>
                @endif
                @php $i++ @endphp
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
          @endforeach
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
