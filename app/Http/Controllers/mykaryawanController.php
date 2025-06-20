<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mykaryawanController extends Controller
{
    public function indexmykaryawan()
    {
        $mykaryawans = DB::table('mykaryawan')-> get();
			// mengirim data karyawan ke view index
		return view('indexmykaryawan',['mykaryawans' => $mykaryawans]);
    }

    public function editmykaryawan($kodepegawai) //ada primary key
    {
        $mykaryawans = DB::table('mykaryawan')
        ->where('kodepegawai',$kodepegawai)
        ->get();
        return view('editmykaryawan',['mykaryawans' => $mykaryawans]);

    }
    // update data pegawai
    public function easupdate(Request $request)
    {
        // update data pegawai
        DB::table('mykaryawan')->where('kodepegawai',$request->kodepegawai)->update([
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/eas');
    }

    public function viewmykaryawan($kodepegawai)
    {
        $mykaryawans = DB::table('mykaryawan')
        ->where('kodepegawai',$kodepegawai)
        ->first();
        return view('viewmykaryawan',['mykaryawans' => $mykaryawans]);
    }
}
