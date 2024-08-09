@extends('template.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Halaman Kegiatan</h1>
            <div class="card">
                <div class="card-header">
                    <h5>Data Kegiatan</h5>
                </div>
                <div class="card-body">
                    <div class="mb-2 mt-2">
                        <a href="{{ route('kegiatan.create') }}" class="btn btn-seccess">
                            <i class="fas fa-plus-circle"></i>Tambah Data
                        </a>
                    </div>
                    <table class="table table-striper table-hover text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Conton Nama</td>
                                <td>
                                    <a href="" class="btn btn-warning">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection