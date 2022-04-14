@extends('template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/page/home.css') }}">
@endsection

@section('content')
<div class="sec1">
      <div class="container">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide s1">
                  <div class="row">
                    <div class="col-lg-6">
                      <img src="{{ asset('images/program/program1.png') }}" class="img-program">
                    </div>
                    <div class="col-lg-6">
                      <h1 class="title-program">Sanantara</h1>
                      <p class="detail-program">Chelsea akan nemenin kalian di Sanantara dengan berbagai informasi dan fakta menarik seputar budaya Indonesia.</p>
                    <div class="btn-program">
                      <button class="btn">
                        <a href="/program">
                          <p>Selengkapnya</p>
                        </a>
                      </button>
                      <button class="btn">
                        <p><i class="fa-solid fa-circle-play"></i> Episode</p>
                      </button>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide s1">
                  <div class="row">
                    <div class="col-lg-6">
                      <img src="{{ asset('images/program/program1.png') }}"  class="img-program">
                    </div>
                    <div class="col-lg-6">
                      <h1 class="title-program">Sanantara</h1>
                      <p class="detail-program">Chelsea akan nemenin kalian di Sanantara dengan berbagai informasi dan fakta menarik seputar budaya Indonesia.</p>
                    <div class="btn-program">
                      <button class="btn">
                        <p>Selengkapnya</p>
                      </button>
                      <button class="btn">
                        <p><i class="fa-solid fa-circle-play"></i> Episode</p>
                      </button>
                    </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>

<div class="sec2">
  <div class="container">
    <div class="title">
      <h1>Programs</h1>
    </div><hr>
    <div class="swiper mySwiper2">
      <div class="swiper-wrapper">
          <div class="swiper-slide s2">
            <figure class="hover-img">
              <img src="{{ asset('images/program/program1.png') }}" alt="">
              <figcaption>
                <div><h2>Sanantara</h2></div>
                 <div><p>Chelsea akan nemenin kalian di Sanantara dengan berbagai informasi dan fakta menarik seputar budaya Indonesia.</p></div>
                <a href="#"></a>
              </figcaption>			
            </figure>
          </div>
          <div class="swiper-slide s2">
            <figure class="hover-img red">
              <img src="{{ asset('images/program/program1.png') }}" alt="">
              <figcaption>
                <div><h2>Sanantara</h2></div>
                <div><p>Chelsea akan nemenin kalian di Sanantara dengan berbagai informasi dan fakta menarik seputar budaya Indonesia.</p></div>
                <a href="#"></a>
              </figcaption>			
            </figure>
          </div>
          <div class="swiper-slide s2">
            <figure class="hover-img red">
              <img src="{{ asset('images/program/program1.png') }}" alt="">
              <figcaption>
                <div><h2>Sanantara</h2></div>
                <div><p>Chelsea akan nemenin kalian di Sanantara dengan berbagai informasi dan fakta menarik seputar budaya Indonesia.</p></div>
                <a href="#"></a>
              </figcaption>			
            </figure>
          </div>
          <div class="swiper-slide s2">
            <figure class="hover-img red">
              <img src="{{ asset('images/program/program1.png') }}" alt="">
              <figcaption>
                <div><h2>Sanantara</h2></div>
                <div><p>Chelsea akan nemenin kalian di Sanantara dengan berbagai informasi dan fakta menarik seputar budaya Indonesia.</p></div>
                <a href="#"></a>
              </figcaption>			
            </figure>
          </div>
          <div class="swiper-slide s2">
            <figure class="hover-img red">
              <img src="{{ asset('images/program/program1.png') }}" alt="">
              <figcaption>
                <div><h2>Sanantara</h2></div>
                <div><p>Chelsea akan nemenin kalian di Sanantara dengan berbagai informasi dan fakta menarik seputar budaya Indonesia.</p></div>
                <a href="#"></a>
              </figcaption>			
            </figure>
          </div>
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