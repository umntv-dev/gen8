@extends('template.app')
@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/page/about.css') }}">
@endsection
@section('content')
<div class="about-section1">
    <div class="container col-10">
        <div class="d-flex align-items-center justify-content-center mb-3">
            <img src="{{ asset('images/logo/logo2.png') }}" alt="logo" width="350"> 
        </div>
        <div class="">
            <p>UMN TV merupakan lembaga pers/media kampus mahasiswa Universitas Multimedia Nusantara berupa televisi 
            berbasis streaming yang menjadi wadah berkarya dan pengaplikasian ilmu di bangku perkuliahan. UMN TV diresmikan 
            pada 31 Maret 2015 di bawah naungan prodi Ilmu Komunikasi UMN. Pengurus dan anggota UMN TV berasal dari fakultas 
            yang berbeda, mayoritas berasal dari Fakultas Komunikasi, FTV, dan DKV.</p>
        </div>
    </div>
</div>

<div class="about-section2">
    <div class="col-10 container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-auto col-sm-12 col-xs-12 align-sm-center">
                <h1><b>
                    Rayakan Semangat Mudamu 
                </b></h1>
            </div>
            <div class="col-xl-8 col-lg-7 col-md-auto col-sm-12 col-xs-12">
                <p>Muda merupakan kata yg tepat untuk menggambarkan UMN TV. Jiwa muda dikenal penuh dengan gejolak dan dinamika, 
                tidak takut untuk berekspresi atau tampil beda. Banyak orang mengatakan, manusia benar-benar merasa hidup pada 
                saat muda. Semangat muda yang penuh warna, inilah yang kami hidupi dan wujudkan dalam UMN TV. Kami tidak berjalan 
                di tempat, kami terus belajar, kami berani berekspresi, karena kami muda. Kami UMN TV. Rayakan semangat mudamu!</p>
            </div>
        </div>
    </div>
</div>

<div class="about-section3">
    <div class="col-10 container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 px-5">
                <h1><b>
                    Visi
                </b></h1>
                <p>Mewujudkan pribadi yang bertanggung jawab dan memiliki kompetensi dalam dunia penyiaran.</p>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 px-5">
                <h1><b>
                    Misi
                </b></h1>
                <p>Menjadi wadah pembelajaran mengenai dunia penyiaran bagi mahasiswa UMN, dan Mengembangkan bakat dan kreativitas 
                mahasiswa UMN dalam dunia penyiaran</p>
            </div>
        </div>
    </div>
</div>

<div class="about-section4">
    <div class="col-10 container">
        <div class="row">
            <div class="col-md-12">
                <h1>
                    Documentation
                </h1>
                <div class="about-line"></div>
            </div>
            <div class="col-md-12">
                <div class="col-md-3">   
                </div>
                <div class="col-md-3">   
                </div>
                <div class="col-md-3">   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
