@extends('layouts.app')

@section('title', 'Data Achievement')

@section('content')

<div class="container">
  <a href="/admin/achievements" class="btn btn-primary mb-3">Kembali</a>
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('achievements.update', $achievement->id) }}" method="POST" enctype="multipart/form-data">
      @method('PUT')  
      @csrf
        <div class="form-group">
          <label for="">Judul</label>
          <input type="text" class="form-control" name="title" placeholder="Judul" value="{{$achievement->title}}">
        </div>
        @error('title')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Deskripsi</label>
          <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi" >{{$achievement->description}}</textarea>
        </div>
        @error('description')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <img src="/image/{{$achievement->image}}" class="img-fluid" width="150">
        <div class="form-group">
          <label for="">Gambar</label>
          <input type="file" class="form-control" name="image">
        </div>
        @error('image')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <button class="btn btn-primary btn-block" type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
  
</div>

@endsection