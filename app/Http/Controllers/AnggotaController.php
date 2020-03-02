<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Anggota;
 
use App\Exports\AnggotaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class AnggotaController extends Controller
{
    public function index(){
        $anggota = DB::table('anggota')->paginate(10);

        return view('index', ['anggota' => $anggota]);
    }

    public function export_excel()
	{
        // return Excel::download(new AnggotaExport, 'anggota.xlsx');
        return (new AnggotaExport)->download('anggota.xlsx');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$anggota = DB::table('anggota')
        ->where('nama','like',"%".$cari."%")
        ->orWhere('nama_panggilan','like',"%".$cari."%")
        ->orWhere('jenis_kelamin','like',"%".$cari."%")
        ->orWhere('warga_negara','like',"%".$cari."%")
        ->orWhere('pekerjaan','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('index',['anggota' => $anggota]);
 
	}

    public function tambah(){
        return view('tambah');
    }

    public function store(Request $request)
{

	DB::table('anggota')->insert([
        'nama' => $request->nama,
        'nama_panggilan' => $request->nama_panggilan,
        'tempat_lahir' => $request->tempat_lahir,
        'tanggal_lahir' => $request->tanggal_lahir,
        'jenis_kelamin' => $request->jenis_kelamin,
        'warga_negara' => $request->warga_negara,
        'pekerjaan' => $request->pekerjaan,
        'alamat' => $request->alamat,
        'tanggal_baptis' => $request->tanggal_baptis,
        'baptis_oleh' => $request->baptis_oleh,
        'keterangan' => $request->keterangan,
        'foto' => $request->foto

	]);
	return redirect('/anggota');
 
}

    public function edit($id)
    {
        $anggota = DB::table('anggota')->where('id', $id)->get();
        return view('edit', ['anggota' => $anggota]);
    }

    // update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('anggota')->where('id',$request->id)->update([
        'nama' => $request->nama,
        'nama_panggilan' => $request->nama_panggilan,
        'tempat_lahir' => $request->tempat_lahir,
        'tanggal_lahir' => $request->tanggal_lahir,
        'jenis_kelamin' => $request->jenis_kelamin,
        'warga_negara' => $request->warga_negara,
        'pekerjaan' => $request->pekerjaan,
        'alamat' => $request->alamat,
        'tanggal_baptis' => $request->tanggal_baptis,
        'baptis_oleh' => $request->baptis_oleh,
        'keterangan' => $request->keterangan,
        'foto' => $request->foto
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/anggota');
}

public function detail($id)
{
    $anggota = DB::table('anggota')->where('id', $id)->get();
    return view('detail', ['anggota' => $anggota]);
}

// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('anggota')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/anggota');
}


}