@extends('template.app')

@section('content')
<div class="article">
    <div class="container">
        <div class="highlight">
            <div class="testbg"></div>
            <div class="testbox">
                <p>{{ $highlight->divisi->nama }}</p>
                <h1>{{ $highlight->judul }}</h1>
                <div class="date d-flex flex-row align-items-center">
                    <img src="{{ asset('images/article/icons8-clock-24.png') }}" />
                    <p>{{ Carbon\Carbon::parse($highlight->waktu)->format('d F Y') }}</p>
                </div>
            </div>
        </div>
        <div class="recommended my-4">
            <h2>Articles</h2>
            <hr style="height: 2px; opacity: 100%" />
            <div class="row m-1">
                <!-- div thumbnail-wrapper udah ready buat foreach() -->
                @foreach($article as $key => $value)
                <div class="thumbnail-wrapper col-md-4 p-1">
                    <div class="thumbnail">
                        <div class="description px-3">
                            <p>{{ $value->divisi->nama }}</p>
                            <h6>{{ $value->judul }}</h6>
                            <div class="date d-flex flex-row align-items-center">
                                <img src="{{ asset('images/article/icons8-clock-24.png') }}" />
                                <p>{{ Carbon\Carbon::parse($value->waktu)->format('d F Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
