@extends('template')

@section('content')
    <h3>Data Karyawan</h3>

    <form action="/eas/cari" method="GET">
    </form>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($mykaryawans as $mykaryawan)
            <tr>
                <td>{{ $mykaryawan->kodepegawai }}</td>
                <td>{{ ucwords($mykaryawan->namalengkap) }}</td>
                <td>{{ $mykaryawan->divisi }}</td>
                <td>{{ $mykaryawan->departemen }}</td>
                <td>
                    <a href="/eas/edit/{{ $mykaryawan->kodepegawai }}" class="btn btn-success">Edit</a>
                    <a href="/eas/view/{{ $mykaryawan->kodepegawai }}" class="btn btn-primary">View</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
