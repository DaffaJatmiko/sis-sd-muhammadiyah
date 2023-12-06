@extends('layouts.app')

@section('title', 'Data Profile')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">

      @if ($message = Session::get('message'))
      <div class="alert alert-success">
        <strong>Berhasil</strong>
        <p>{{$message}}</p>
      </div>
      @endif

      <form action="/admin/profile/{{$profile->id}}" method="POST" enctype="multipart/form-data">
      @method('PUT')  
      @csrf
        <div class="form-group">
          <label for="">Nama Kepala Sekolah</label>
          <input type="text" class="form-control" name="name_1" placeholder="Judul" value="{{$profile->name_1}}">
        </div>
        @error('name_1')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Nama Wakil Kepala Sekolah</label>
          <input type="text" class="form-control" name="name_2" placeholder="Judul" value="{{$profile->name_2}}">
        </div>
        @error('name_2')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Gambar Kepala Sekolah</label>
          <input type="file" class="form-control" name="image_1">
        </div>
        <img src="/image/{{$profile->image_1}}" class="img-fluid" width="150">
        @error('image_1')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Gambar Wakil Kepala Sekolah</label>
          <input type="file" class="form-control" name="image_2">
        </div>
        <img src="/image/{{$profile->image_2}}" class="img-fluid" width="150">
        @error('image_2')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Kurikulum</label>
          <textarea name="curriculum" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi" >{{$profile->curriculum}}</textarea>
        </div>
        @error('description')
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