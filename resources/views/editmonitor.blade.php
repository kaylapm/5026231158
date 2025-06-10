@extends('template')

@section('content')
    <h3>Edit Monitor</h3>

    <a href="/monitor" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    @foreach($monitors as $monitor)
    <form action="/monitor/update" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <input type="hidden" name="ID" value="{{ $monitor->ID }}">

        <div class="form-group">
            <label class="control-label col-sm-2" for="merkmonitor">Merk Monitor</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="merkmonitor" name="merkmonitor" value="{{ $monitor->merkmonitor }}" required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="hargamonitor">Harga Monitor</label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="hargamonitor" name="hargamonitor" value="{{ $monitor->hargamonitor }}" required="required">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="tersedia">Tersedia</label>
            <div class="col-sm-6">
                <select class="form-control" name="tersedia" required="required">
                    <option value="1" {{ $monitor->tersedia == 1 ? 'selected' : '' }}>Tersedia</option>
                    <option value="0" {{ $monitor->tersedia == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="berat">Berat Monitor</label>
            <div class="col-sm-6">
                <input class="form-control" type="number" step="0.1" id="berat" name="berat" value="{{ $monitor->berat }}" required="required">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </div>
        </div>
    </form>
    @endforeach
@endsection
