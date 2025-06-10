@extends('template')

@section('content')
    <h3>Data Monitor</h3>
    <a href="/monitor/tambah" class="btn btn-primary"> + Tambah Monitor Baru</a>

    <p>Cari Data Monitor :</p>
    <form action="/monitor/cari" method="GET">
        <input type="text" class="form-control" name="cari" placeholder="Cari Merk Monitor ..">
        <input type="submit" value="CARI" class="btn btn-info">
    </form>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Merk</th>
            <th>Harga</th>
            <th>Tersedia</th>
            <th>Berat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($monitors as $monitor)
            <tr>
                <td>{{ $monitor->merkmonitor }}</td>
                <td>{{ $monitor->hargamonitor }}</td>
                <td>{{ $monitor->tersedia ? 'Tersedia' : 'Tidak Tersedia' }}</td>
                <td>{{ $monitor->berat }} kg</td>
                <td>
                    <a href="/monitor/edit/{{ $monitor->ID }}" class="btn btn-success">Edit</a>
                    <a href="/monitor/hapus/{{ $monitor->ID }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $monitors->links() }}
@endsection
