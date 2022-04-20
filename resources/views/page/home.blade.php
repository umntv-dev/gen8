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
                      <img src="{{ asset('images/program/mejaRedaksi.png') }}" class="img-program">
                    </div>
                    <div class="col-lg-6">
                      <h1 class="title-program">Meja Redaksi</h1>
                      <p class="detail-program">Program berita dengan beragam informasi aktual, faktual, dan ter-update yang dikemas secara menarik dan santai. Meja redaksi kembali hadir dengan beragam informasi untuk Anda.</p>
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
                      <img src="{{ asset('images/program/pepox.png') }}"  class="img-program">
                    </div>
                    <div class="col-lg-6">
                      <h1 class="title-program">Pepox</h1>
                      <p class="detail-program">Wadah kalian berdiskusi tentang apa pun. Apakah timun adalah buah atau sayur? Apakah kamu tim bubur diaduk? Kalau iya kenapa? Kami mengundang banyak orang dari berbagai latar belakang untuk berpendapat tentang opini yang kalian punya tentang berbagai topik. Jadi, mari berdiskusi!</p>
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
                <div class="swiper-slide s1">
                  <div class="row">
                    <div class="col-lg-6">
                      <img src="{{ asset('images/program/noCap.png') }}" class="img-program">
                    </div>
                    <div class="col-lg-6">
                      <h1 class="title-program">No Cap</h1>
                      <p class="detail-program">Program yang mengangkat topik mengenai problematika generasi Z. Dikemas dengan lebih ringan dan santai.</p>
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
                      <img src="{{ asset('images/program/lotauga.png') }}" class="img-program">
                    </div>
                    <div class="col-lg-6">
                      <h1 class="title-program">Lo Tau Ga?</h1>
                      <p class="detail-program">Program dari Creative Content Production yang membahas topik-topik menarik serta hal-hal unik yang dikemas dalam skit yang ringan dan menghibur.</p>
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
                      <img src="{{ asset('images/program/act.png') }}" class="img-program">
                    </div>
                    <div class="col-lg-6">
                      <h1 class="title-program">Act For Impact</h1>
                      <p class="detail-program">Program dari Creative Content Production yang menghadirkan pengetahuan, inspirasi serta motivasi dari narasumber kompeten yang inspiratif dengan dikemas secara ringan.</p>
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
                      <img src="{{ asset('images/program/gost.png') }}" class="img-program">
                    </div>
                    <div class="col-lg-6">
                      <h1 class="title-program">Gost</h1>
                      <p class="detail-program">Program yang mengangkat hal-hal seram dari dalam dan luar negeri yang dikemas dalam bentuk talkshow.</p>
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
                      <img src="{{ asset('images/program/kulikKUlik.png') }}" class="img-program">
                    </div>
                    <div class="col-lg-6">
                      <h1 class="title-program">Kulik-Kulik</h1>
                      <p class="detail-program">Program yang mengulas berbagai topik tentang dunia perkuliahan dan dikemas dalam bentuk soft news.</p>
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
              <img src="{{ asset('images/program/act.png') }}" alt="">
              <figcaption>
                <div><h2>Act for impact</h2></div>
                 <div><p>Menghadirkan pengetahuan, inspirasi serta motivasi dari narasumber kompeten yang inspiratif dengan dikemas secara ringan.</p></div>
                <a href="#"></a>
              </figcaption>			
            </figure>
          </div>
          <div class="swiper-slide s2">
            <figure class="hover-img red">
              <img src="{{ asset('images/program/kulikKulik.png') }}" alt="">
              <figcaption>
                <div><h2>Kulik-kulik</h2></div>
                <div><p>Mengulas berbagai topik tentang dunia perkuliahan dan dikemas dalam bentuk soft news.</p></div>
                <a href="#"></a>
              </figcaption>			
            </figure>
          </div>
          <div class="swiper-slide s2">
            <figure class="hover-img red">
              <img src="{{ asset('images/program/mejaRedaksi.png') }}" alt="">
              <figcaption>
                <div><h2>Meja Redaksi</h2></div>
                <div><p>Memberikan beragam informasi aktual, faktual, dan ter-update yang dikemas secara menarik dan santai.</p></div>
                <a href="#"></a>
              </figcaption>			
            </figure>
          </div>
          <div class="swiper-slide s2">
            <figure class="hover-img red">
              <img src="{{ asset('images/program/gost.png') }}" alt="">
              <figcaption>
                <div><h2>Gost</h2></div>
                <div><p>Program yang mengangkat hal-hal seram dari dalam dan luar negeri yang dikemas dalam bentuk talkshow.</p></div>
                <a href="#"></a>
              </figcaption>			
            </figure>
          </div>
          <div class="swiper-slide s2">
            <figure class="hover-img red">
              <img src="{{ asset('images/program/noCap.png') }}" alt="">
              <figcaption>
                <div><h2>no cap</h2></div>
                <div><p>Program yang mengangkat topik mengenai problematika generasi Z. Dikemas dengan lebih ringan dan santai.</p></div>
                <a href="#"></a>
              </figcaption>			
            </figure>
          </div>
          <div class="swiper-slide s2">
            <figure class="hover-img red">
              <img src="{{ asset('images/program/lotauga.png') }}" alt="">
              <figcaption>
                <div><h2>lo tau ga?</h2></div>
                <div><p>Program yang membahas topik-topik menarik serta hal-hal unik yang dikemas dalam skit yang ringan dan menghibur.</p></div>
                <a href="#"></a>
              </figcaption>			
            </figure>
          </div>
          <div class="swiper-slide s2">
            <figure class="hover-img red">
              <img src="{{ asset('images/program/pepox.png') }}" alt="">
              <figcaption>
                <div><h2>Pepox</h2></div>
                <div><p>Kami mengundang banyak orang dari berbagai latar belakang untuk berpendapat tentang opini yang kalian punya tentang berbagai topik. Jadi, mari berdiskusi!</p></div>
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
      mousewheel: true,
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