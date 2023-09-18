@extends('layouts.app')
@section('title', 'Add Data')
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

<form action="pengurus" method="post" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="col-12">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>
        <div class="card-body">
          <div class="form-group">
              <label for="photo" class="form-label">Photo</label>
              <br>
              <input type="file" name="photo" id="photo">
          </div>
          <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" name="name" value="">
          </div>
          <div class="form-group">
            <label for="gender">Jenis - Kelamin</label>
            <select name="gender" id="gender" class="custom-select">
              <option value="" selected disabled hidden>-- Pilih Jenis Kelamin --</option>
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="address">Alamat</label>
            <input type="text" class="form-control" id="address" name="address" value="">
          </div>
          <div class="form-group">
            <label for="place_birth">Tempat Lahir</label>
            <input type="text" class="form-control" id="place_birth" name="place_birth" value="">
          </div>
          <div class="form-group">
            <label for="date_birth">Tanggal Lahir</label>
            <input type="date" class="form-control" id="date_birth" name="date_birth" value="">
          </div>
          <div class="form-group">
            <label for="position">Jabatan</label>
            <input type="text" class="form-control" id="position" name="position" value="">
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection