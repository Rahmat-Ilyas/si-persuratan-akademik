<?php

namespace App\Http\Controllers;

use App\Model\Item;
use App\Model\Admin;
use App\Model\Surat;
use App\Model\Mhswa;
use App\Model\Paraf;
use App\Model\Proses;
use App\Model\Tandatgn;
use App\Model\NomorSurat;
use App\Model\Persyaratan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use PDF;

class AdminController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:admin');
	}

	public function home() {
		$role = Auth::user()->role;
		if ($role == 1) return view('admin.pfu.home');
		else if ($role == 2) return view('admin.kasubag.home');
		else if ($role == 3) return view('admin.kabag.home');
		else if ($role == 4) return view('admin.wd.home');
		else if ($role == 5) return view('admin.dekan.home');
	}

	// kasubag
	public function permintaansurat() {
		// SELECT * FROM `proses` INNER JOIN surats ON proses.surat_id = surats.id
		// $surat = DB::table('proses')->rightjoin('surats', 'proses.surat_id', '=', 'surats.id')->where('status', '=', 'Dalam Proses')->whereNull('proses.proses1')->get();
		$surat = Surat::where('status', 'Dalam Proses')->where('proses', 0)->get();
		$syarat = Persyaratan::all();
		$mahasiswa = Mhswa::all();
		return view('admin.kasubag.permintaansurat', compact('surat', 'mahasiswa', 'syarat'));
	}

	public function tolak(Request $request) {
		$surat = Surat::where('id', $request->id)->first();
		$surat->status = 'Ditolak';
		$surat->keterangan = $request->alasan;
		$surat->save();

		return redirect('admin/kasubag/permintaansurat')->with('msg', 'Surat telah ditolak');;
	}

	public function setuju($id) {
		$surat = Surat::where('id', $id)->first();
		$surat->proses = 1;
		$surat->save();

		return redirect('admin/kasubag/permintaansurat')->with('msg', 'Surat berhail disetujui');;
	}

	public function riwayat($status) {
		if ($status == 'diterima') {
			$surat = Surat::where('proses', '>=', 1)->get();
			$status = 'Diterima';
		}
		else if ($status = 'ditolak') {
			$surat = Surat::where('status', 'Ditolak')->get();
			$status = 'Ditolak';
		}
		$mahasiswa = Mhswa::all();
		return view('admin.kasubag.riwayat', compact('surat', 'mahasiswa', 'status'));
	}

	// kabag
	public function permintaan() {
		$surat = Surat::where('status', 'Dalam Proses')->where('proses', 1)->get();
		$syarat = Persyaratan::all();
		$mahasiswa = Mhswa::all();
		return view('admin.kabag.permintaan', compact('surat', 'mahasiswa', 'syarat'));
	}

	public function verif($id) {
		$surat = Surat::where('id', $id)->first();
		$surat->proses = 2;
		$surat->save();

		return redirect('admin/kabag/permintaan')->with('msg', 'Surat berhail diverifikasi');;
	}

	public function riwayatverif() {
		$surat = Surat::where('proses', '>=', 2)->get();
		$mahasiswa = Mhswa::all();
		return view('admin.kabag.riwayatverif', compact('surat', 'mahasiswa'));
	}

	// pfu
	public function surat() {
		$surat = Surat::where('status', 'Dalam Proses')->where('proses', '<', 3)->get();
		$mahasiswa = Mhswa::all();
		$syarat = Persyaratan::all();
		return view('admin.pfu.buatsurat', compact('surat', 'mahasiswa', 'syarat'));
	}

	public function buatsurat($page, $id) {
		$surat = Surat::where('id', $id)->first();
		$syarat = Persyaratan::where('surat_id', $id)->get();
		$no_surat = NomorSurat::where('id', 1)->first()->no_surat;
		$mhs_id = $surat->mhs_id;
		$mahasiswa = Mhswa::where('id', $mhs_id)->first();
		if ($page == "ppl") return view('admin.pfu.surat.ppl', compact('mahasiswa', 'syarat', 'no_surat', 'id'));
		else if ($page == "sak") return view('admin.pfu.surat.sak', compact('mahasiswa', 'syarat', 'no_surat', 'id'));
	}

	public function storeitem(Request $request) {
		if ($request->tipe == "ppl") {		
			$item = new Item;
			$item->surat_id   = $request->surat_id;
			$item->item_surat = $request->instansi;
			$item->tipe       = 'instansi';
			$item->save();

			$item = new Item;
			$item->surat_id   = $request->surat_id;
			$item->item_surat = $request->waktu_pelaksana;
			$item->tipe       = 'waktu pelaksana';
			$item->save();

			foreach ($request->nama as $nama) {
				$item = new Item;
				$item->surat_id   = $request->surat_id;
				$item->item_surat = $nama;
				$item->tipe       = 'nama';
				$item->save();
			}

			foreach ($request->nim as $nim) {
				$item = new Item;
				$item->surat_id   = $request->surat_id;
				$item->item_surat = $nim;
				$item->tipe       = 'nim';
				$item->save();
			}
		}
		else if ($request->tipe == "sak") {
			$tipe = ["nama wali", "nip", "jabatan", "instansi", "keterangan"];
			$data = [$request->nama_wali, $request->nip, $request->jabatan, $request->instansi, $request->keterangan];
			foreach ($data as $i => $dta) {
				$item = new Item;
				$item->surat_id   = $request->surat_id;
				$item->item_surat = $dta;
				$item->tipe       = $tipe[$i];
				$item->save();
			}
		}

		$surat = Surat::where('id', $request->surat_id)->first();
		$surat->no_surat = $request->no_surat;
		$surat->proses = 3;
		$surat->tggl_surat = $request->tggl_surat;
		$surat->save();

		$no_surat = NomorSurat::where('id', 1)->first();
		$no_surat->no_surat = $request->no_surat+1;
		$no_surat->save();

		return redirect('admin/pfu/buatsurat')->with('msg', 'Surat berhail dibuat');
	}

	public function suratditolak() {
		$surat = Surat::where('status', 'Ditolak')->get();
		$mahasiswa = Mhswa::all();
		return view('admin.pfu.suratditolak', compact('surat', 'mahasiswa'));
	}

	public function suratdibuat() {
		$surat = Surat::where('proses', '>=' ,3)->where('proses', '<=' ,4)->get();
		$mahasiswa = Mhswa::all();
		$item = Item::all(); 
		return view('admin.pfu.suratdibuat', compact('surat', 'mahasiswa', 'item'));
	}

	public function arsipsurat() {
		$surat = Surat::where('status', 'Sudah Selesai')->where('proses' ,5)->get();
		$mahasiswa = Mhswa::all();
		$item = Item::all(); 
		$paraf = Paraf::all(); 
		$tandatgn = Tandatgn::all();
		return view('admin.pfu.arsipsurat', compact('surat', 'mahasiswa', 'item', 'paraf', 'tandatgn'));
	}

	public function suratselesai() {
		$surat = Surat::where('status', 'Dalam Proses')->where('proses' ,5)->get();
		$mahasiswa = Mhswa::all();
		$item = Item::all(); 
		$paraf = Paraf::all(); 
		$tandatgn = Tandatgn::all();
		return view('admin.pfu.suratselesai', compact('surat', 'mahasiswa', 'item', 'paraf', 'tandatgn'));
	}

	public function konfirmasi($id) {
		$surat = Surat::where('id' ,$id)->first();
		$surat->status = "Sudah Selesai";
		$surat->save();

		return redirect('admin/pfu/suratselesai')->with('msg', 'Surat telah selesai');
	}

	public function cetak($id)
	{
		$surat = Surat::where('id' ,$id)->first();
		$item = Item::where('surat_id', $id)->get(); 
		$paraf = Paraf::where('surat_id', $id)->first(); 
		$tandatgn = Tandatgn::where('surat_id', $id)->first();
		$mahasiswa = Mhswa::where('id', $surat->mhs_id)->first();
		// $data = ['surat' => $surat, 'mahasiswa' => $mahasiswa, 'item' => $item, 'paraf' => $paraf, 'tandatgn' => $tandatgn]; 
  		// $pdf = PDF::loadView('admin.pfu.surat.saveppl', $data);
  		// return $pdf->download();
		return view('admin.pfu.surat.saveppl', compact('surat', 'item', 'paraf', 'tandatgn', 'mahasiswa'));
	}

	// wd
	public function permintaan_() {
		$surat = Surat::where('proses', 3)->get();
		$mahasiswa = Mhswa::all();
		$item = Item::all(); 
		return view('admin.wd.permintaan', compact('surat', 'mahasiswa', 'item'));
	}

	public function parafsurat($page, $id) {
		$surat = Surat::where('id', $id)->first();
		$mhs_id = $surat->mhs_id;
		$mahasiswa = Mhswa::where('id', $mhs_id)->first();
		$item = Item::all(); 

		if ($page == "ppl") return view('admin.wd.surat.ppl', compact('surat', 'mahasiswa', 'item', 'id'));
		else if ($page == "sak") return view('admin.wd.surat.sak', compact('surat', 'mahasiswa', 'item', 'id'));
	}

	public function storeparaf(Request $request) {
		$this->validate($request, [
			'paraf' => 'required',
		]);

		$get_paraf = explode(',', $request->paraf);
		$file = base64_decode($get_paraf[1]);
		$nama_file = "paraf_surat_".$request->id.".png";
		Storage::put("public/paraf/".$nama_file, $file);

		$paraf = new Paraf;
		$paraf->surat_id = $request->id;
		$paraf->file_paraf = $nama_file;
		$paraf->save();

		$surat = Surat::where('id', $request->id)->first();
		$surat->proses = 4;
		$surat->save();

		return redirect('admin/wd/permintaan')->with('msg', 'Surat berhail diparaf');
	}

	public function suratdiparaf() {
		$surat = Surat::where('proses', '>=', 4)->get();
		$mahasiswa = Mhswa::all();
		$item = Item::all(); 
		$paraf = Paraf::all(); 
		return view('admin.wd.suratdiparaf', compact('surat', 'mahasiswa', 'item', 'paraf'));
	}

	// dekan
	public function ttdsurat() {
		$surat = Surat::where('proses', 4)->get();
		$mahasiswa = Mhswa::all();
		$item = Item::all(); 
		$paraf = Paraf::all(); 
		return view('admin.dekan.permintaan', compact('surat', 'mahasiswa', 'item', 'paraf'));
	}

	public function ttd($page, $id) {
		$surat = Surat::where('id', $id)->first();
		$mhs_id = $surat->mhs_id;
		$mahasiswa = Mhswa::where('id', $mhs_id)->first();
		$item = Item::all(); 
		$paraf = Paraf::all();

		if ($page == "ppl") return view('admin.dekan.surat.ppl', compact('surat', 'mahasiswa', 'item', 'paraf', 'id'));
		else if ($page == "sak") return view('admin.dekan.surat.sak', compact('surat', 'mahasiswa', 'item', 'paraf', 'id'));
	}

	public function storettd(Request $request) {
		$this->validate($request, [
			'ttd' => 'required',
		]);

		$get_ttd = explode(',', $request->ttd);
		$file = base64_decode($get_ttd[1]);
		$nama_file = "ttd_surat_".$request->id.".png";
		Storage::put("public/ttd/".$nama_file, $file);

		$ttd = new Tandatgn;
		$ttd->surat_id = $request->id;
		$ttd->file_ttd = $nama_file;
		$ttd->save();

		$surat = Surat::where('id', $request->id)->first();
		$surat->proses = 5;
		$surat->save();

		return redirect('admin/dekan/permintaan')->with('msg', 'Surat berhail di tanda tangani');
	}

	public function suratdittd() {
		$surat = Surat::where('proses', '>=', 5)->get();
		$mahasiswa = Mhswa::all();
		$item = Item::all(); 
		$paraf = Paraf::all(); 
		$tandatgn = Tandatgn::all();
		return view('admin.dekan.suratdittd', compact('surat', 'mahasiswa', 'item', 'paraf', 'tandatgn'));
	}
}
