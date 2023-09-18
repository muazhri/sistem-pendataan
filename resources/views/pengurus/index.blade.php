@extends('layouts.app')
@section('title', 'Data pengurus')
@section('content')


@if (Session::has('status'))
<div class="w-full max-w-sm mx-auto">
    <div class="py-3 pl-4 pr-10 leading-normal text-green-700 bg-green-100 rounded-lg" role="alert">
        <p>{{ Session::get('message') }}</p>
    </div>
</div>
@endif

<div class="container-fluid">

    <a href="/create" class="text-white btn btn-primary my-2" type="button">Tambah Data</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pengurus</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Position</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengurus as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset('storage/photo/'.$item->images) }}" alt="" width="200px"></td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->place_birth }}</td>
                                <td>{{ $item->date_birth }}</td>
                                <td>{{ $item->position }}</td>
                                <td>
                                    <a href="" type="button" value="{{ $item->id }}" class="btn btn-warning my-2">Edit</a>
                                    <a href="" type="button" value="{{ $item->id }}" class="btn btn-danger">hapus</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection