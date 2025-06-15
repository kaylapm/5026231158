<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
	public function indexkaryawan()
		{
			// mengambil data dari table monitor
            $karyawans = DB::table('karyawan')-> paginate(10);

			// mengirim data monitor ke view index
			return view('indexkaryawan',['karyawans' => $karyawans]);

		}
	public function tambahkaryawan()
		{
			// memanggil view tambah
			return view('tambahkaryawan');
		}
// method untuk insert data ke table monitor
    public function storekaryawan(Request $request)
    {
        // insert data ke table monitor
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman monitor
        return redirect('/karyawan');

    }

    public function editkaryawan($kodepegawai) //ada primary key
    {
        // mengambil data monitor berdasarkan id yang dipilih
        $karyawans = DB::table('karyawan')
        ->where('kodepegawai',$kodepegawai) //khusus operator =, kalau mau pakai selain itu harus sebutin operator di parameter kedua nya
        ->get();
        // passing data monitor yang didapat ke view edit.blade.php
        return view('editkaryawan',['karyawans' => $karyawans]);

    }
    // update data monitor
    public function updatekaryawan(Request $request)
    {
        // update data monitor
        DB::table('karyawan')->where('kodepegawai',$request->ID)->update([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman monitor
        return redirect('/karyawan');
    }
    // method untuk hapus data monitor
    public function hapuskaryawan($kodepegawai)
    {
        // menghapus data monitor berdasarkan id yang dipilih
        DB::table('karyawan')->where('kodepegawai',$kodepegawai)->delete();

        // alihkan halaman ke halaman monitor
        return redirect('/karyawan');
    }
}
