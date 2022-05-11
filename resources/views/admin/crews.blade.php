@extends('template.app')
@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/admin/article.css') }}">
@endsection
@section('content')
<div class="container">
    <h1>Crews</h1>
	<table class="table p-5 box text-center">
        <button><a href="/admin/addcrews">Add New</a> </button>
        <button><a href="/admin">Back</a> </button>
        <thead>
            <tr>
                <th>Nama Crew</th>
                <th>Divisi</th>
                <th>Role</th>
                <th>Operation</th>
            </tr>
        </thead>
        @foreach($crews as $crews)
        <tr>
            <td>{{ $crews->nama }}</td>
            <td>{{ $crews->divisi->nama }}</td>
            <td>{{ $crews->role }}</td>
            <td>
                <a href="{{ url('admin/crews/' . $crews->id) }}" class="operation">
                    <i class="fa-solid fa-pen"></i>
                </a>
                
                <a href="{{ url('admin/crews/delete/' . $crews->id ) }}" class="operation">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
