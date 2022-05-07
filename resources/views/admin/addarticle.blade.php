@extends('template.app')
@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
@endsection
@section('content')
<div class="container d-flex justify-content-center mb-5">
  <div class="row w-100 d-flex justify-content-center">
    <form method="POST"
    @if(isset($article)) 
    action="{{ url('admin/article/update') }}"
    @else
    action="{{ url('admin/article/add') }}" 
    @endif
    class="col-lg-8" enctype="multipart/form-data">
    @csrf
    @if(isset($article))
    {{ $article }}
      <h1 class="text-center">Edit article</h1>
      <input type="hidden" name="id" value="{{ $article->id }}">
      @else
      <h1 class="text-center">Add new article</h1>
      @endif
      <div class="form-group d-flex flex-column">
        <label class="fs-5">Judul Article</label>
        <input type="text" name="judul" @isset($article) value="{{ $article->judul }}" @endisset class="form-control">
      </div>
      <div class="form-group d-flex flex-column">
        <label class="fs-5">Image</label>
        <input type="file" name="image" class="form-control">
      </div>
      <div class="form-group d-flex flex-column">
        <label class="fs-5">Crews</label>  
        @if(isset($article))
        <input type="hidden" id="crews" value="{{ $article->id_crews }}">
        @endif
        <select name="crews" class="form-control">
          <option>--Crews--</option>
          @foreach($crews as $data)
          <option value="{{ $data->id }}" id="c{{ $data->id }}">{{ $data->nama }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group d-flex flex-column">
        <label class="fs-5">Divisi</label>  
        @if(isset($article))
        <input type="hidden" id="divisi" value="{{ $article->id_divisi }}">
        @endif
        <select name="divisi" class="form-control">
          <option>--Divisi--</option>
          @foreach($divisi as $data)
          <option value="{{ $data->id }}" id="d{{ $data->id }}">{{ $data->nama }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group d-flex flex-column">
        <label class="fs-5">Deskripsi</label>
        <textarea name="description" id="summernote" class="form-control">@if(isset($article)) {{ $article->description }} @endif</textarea>
      </div>
      <div class="d-flex justify-content-center mt-3">
        @if(isset($article))
        <input type="submit" class="btn btn-danger" value="Update Article">
        @else
        <input type="submit" class="btn btn-danger" value="Add Article">
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
