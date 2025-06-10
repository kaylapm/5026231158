@extends('template')

@section('content')
    <h3>Tambah Monitor</h3>

    <a href="/monitor" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    <form action="/monitor/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="control-label col-sm-2" for="merkmonitor">
                Merk Monitor
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="merkmonitor" placeholder="Masukkan Merk Monitor" name="merkmonitor" required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="hargamonitor">
                Harga Monitor
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="hargamonitor" placeholder="Masukkan Harga Monitor" name="hargamonitor" required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="tersedia">
                Tersedia
            </label>
            <div class="col-sm-6">
                <select class="form-control" name="tersedia" required="required">
                    <option value="1">Tersedia</option>
                    <option value="0">Tidak Tersedia</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="berat">
                Berat Monitor
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="number" step="0.1" id="berat" placeholder="Masukkan Berat Monitor" name="berat" required="required">
            </div>
        </div>

        <input type="submit" value="Simpan Monitor" class="btn btn-success">
    </form>
@endsection
