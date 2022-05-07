@extends('template.app')
@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/admin/article.css') }}">
@endsection
@section('content')
<div class="container">
    <h1>Article</h1>
	<table class="table p-5 box text-center">
        <button><a href="/admin/addarticle">Add New</a> </button>
        <button><a href="/admin">Back</a> </button>
        <thead>
            <tr>
                <th>Judul Article</th>
                <th>Divisi</th>
                <th>Description</th>
                <th>Hari</th>
                <th>Waktu</th>
                <th>Image</th>
                <th>Operation</th>
            </tr>
        </thead>
        @foreach($article as $article)
        <tr>
            <td>{{ $article->judul }}</td>
            <td>{{ $article->divisi->nama }}</td>
            <td>{!! nl2br($article->description) !!}</td>            
            <td>{{ Carbon\Carbon::parse($article->waktu)->format('d F Y') }}</td>
            <td>{{ Carbon\Carbon::parse($article->waktu)->format('h:i') }}</td>
            <td><img src="{{ asset('storage/Images/Article/' . $article->image) }}" width="100"></td>
            <td>
                <a href="{{ url('admin/article/' . $article->id) }}" class="operation">
                    <i class="fa-solid fa-pen"></i>
                </a>
                
                <a href="{{ url('admin/article/delete/' . $article->id ) }}" class="operation">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
