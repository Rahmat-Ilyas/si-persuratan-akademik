<?php

namespace App\Http\Controllers;

use App\Model\Surat;
use App\Model\Persyaratan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function home() {
		return view('mahasiswa.home');
	}
	public function url($page) {
		if ($page == "pengajuan") {
			$id = Auth::user()->id;
			$surat = Surat::where('mhs_id', $id)->get();
			return view('mahasiswa.pengajuan', compact('surat'));	
		}
		return view('mahasiswa.'.$page);
	}

	public function persyaratan($jenis) {
		return view('mahasiswa.persyaratan.'.$jenis, compact('jenis'));
	}

	public function store(Request $request) {
		foreach ($request->persyaratan as $persyaratan) {
			if ($persyaratan->getSize() == false) {
				return redirect('persyaratan/'.$request->tipe)->with('msg', 'Ukuran file terlalu besar');
			}
		}
		$surat = new Surat;
		$surat->mhs_id = $request->mhs_id;
		$surat->jenis_surat = $request->jenis_surat;
		$surat->status = "Dalam Proses";
		$surat->save();

		foreach ($request->file('persyaratan') as $i => $persyaratan) {
			$file_berkas = "file_berkas_".sprintf('%04s', $surat->id)."_".$i.".png";
			$persyaratan->move('storage/berkas', $file_berkas);
			$syarat = new Persyaratan;
			$syarat->surat_id = $surat->id;
			$syarat->nama_syarat = $request->nama_syarat[$i];
			$syarat->file_berkas = $file_berkas;
			$syarat->save();
		}

		return redirect('pengajuan')->with('msg', 'Surat berhail diajukan, tunggu pemberitahuan selanjutnya');
	}
}
