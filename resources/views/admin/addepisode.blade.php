@extends('template.app')
@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
@endsection
@section('content')
<div class="container d-flex justify-content-center mb-5">
  <div class="row w-100 d-flex justify-content-center">
    <form method="POST"
    @if(isset($episode)) 
    action="{{ url('admin/program/episode/update') }}"
    @else
    action="{{ url('admin/program/episode/add') }}" 
    @endif
    class="col-lg-8" enctype="multipart/form-data">
    @csrf
    <input type="hidden" value="{{ $id }}" name="id_program">
      @if(isset($episode))
      <h1 class="text-center">Edit Episode</h1>
      <input type="hidden" name="id" value="{{ $episode->id }}">
      @else
      <h1 class="text-center">Add new Episode</h1>
      @endif
      <div class="form-group d-flex flex-column">
        <label class="fs-5">Judul Episode</label>
        <input type="text" name="judul" @isset($episode) value="{{ $episode->judul }}" @endisset class="form-control">
      </div>
      <div class="form-group d-flex flex-column">
        <label class="fs-5">Episode</label>
        <input type="number" name="episode" class="form-control" @isset($episode) value="{{ $episode->episode }}" @endisset>
      </div>
      <div class="form-group d-flex flex-column">
        <label class="fs-5">Season</label>
        @if(isset($episode))
        <input type="hidden" value="{{ $episode->id_season }}" id="season">
        @endif
        <select name="season" id="" class="form-control">
          <option>--Season--</option>
          @foreach($season as $data)
          <option value="{{ $data->id }}" id="s{{ $data->id }}">{{ $data->nama }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group d-flex flex-column">
        <label class="fs-5">Thumbnail</label>
        <input type="file" name="thumbnail" class="form-control">
      </div>
      <div class="form-group d-flex flex-column">
        <label class="fs-5">Link Embed</label>
        <input type="text" name="link" @isset($episode) value="{{ $episode->link }}" @endisset class="form-control">
      </div>
      <div class="form-group d-flex flex-column">
        <label class="fs-5">Sinopsis</label>
        <textarea name="sinopsis" id="summernote" class="form-control">@if(isset($episode)) {{ $episode->sinopsis }} @endif</textarea>
      </div>
      <div class="d-flex justify-content-center mt-3">
        @if(isset($episode))
        <input type="submit" class="btn btn-danger" value="Update Episode">
        @else
        <input type="submit" class="btn btn-danger" value="Add Episode">
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
  var season = $("#season").val();
  $('#s'+season).attr('selected', true);
</script>
@endsection
