@extends('template.app')
@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/admin/program.css') }}">
@endsection
@section('content')
<div class="container">
    <h1>Program</h1>
	<table class="table p-5 box text-center">
        <button><a href="/admin/addprogram">Add New</a> </button>
        <thead>
            <tr>
                <th>Nama Program</th>
                <th>Divisi</th>
                <th>Description</th>
                <th>Hari</th>
                <th>Waktu</th>
                <th>Image</th>
                <th>Episode</th>
                <th>Operation</th>
            </tr>
        </thead>
        @foreach($programs as $program)
        <tr>
            <td>{{ $program->nama }}</td>
            <td>{{ $program->divisi->nama }}</td>
            <td>{{ $program->description }}</td>            
            <td>{{ $program->day }}</td>
            <td>{{ $program->time }}</td>
            <td><img src="{{ asset('images/program/' . $program->image) }}" width="100"></td>
            <td>
                <button>Episode</button>
            </td>
            <td>
                <a href="" class="operation">
                    <i class="fa-solid fa-pen"></i>
                </a>
                
                <a href="" class="operation">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
    {{-- <h1>Episode</h1>
	<table class="table p-5 box text-center">
        <thead>
            <tr>
                <th>Nama Program</th>
                <th>Episode</th>
                <th>Link Youtube</th>
                <th>Judul Video</th>
                <th>Deskripsi Video</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <a href="" class="operation">
                    <i class="fa-solid fa-pen"></i>
                </a>
                
                <a href="" class="operation">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </td>
        </tr>
    </table> --}}
</div>
@endsection
