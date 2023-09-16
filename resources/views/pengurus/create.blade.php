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

<form action="/pengurus" method="post" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="col-12">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>
        <div class="card-body">
          <div class="form-group">
              <label for="formFile" class="form-label">Photo</label>
              <input type="file" class="form-control" id="formFile">
          </div>
          <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="">
          </div>
          <div class="form-group">
            <label for="id_kategori">Kategori Barang</label>
            <select name="id_kategori" id="id_kategori" class="custom-select">
              <option value="" selected disabled hidden>-- Pilih Kategori --</option>
            </select>
          </div>
          <div class="form-group">
            <label for="harga">Harga Barang</label>
            <input type="number" class="form-control" id="harga" name="harga" value="">
          </div>
          <div class="form-group">
            <label for="jumlah">Jumlah Barang</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="">
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