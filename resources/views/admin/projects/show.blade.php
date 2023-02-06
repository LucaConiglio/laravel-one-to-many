@extends('layouts.app')





@section('content')
<div class="container">
  <h1>N {{$project->id}}</h1>

  <div class="card">
    {{-- Se cover_img esiste, mostra un tag img, altrimenti nulla --}}
    @if ($project->cover_img)
      {{-- <img src="{{ $project->cover_img }}" alt="" class="card-img-top" style="width: 400px"> --}}
    @endif

    <div class="card-body">
      <div class="card-title"><strong>Name Project:</strong>{{ $project->name }}</div>
      <div class="card-title"><strong>Type:</strong>{{ $project->type->name }}</div>
      <p class="card-text"><strong>Description:</strong>{{ $project->description }}</p>
      <p class="card-text"><strong>Tipo:</strong>{{ $project->github_link }}</p>
      <a class="btn btn-info my-3" href="{{ route('admin.projects.index')}}">torna alla pagina dei progetti</a>
    </div>

    
  </div>

</div>

@endsection