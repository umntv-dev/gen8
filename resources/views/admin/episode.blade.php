@extends('template.app')

@section('content')
<div class="container">
    <div class="row w-100 mb-5">
        <div class="col-lg-12 p-0 d-flex">
            <img src="{{ asset('storage/Images/Program/' . $program->image) }}" width="200" alt="">
            <div class="d-flex flex-column col-lg-7 ms-3">
                <h1>{{ $program->nama }}</h1>
                <p class="fs-5">{{ $program->desc_highlight }}</p>
            </div>
        </div>
    </div>
	<table class="table p-5 box text-center">
        <button><a href="{{ url('admin/program/episode/' . $id . '/addepisode') }}">Add Episode</a></button>
        <button><a href="{{ url('admin/program/') }}">Back</a></button>
        <thead>
            <tr>
                <th>Episode</th>
                <th>Judul</th>
                <th>Season</th>
                <th>Sinopsis</th>
                <th>Thumbnail</th>
                <th>Link</th>
                <th>Operation</th>
            </tr>
        </thead>
        @foreach($program->episode as $episode)
        <tr>
            <td>
                @if($episode->episode == 0)
                    Episode Pilot
                @else
                    Episode {{ $episode->episode }}
                @endif
            </td>
            <td>{{ $episode->judul }}</td>
            <td>{{ $episode->season->nama }}</td>            
            <td>{{ $episode->sinopsis }}</td>
            <td><img src="{{ asset('storage/Images/Thumbnail/' . $episode->image) }}" width="200"></td>
            <td>{{ $episode->link }}</td>
            <td>
                <a href="{{ url('admin/program/episode/' . $id . '/edit/' . $episode->id) }}" class="operation">
                    <i class="fa-solid fa-pen"></i>
                </a>
                
                <a href="{{ url('admin/program/episode/' . $id . '/delete/' . $episode->id ) }}" class="operation">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection

