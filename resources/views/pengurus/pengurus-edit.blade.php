@extends('layouts.app')
@section('title', 'Edit Data')
@section('content')

@if ($errors->any())
<div class="w-full max-w-sm mx-auto">
    <div class="mt-2 text-sm text-red-700">
        <ul class="list-disc space-y-1 pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif

<a href="/pengurus" class="text-white btn btn-primary my-2" type="button">Kembali</a>

<form action="/pengurus/{{ $pengurus->id }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
  @csrf
  <div class="row">
    <div class="col-12">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>
        <div class="card-body">
          <div class="form-group">
              <label for="photo" class="form-label" >Photo</label>
              <br>
              <input type="file" name="photo" id="photo" value="{{ $pengurus->images }}">
          </div>
          <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $pengurus->name }}">
          </div>
          <div class="form-group">
            <label for="gender">Jenis - Kelamin</label>
            <select name="gender" id="gender" class="custom-select">
              <option value="{{ $pengurus->gender }}">{{ $pengurus->gender }}</option>
              @if ($pengurus->gender == 'L')
                  <option value="P">P</option>
                @else
                    <option value="L">L</option>
              @endif
            </select>
          </div>
          <div class="form-group">
            <label for="address">Alamat</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $pengurus->address }}">
          </div>
          <div class="form-group">
            <label for="place_birth">Tempat Lahir</label>
            <input type="text" class="form-control" id="place_birth" name="place_birth" value="{{ $pengurus->place_birth }}">
          </div>
          <div class="form-group">
            <label for="date_birth">Tanggal Lahir</label>
            <input type="date" class="form-control" id="date_birth" name="date_birth" value="{{ $pengurus->date_birth }}">
          </div>
          <div class="form-group">
            <label for="position">Jabatan</label>
            <input type="text" class="form-control" id="position" name="position" value="{{ $pengurus->position }}">
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection