@extends('template')
@section('content')
    <h3>Edit Data Pegawai</h3>

    <a href="/eas" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    @foreach ($mykaryawans as $mykaryawan)
        <form action="/eas/update" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <input type="hidden" name="kodepegawai" value="{{ $mykaryawan->kodepegawai }}">

            <div class="form-group row">
                <label class="control-label col-sm-2" for="namalengkap">
                    Nama
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="namalengkap" placeholder="Edit Nama Lengkap"
                        name="namalengkap" value="{{ $mykaryawan->namalengkap }}" required="required">
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-sm-2" for="divisi">
                    Divisi
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="divisi" placeholder="Edit Divisi" name="divisi"
                        value="{{ $mykaryawan->divisi }}" required="required">
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-sm-2" for="departemen">
                    Departemen
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="departemen" placeholder="Edit Departemen"
                        name="departemen" value="{{ $mykaryawan->departemen }}" required="required">
                </div>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
    @endforeach
@endsection
