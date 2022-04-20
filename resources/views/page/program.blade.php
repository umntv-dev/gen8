@extends('template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/page/program.css') }}">
@endsection

@section('content')
<div class="sec1">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6 kotak-img">
              <img src="{{ asset('images/program/' . $program->image) }}" class="img-program">
            </div>
            <div class="col-lg-6">
              <h1 class="title-program">{{ $program->nama }}</h1>
              <p class="detail-program">{{ $program->divisi->nama }}</p>
                <p class="detail-program">
                  {{ $program->description }}
                </p>
            <div class="jadwal">
                <p class="detail-program"><i class="fa-regular fa-clock"></i> Setiap 
                @if($program->day == 'Monday') Senin
                @elseif($program->day == 'Tuesday') Selasa
                @elseif($program->day == 'Wednesday') Rabu
                @elseif($program->day == 'Thursday') Kamis
                @elseif($program->day == 'Friday') Jumat
                @endif
                pukul 19:00 WIB </p>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="sec2">
    <div class="container">
      
      @foreach($season as $data)
      <div class="title">
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
                    <a href="/program/video/{{$program->nama}}/{{$episode->link}}">
                      <img src="{{ asset('images/Thumbnail/' . $episode->image) }}" width="500" alt="">
                      <h2 class="detail-program text-center mt-3">{{ $episode->judul }}</h2>
                      <!-- @if($i == 0)
                      <h2 class="detail-program text-center">Pilot Episode</h2>
                      @else
                      <h2 class="detail-program text-center">Episode @php echo $i @endphp</h2>
                      @endif -->
                   </a>
                </div>
              @endif
              @php
              $i++
              @endphp
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