@extends('template.app')
@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
@endsection
@section('content')
<div class="container">
    <h1 class=" admin text-center text-white">Halo ADMIN</h1>
    <div class="row">
        <div class="col-6 title">
            <a href="/admin/program"><div class="kotak"> PROGRAM</div></a>
        </div>
        <div class="col-6 title">
            <a href="/admin/article"><div class="kotak"> ARTICLE</div></a>
        </div>
    </div>
</div>
@endsection
