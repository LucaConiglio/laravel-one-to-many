@extends('layouts.app')





@section('content')
<div class="container">
  <h1>Edit Project</h1>

  
  <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
    @csrf()
    @method('PUT')

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>       
          @endforeach
        </ul>
      </div>
      @endif



    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" class="form-control" name="name" value="{{$project->name}}">
    </div>

    <div class="mb-3">
      <label class="form-label">Description</label>
      <textarea name="description" cols="30" rows="5" class="form-control">{{$project->description}}</textarea>
    </div>

    <div class="mb-3">
      <label class="form-label">Cover image</label>
      <input type="file" class="form-control" name="cover_img">
    </div>

    <div class="mb-3">
      <label class="form-label">Github link</label>
      <input type="text" class="form-control" name="github_link" value="{{$project->github_link}}">
    </div>
    
    
    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Annulla</a>
    <button class="btn btn-primary">Salva</button>
  </form>


</div>
@endsection