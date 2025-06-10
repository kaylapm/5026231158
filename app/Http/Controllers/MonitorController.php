<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MonitorController extends Controller
{
	public function indexmonitor()
		{
			// mengambil data dari table monitor
			//$monitor = DB::table('monitor')->get();
            $monitors = DB::table('monitor')-> paginate(10);

			// mengirim data monitor ke view index
			return view('indexmonitor',['monitors' => $monitors]);

		}
	public function tambahmonitor()
		{
			// memanggil view tambah
			return view('tambahmonitor');
		}
// method untuk insert data ke table monitor
    public function storemonitor(Request $request)
    {
        // insert data ke table monitor
        DB::table('monitor')->insert([
            'merkmonitor' => $request->merkmonitor,
            'hargamonitor' => $request->hargamonitor,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman monitor
        return redirect('/monitor');

    }

    public function editmonitor($ID) //ada primary key
    {
        // mengambil data monitor berdasarkan id yang dipilih
        $monitors = DB::table('monitor')
        ->where('ID',$ID) //khusus operator =, kalau mau pakai selain itu harus sebutin operator di parameter kedua nya
        ->get();
        // passing data monitor yang didapat ke view edit.blade.php
        return view('editmonitor',['monitors' => $monitors]);

    }
    // update data monitor
    public function updatemonitor(Request $request)
    {
        // update data monitor
        DB::table('monitor')->where('ID',$request->ID)->update([
            'merkmonitor' => $request->merkmonitor,
            'hargamonitor' => $request->hargamonitor,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman monitor
        return redirect('/monitor');
    }
    // method untuk hapus data monitor
    public function hapusmonitor($ID)
    {
        // menghapus data monitor berdasarkan id yang dipilih
        DB::table('monitor')->where('ID',$ID)->delete();

        // alihkan halaman ke halaman monitor
        return redirect('/monitor');
    }
    public function carimonitor(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table monitor sesuai pencarian data
        $monitors = DB::table('monitor')
        ->where('merkmonitor','like',"%".$cari."%")
        ->paginate();

            // mengirim data monitor ke view index
        return view('indexmonitor',['monitors' => $monitors]);
    }
}
