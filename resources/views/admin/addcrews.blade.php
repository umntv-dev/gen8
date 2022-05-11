@extends('template.app')
@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
@endsection
@section('content')
<div class="container d-flex justify-content-center mb-5">
  <div class="row w-100 d-flex justify-content-center">
    <form method="POST"
    @if(isset($crews)) 
    action="{{ url('admin/crews/update') }}"
    @else
    action="{{ url('admin/crews/add') }}" 
    @endif
    class="col-lg-8" enctype="multipart/form-data">
    @csrf
      @if(isset($crews))
      <h1 class="text-center">Edit crews</h1>
      <input type="hidden" name="id" value="{{ $crews->id }}">
      @else
      <h1 class="text-center">Add new crews</h1>
      @endif
      <div class="form-group d-flex flex-column">
        <label class="fs-5">Nama Crew</label>
        <input type="text" name="nama" @isset($crews) value="{{ $crews->nama }}" @endisset class="form-control">
      </div>
      <div class="form-group d-flex flex-column">
        <label class="fs-5">Divisi</label>  
        @if(isset($crews))
        <input type="hidden" id="divisi" value="{{ $crews->id_divisi }}">
        @endif
        <select name="divisi" class="form-control">
          <option>--Divisi--</option>
          @foreach($divisi as $data)
          <option value="{{ $data->id }}" id="d{{ $data->id }}">{{ $data->nama }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group d-flex flex-column">
        <label class="fs-5">Role</label>
        @if(isset($crews))
        <input type="hidden" id="role" value="{{ $crews->role }}">
        @endif
        <select name="role" class="form-control">
          <option>--Role--</option>
          <option value="anggota" id="anggota">Anggota</option>
          <option value="koor" id="koor">Koordinator</option>
        </select>
      </div>
      <div class="d-flex justify-content-center mt-3">
        @if(isset($crews))
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
  var divisi = $("#divisi").val();
  $('#d'+divisi).attr('selected',true);
  var role = $("#role").val();
  $('#'+role).attr('selected', true);
</script>
@endsection
