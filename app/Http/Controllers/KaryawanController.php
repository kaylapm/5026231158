<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
	public function indexkaryawan()
		{
			// mengambil data dari table karyawan
            $karyawans = DB::table('karyawan')-> get();

			// mengirim data karyawan ke view index
			return view('indexkaryawan',['karyawans' => $karyawans]);

		}
	public function tambahkaryawan()
		{
			// memanggil view tambah
			return view('tambahkaryawan');
		}
// method untuk insert data ke table karyawan
    public function storekaryawan(Request $request)
    {
        // insert data ke table karyawan
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');

    }

    public function editkaryawan($kodepegawai) //ada primary key
    {
        // mengambil data karyawan berdasarkan id yang dipilih
        $karyawans = DB::table('karyawan')
        ->where('kodepegawai',$kodepegawai) //khusus operator =, kalau mau pakai selain itu harus sebutin operator di parameter kedua nya
        ->get();
        // passing data karyawan yang didapat ke view edit.blade.php
        return view('editkaryawan',['karyawans' => $karyawans]);

    }
    // update data karyawan
    public function updatekaryawan(Request $request)
    {
        // update data karyawan
        DB::table('karyawan')->where('kodepegawai',$request->ID)->update([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');
    }
    // method untuk hapus data karyawan
    public function hapuskaryawan($kodepegawai)
    {
        // menghapus data karyawan berdasarkan id yang dipilih
        DB::table('karyawan')->where('kodepegawai',$kodepegawai)->delete();

        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');
    }
}
