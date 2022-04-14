@extends('template.app') 
@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/page/articledetail.css') }}">
@endsection
@section('content')
<div class="articleDetail container">
    <div class="information">
        <h6>PROGRAMS</h6>
        <h2 id="judul">Manfaat Meminum Coklat Panas Untuk Kesehatan Tubuh</h2>
        <h6>
            By <span id="author">Johanes Wibowo</span> |
            <span id="tanggal">February 21, 2022</span>
        </h6>
        <img
            id="thumbnail"
            src="{{ asset('images/article/article.png') }}"
        />
    </div>
    <div class="contents py-4">
        <p>
            JAKARTA, UMN TV.com - Lorem Ipsum is simply dummy text of the
            printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown
            printer took a galley of type and scrambled it to make a type
            specimen book. It has survived not only five centuries, but also the
            leap into electronic typesetting, remaining essentially unchanged.
            It was popularised in the 1960s with the release of Letraset sheets
            containing Lorem Ipsum passages, and more recently with desktop
            publishing software like Aldus PageMaker including versions of Lorem
            Ipsum.
        </p>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text
            ever since the 1500s, when an unknown printer took a galley of type
            and scrambled it to make a type specimen book. It has survived not
            only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged. It was popularised in the 1960s
            with the release of Letraset sheets containing Lorem Ipsum passages,
            and more recently with desktop publishing software like Aldus
            PageMaker including versions of Lorem Ipsum.
        </p>
    </div>
    <div class="recommended my-4">
        <h2>More News</h2>
        <hr style="height: 2px; opacity: 100%" />
        <div class="row mx-1 justify-content-center">
            <div class="thumbnail col-md m-1">
                <div class="description px-3">
                    <p>PROGRAM</p>
                    <h6>Manfaat Meminum Coklat Panas Untuk Kesehatan Tubuh</h6>
                </div>
            </div>
            <div class="thumbnail col-md m-1">
                <div class="description px-3">
                    <p>PROGRAM</p>
                    <h6>Manfaat Meminum Coklat Panas Untuk Kesehatan Tubuh</h6>
                </div>
            </div>
            <div class="thumbnail col-md m-1">
                <div class="description px-3">
                    <p>PROGRAM</p>
                    <h6>Manfaat Meminum Coklat Panas Untuk Kesehatan Tubuh</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
