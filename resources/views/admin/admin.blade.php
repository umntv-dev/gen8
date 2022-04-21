@extends('template.app')
@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
@endsection
@section('content')
<div class="container">
    <h1 class=" admin text-center text-white">Admin Page</h1>
    <div class="row text-center">
        <div class="col-6 title">
            <a href="/admin/program">
                <img src="{{ asset('images/admin/program.png') }}" />
            </a>
        </div>
        <div class="col-6 title">
            <a href="/admin/article">
                <img src="{{ asset('images/admin/article.png') }}" />
            </a>
        </div>
    </div>
</div>
@endsection
