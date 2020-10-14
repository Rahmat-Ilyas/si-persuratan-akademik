<!-- Modal ppl-->
@foreach($surat->all() as $i => $dta)
@if ($dta->jenis_surat == "Praktek Pengalaman Lapangan")
@php
$mhs = $mahasiswa->where('id', $dta->mhs_id)->first();
$instansi = $item->where('surat_id', $dta->id)->where('tipe', 'instansi')->first();
$waktu = $item->where('surat_id', $dta->id)->where('tipe', 'waktu pelaksana')->first();
$get_nama = $item->where('surat_id', $dta->id)->where('tipe', 'nama')->all();
$get_nim = $item->where('surat_id', $dta->id)->where('tipe', 'nim')->all();

foreach ($get_nama as $nma) { $nama[] = $nma; }
foreach ($get_nim as $n) { $nim[] = $n; }
// $instansi = $items->where('tipe', 'instansi')->first();
@endphp
<div id="accordion-modal" class="modal fade show{{ $dta->id }}" tabindex="-1" role="dialog"
	aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><br>
			<div class="modal-body">
				<div class="container p-20" style="border: 1px solid #ccc;">
					<div class="row">
						<div class="col-md-2 p-20" style="margin-left: 20px;">
							<img src="{{ asset('assets_/images/logo_uin.png') }}" class="img-responsive"
								style="width: 80px;">
						</div>
						<div class="text-center col-md-10" style="margin-left: -50px;">
							<p>
								<span style="font-size: 18px; font-weight: bold;">
									KEMENTERIAN AGAMA<br>
									UNIVERSITAS ISLAM NEGERI ALAUDDIN MAKASSAR<br>
									FAKULTAS SAINS DAN TEKNOLOGI<br>
								</span>
								<span style="font-size: 13px;">
									Kampus I: Jl. Sultan Alauddin No.63 Makassar | (0411) 868720, Fax. (0411) 864923
									<br>
									Kampus II: Jl. H.M. Yasin Limpo No.36, Romangpolong-Gowa | 1500363, (0411) 841879,
									Fax. (0411) 8221400
								</span>
							</p>
						</div>
					</div>
					<div style="border-top: 2px solid"><br></div>
					<div class="row">
						<div class="col-md-1">
							Nomor <br>
							Sifat <br>
							Hal <br>
						</div>
						<div class="col-md-7">
							:
							<b>{{ $dta->no_surat }}</b>/Un.06/FST/PP.{{ date('d/m/y', strtotime($dta->tggl_surat)) }}<br>
							: Biasa<br>
							: <b>Praktek Kerja Lapangan</b><br>
						</div>
						<div class="col-md-4">
							Makassar, {{ date('d F Y', strtotime($dta->tggl_surat)) }}
						</div>
					</div>
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10" style="padding-left: 20px;">
							<p class="m-t-20">
								Kepada Yth. <br>
								Pemimpin <b>{{ $instansi->item_surat }}</b> <br>
								Di- <br>
								&ensp;&ensp;&ensp;&ensp;&ensp;Tempat <br><br>
							</p>
							<p>Assalamu Alaikum Wr. Wb</p>
							<p>Dengan Hormat,</p>
							<div class="text-justify">
								<p>
									Kami sampaikan bahwa untuk memenuhi kurikulum yang berlaku pada Fakultas Sains &
									Teknologi UIN Alauddin Makassar, diwajibkan seriap mahasiswa untuk melakukan Praktek
									Pengalaman Lapangan.
								</p>
								<p>
									Sehubungan dengan hal tersebut diatas kami mohon kiranya mahasiswa Jurusan
									{{ $mhs->jurusan }} Fakultas Sains & Teknologi UIN Alauddin Makassar, dapat diterima
									untuk melakukan Praktek Pengalaman Lapangan pada Perusahaan/Instansi yang Bapak/Ibu
									Pimpin. Adapun nama-nama mahasiswa di bawah ini :
								</p>

								<table class="table table-bordered m-0 p-0" style="font-size: 14px;">
									<thead class="">
										<tr>
											<th>NO</th>
											<th>NAMA</th>
											<th>NIM</th>
											<th>JURUSAN</th>
											<th>WAKTU PELAKSANAAN</th>
										</tr>
									</thead>
									<tbody class="item">
										@for($i = 0; $i < count($nama); $i++) <tr>
											<td>{{ $i+1 }}</td>
											<td>{{ $nama[$i]->item_surat }}</td>
											<td>{{ $nim[$i]->item_surat }}</td>
											@if ($i < 1) <td rowspan="10">{{ $mhs->jurusan }}</td>
												<td rowspan="10">{{ $waktu->item_surat }}</td>
												@endif
												</tr>
												@endfor
												@php
												unset($nama);
												unset($nim);
												@endphp
									</tbody>
								</table><br>
								<p>
									Demikian permohonan kami, atas perhatian dan kerja samanya diucapkan terima kasih
									<br>
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6"></div>
						<div class="col-md-6" style="padding-left: 50px;">
							<p>Wassalama</p>
							<p>
								Dekan <br>
								Tanggal {{ date('d F Y', strtotime($dta->tggl_surat)) }}
							</p>
							<p style="margin-top: 50px;">
								<b>Prof. Dr. Muhammad Halifah Mustami, M.Pd</b><br>
								NIP: 19710412 200003 1 001
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@elseif($dta->jenis_surat == "Surat Aktif Kuliah")
@php
$mhs = $mahasiswa->where('id', $dta->mhs_id)->first();
$nama_wali = $item->where('surat_id', $dta->id)->where('tipe', 'nama wali')->first();
$nip = $item->where('surat_id', $dta->id)->where('tipe', 'nip')->first();
$jabatan = $item->where('surat_id', $dta->id)->where('tipe', 'jabatan')->first();
$instansi = $item->where('surat_id', $dta->id)->where('tipe', 'instansi')->first();
$keterangan = $item->where('surat_id', $dta->id)->where('tipe', 'keterangan')->first();
@endphp
<div id="accordion-modal" class="modal fade show{{ $dta->id }}" tabindex="-1" role="dialog"
	aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><br>
			<div class="modal-body">
				<div class="container p-20" style="border: 1px solid #ccc;">
					<div class="row">
						<div class="col-md-2 p-20" style="margin-left: 20px;">
							<img src="{{ asset('assets_/images/logo_uin.png') }}" class="img-responsive"
								style="width: 80px;">
						</div>
						<div class="text-center col-md-10" style="margin-left: -50px;">
							<p>
								<span style="font-size: 18px; font-weight: bold;">
									KEMENTERIAN AGAMA<br>
									UNIVERSITAS ISLAM NEGERI ALAUDDIN MAKASSAR<br>
									FAKULTAS SAINS DAN TEKNOLOGI<br>
								</span>
								<span style="font-size: 13px;">
									Kampus I: Jl. Sultan Alauddin No.63 Makassar | (0411) 868720, Fax. (0411) 864923
									<br>
									Kampus II: Jl. H.M. Yasin Limpo No.36, Romangpolong-Gowa | 1500363, (0411) 841879,
									Fax. (0411) 8221400
								</span>
							</p>
						</div>
					</div>
					<div style="border-top: 2px solid"><br></div>
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-2">
							<b>LAMPIRAN</b> <br><br>
							<b>NOMOR</b> <br>
							<b>NOMOR</b> <br>
							<b>TANGGAL</b> <br>
						</div>
						<div class="col-md-9">
							: <b>SURAT EDARAN BERSAMA MENTERI KEUANGAN DAN KEPALA <br>
								&ensp;&nbsp;ADMINISTRASI KEUANGAN NEGARA</b><br>
							: <b>SE.1.38/DJ/1.0/80 (NO.SE/117/80)</b><br>
							: <b>19/SE/1980</b><br>
							: <b>07 JULI 1980</b><br><br>
						</div>
						<div class="col-md-12" style="text-align: center;">
							<b style="border-bottom: 1.5px solid;">SURAT PERNYATAAN MASIH AKTIF KULIAH</b><br>
							<b>Nomor:
								{{ $dta->no_surat }}/Un.06/FST/PP.{{ date('d/m/y', strtotime($dta->tggl_surat)) }}</b><br>
						</div>
					</div>
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10" style="padding-left: 20px;">
							<div class="row m-t-20">
								<div class="col-md-12">Yang bertanda tangan di bawah ini :</div>
								<div class="col-md-1"></div>
								<div class="col-md-3">1. Nama</div>
								<div class="col-md-8">: Prof. Dr. Muhammad Halifah Mustami, M.Pd</div>
								<div class="col-md-1"></div>
								<div class="col-md-3">2. NIP</div>
								<div class="col-md-8">: 19710412 200003 1 001</div>
								<div class="col-md-1"></div>
								<div class="col-md-3">3. Pangkat</div>
								<div class="col-md-8">: Pembina Utama ( IV/c )</div>
								<div class="col-md-1"></div>
								<div class="col-md-3">4. Jabatab</div>
								<div class="col-md-8">: Dekan</div>
								<div class="col-md-1"></div>
								<div class="col-md-3">5. Fakultas</div>
								<div class="col-md-8">: Sains & Teknologi UIN Alauddin Makassar</div>

								<div class="col-md-12">Menyatakan dengan sesungguhnya :</div>
								<div class="col-md-1"></div>
								<div class="col-md-3">6. Nama</div>
								<div class="col-md-8">: {{ $mhs->nama }}</div>

								<div class="col-md-12">Adalah benar mahasiswa :</div>
								<div class="col-md-1"></div>
								<div class="col-md-3">7. Pada Fakultas</div>
								<div class="col-md-8">: Sains & Teknologi UIN Alauddin Makassar</div>
								<div class="col-md-1"></div>
								<div class="col-md-3">8. Jurusan</div>
								<div class="col-md-8">: {{ $mhs->jurusan }}</div>
								<div class="col-md-1"></div>
								<div class="col-md-3">9. Nim</div>
								<div class="col-md-8">: {{ $mhs->nim }}</div>
								<div class="col-md-1"></div>
								<div class="col-md-3 p-0"> 10. Pada Tahun Akademik</div>
								<div class="col-md-8">: {{ date('Y') }}</div>

								<div class="col-md-12">Dan bahwa wali anak tersebut :</div>
								<div class="col-md-1"></div>
								<div class="col-md-3 p-0">11. Nama</div>
								<div class="col-md-8 form-inline">: {{ $nama_wali->item_surat }}</div>
								<div class="col-md-1"></div>
								<div class="col-md-3 p-0">12. Nip/BN</div>
								<div class="col-md-8 form-inline">: {{ $nip->item_surat }}</div>
								<div class="col-md-1"></div>
								<div class="col-md-3 p-0">13. Jabatan/Golongan</div>
								<div class="col-md-8 form-inline">: {{ $jabatan->item_surat }}</div>
								<div class="col-md-1"></div>
								<div class="col-md-3 p-0">14. Instansi/Pensiun</div>
								<div class="col-md-8 form-inline">: {{ $instansi->item_surat }}</div>
								<div class="col-md-1"></div>
								<div class="col-md-3 p-0">15. Keterangan</div>
								<div class="col-md-8 form-inline">: {{ $keterangan->item_surat }}</div>
							</div>
							<div class="text-justify m-t-20">
								<p>
									Demikian Surat Pernyataan ini dibuat dengan sesungguhnya, dan apabila dikemudian
									hari Surat Pernyataan ini tidak benar yang mengakibatkan <b>kerugian terhadap Negara
										Republik Indonesia,</b> maka saya bersedia menanggung kerugian tersebut.
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6"></div>
						<div class="col-md-6" style="padding-left: 50px;">
							<p>Wassalama</p>
							<p>
								Dekan <br>
								Tanggal {{ date('d F Y', strtotime($dta->tggl_surat)) }}
							</p>
							<p style="margin-top: 50px;">
								<b>Prof. Dr. Muhammad Halifah Mustami, M.Pd</b><br>
								NIP: 19710412 200003 1 001
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endif
@endforeach