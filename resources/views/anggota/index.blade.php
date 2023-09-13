@extends('layouts.app')
@section('title', 'Data Anggota')
@section('content')

<div class="container-fluid">



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Anggota</h6>
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
                            <th>Ranting</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($anggota as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->photo }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->place_birth }}</td>
                                <td>{{ $item->date_birth }}</td>
                                <td>{{ $item->position }}</td>
                                <td>{{ $item->ranting->name }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
    
@endsection