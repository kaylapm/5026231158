@extends('template')

@section('content')
    <h3>View Karyawan</h3>
    <a href="/eas" class="btn btn-info mb-3">Kembali</a>

    <form class="form-horizontal">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Kode Pegawai</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" value="{{ $mykaryawans->kodepegawai }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" value="{{ $mykaryawans->namalengkap }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" value="{{ $mykaryawans->divisi }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Departemen</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" value="{{ $mykaryawans->departemen }}">
            </div>
        </div>
    </form>
@endsection
