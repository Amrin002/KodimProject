@extends('template.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Data Kegiatan</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="kode_kegiatan" class="form-label">Kode Kegiatan</label>
                        <input type="text" id="kode_kegiatan" name="kode_kegiatan" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="uraian" class="form-label">Uraian</label>
                        <input type="text" id="uraian" name="uraian" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="pagu_awal" class="form-label">Pagu Awal</label>
                        <input type="text" id="pagu_awal" name="pagu_awal" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="wasgiat" class="form-label">Wasgiat</label>
                        <select class="form-control">
                            <option value="">Silahkan Pilih</option>
                            <option value="">Staf 1</option>
                            <option value="">Staf 2</option>
                            <option value="">Staf 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success" type="submit">Submit</button>
                        <a href="{{ route('kegiatan.index') }}" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection