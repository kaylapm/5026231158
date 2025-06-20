@extends('template')

@section('content')
    <h3>Data Karyawan</h3>

    <form action="/karyawan/cari" method="GET">
    </form>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($karyawans as $karyawan)
            <tr>
                <td>{{ $karyawan->kodepegawai }}</td>
                <td>{{ strtoupper($karyawan->namalengkap) }}</td> <!-- Menampilkan nama dalam huruf kapital -->
                <td>{{ $karyawan->divisi }}</td>
                <td>{{ strtolower($karyawan->departemen) }}</td> <!-- Menampilkan departemen dalam huruf kecil -->
                <td>
                    <a href="/karyawan/hapus/{{ $karyawan->kodepegawai }}" class="btn btn-danger">Hapus Data</a>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-between align-items-center">
        <a href="/karyawan/tambah" class="btn btn-primary">+ Tambah Data Karyawan</a>
    </div>
@endsection
