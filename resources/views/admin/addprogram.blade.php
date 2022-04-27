@extends('template.app')
@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
@endsection
@section('content')
<div class="container d-flex justify-content-center mb-5">
  <div class="row w-100 d-flex justify-content-center">
    <form method="POST"
    @if(isset($program)) 
    action="{{ url('admin/program/update') }}"
    @else
    action="{{ url('admin/program/add') }}" 
    @endif
    class="col-lg-8" enctype="multipart/form-data">
    @csrf
      @if(isset($program))
      <h1 class="text-center">Edit program</h1>
      <input type="hidden" name="id" value="{{ $program->id }}">
      @else
      <h1 class="text-center">Add new program</h1>
      @endif
      <div class="form-group d-flex flex-column">
        <label class="fs-5">Nama Program</label>
        <input type="text" name="nama" @isset($program) value="{{ $program->nama }}" @endisset class="form-control">
      </div>
      <div class="form-group d-flex flex-column">
        <label class="fs-5">Deskripsi Highlight</label>
        <input type="text" name="desc_highlight" class="form-control" @isset($program) value="{{ $program->desc_highlight }}" @endisset>
      </div>
      <div class="form-group d-flex flex-column">
        <label class="fs-5">Hari</label>
        @if(isset($program))
        <input type="hidden" id="hari" value="{{ $program->day }}">
        @endif
        <select name="day" class="form-control">
          <option>--Hari--</option>
          <option value="Monday" id="Monday">Senin</option>
          <option value="Tuesday" id="Tuesday">Selasa</option>
          <option value="Wednesday" id="Wednesday">Rabu</option>
          <option value="Thursday" id="Thursday">Kamis</option>
          <option value="Friday" id="Friday">Jumat</option>
          <option value="Saturday" id="Saturday">Sabtu</option>
          <option value="Sunday" id="Sunday">Minggu</option>
        </select>
      </div>
      <div class="form-group d-flex flex-column">
        <label class="fs-5">Waktu</label>
        <input type="time" name="time" class="form-control" @isset($program) value="{{ $program->time }}" @endisset>
      </div>
      <div class="form-group d-flex flex-column">
        <label class="fs-5">Image</label>
        <input type="file" name="image" class="form-control">
      </div>
      <div class="form-group d-flex flex-column">
        <label class="fs-5">Divisi</label>  
        @if(isset($program))
        <input type="hidden" id="divisi" value="{{ $program->id_divisi }}">
        @endif
        <select name="divisi" class="form-control">
          <option>--Divisi--</option>
          @foreach($divisi as $data)
          <option value="{{ $data->id }}" id="d{{ $data->id }}">{{ $data->nama }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group d-flex flex-column">
        <label class="fs-5">Deskripsi Umum</label>
        <textarea name="description" id="summernote" class="form-control">@if(isset($program)) {{ $program->description }} @endif</textarea>
      </div>
      <div class="d-flex justify-content-center mt-3">
        @if(isset($program))
        <input type="submit" class="btn btn-danger" value="Update Program">
        @else
        <input type="submit" class="btn btn-danger" value="Add Program">
        @endif
      </div>
    </form>
  </div>
</div>
@endsection

@section('custom-js')
<script>
  $(document).ready(function(){
    $('#summernote').summernote({
      height : 200
    });
  });
  var hari = $("#hari").val();
  $('#'+hari).attr('selected', true);
  var divisi = $("#divisi").val();
  $('#d'+divisi).attr('selected',true);
</script>
@endsection
