@extends('template.app')

@section('content')
<div class="article">
    <div class="container">
        <div class="highlight">
            <div class="testbg"></div>
            <div class="testbox">
                <p>{{ $highlight->divisi->nama }}</p>
                <h1>Manfaat Meminum Coklat Panas Untuk Kesehatan Tubuh</h1>
                <div class="date d-flex flex-row align-items-center">
                    <img src="{{ asset('images/article/icons8-clock-24.png') }}" />
                    <p>February 21,2022</p>
                </div>
            </div>
        </div>
        <div class="recommended my-4">
            <h2>Articles</h2>
            <hr style="height: 2px; opacity: 100%" />
            <div class="row mx-1">
                @foreach($article as $key)
                    <div class="thumbnail col-md-4 p-1">
                        <div class="description px-3">
                            <p>{{ $key->divisi->nama }}</p>
                            <h6>{{ $key->judul }}</h6>
                            <div class="date d-flex flex-row align-items-center">
                                <img src="{{ asset('images/article/icons8-clock-24.png') }}" />
                                <p>{{ $key->waktu }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
