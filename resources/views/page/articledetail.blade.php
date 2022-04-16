@extends('template.app') @section('content')
<div class="articleDetail container">
    <div class="information">
        <h6>{{ $article->divisi->nama }}</h6>
        <h2 id="judul">{{ $article->judul }}</h2>
        <h6>
            By <span id="author">{{ $article->crews->nama }}</span> |
            <span id="tanggal">{{ Carbon\Carbon::parse($article->waktu)->format('d F Y') }}</span>
        </h6>
        <img
            id="thumbnail"
            src="{{ asset('images/article/article.png') }}"
        />
    </div>
    <div class="contents py-4">
        {{ $article->description }}
    </div>
    <div class="recommended my-4">
        <h2>More News</h2>
        <hr style="height: 2px; opacity: 100%" />
        <div class="row mx-1 justify-content-center">
            <div class="thumbnail col-md m-1">
                <div class="description px-3">
                    <p>{{ $articles[0]->divisi->nama }}</p>
                    <h6>{{ $articles[0]->judul }}</h6>
                </div>
            </div>
            <div class="thumbnail col-md m-1">
                <div class="description px-3">
                    <p>{{ $articles[1]->divisi->nama }}</p>
                    <h6>{{ $articles[1]->judul }}</h6>
                </div>
            </div>
            <div class="thumbnail col-md m-1">
                <div class="description px-3">
                    <p>{{ $articles[2]->divisi->nama }}</p>
                    <h6>{{ $articles[2]->judul }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
