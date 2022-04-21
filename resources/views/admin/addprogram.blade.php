@extends('template.app')
@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
@endsection
@section('content')
<div class="container">
    <h1>Add new program</h1>
    <h3>Nama Program</h3>
    <input type="text">
    <h3>Deskripsi Program</h3>
    <input type="text">
    <h3>Sinopsis Program</h3>
    <input type="text">
    <h3>Jam Tayang</h3>
    <input type="text">
    <h3>Divisi</h3>
    <select id="divisi" name="divisi">
        <option value="ccp">CCP</option>
        <option value="program">Program</option>
        <option value="news">News</option>
      </select>
</div>
@endsection
