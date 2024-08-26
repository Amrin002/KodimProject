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
                        <a href="{{ route('kegiatan.create') }}" class="btn btn-success">
                            <i class="fas fa-plus-circle"></i> Tambah Data
                        </a>
                    </div>
                    <table class="table table-striper table-hover text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Kegaiatan</th>
                                <th>Uraian</th>
                                <th>Pagu Awal</th>
                                <th>Pagu Revisi</th>
                                <!-- Pagu ini nama lain Keuangan, pagu awal itu Keuangan awal, dan Pagu revisi ini adalah keuangan yang sudah revisi oleh Staf Ren bidang keuangan atau Pagu -->
                                <th>Wasgiat</th>
                                <!-- wasgiat ini nama lain divisi atau staf -->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>1011</td>
                                <td>Acara Nikah</td>
                                <td>Rp. 1.000.000.000</td>
                                <td>-</td>
                                <td>Staf 01</td>
                                <td>
                                    <a href="" class="btn btn-warning">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                    <a href="" class="btn btn-success">show</a>
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