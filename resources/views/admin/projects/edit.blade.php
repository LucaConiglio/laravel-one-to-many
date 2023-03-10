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
      <label class="form-label">type</label>
      <select class="form-select" name="type_id">
        @foreach ($types as $type)

          <option value={{$type->id}} {{$type->id === old("type_id", $project->type_id) ? 'selected' : ''}}  >{{$type->name}}</option>

        @endforeach
        

      </select>
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
      <h4 class="my-2">previously uploaded image</h4>
      <img src="{{ asset('/storage/' . $project->cover_img)  }}" alt="" style="width: 200px; object-fit:cover; object-position: top  ">
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