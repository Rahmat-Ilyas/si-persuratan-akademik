@extends('admin.dekan.template')

@section('konten')
<div class="row">
	<div class="col-lg-12">
		<div class="card-box">
			<div class="text-center">
				<h2>Praktek Pengalaman Lapangan</h2>
			</div>
			<hr>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="col-lg-10"> 
								<form action="{{ url('/admin/dekan/ttd/store') }}" method="POST">
									{{ csrf_field() }}
									@php
									$mhs = $mahasiswa->where('id', $surat->mhs_id)->first();
									$nama_wali = $item->where('surat_id', $surat->id)->where('tipe', 'nama wali')->first();
									$nip = $item->where('surat_id', $surat->id)->where('tipe', 'nip')->first();
									$jabatan = $item->where('surat_id', $surat->id)->where('tipe', 'jabatan')->first();
									$instansi = $item->where('surat_id', $surat->id)->where('tipe', 'instansi')->first();
									$keterangan = $item->where('surat_id', $surat->id)->where('tipe', 'keterangan')->first();
									@endphp

									<div class="container p-20" style="border: 1px solid #ccc;">
										<div class="row">
											<div class="col-md-2 p-20" style="margin-left: 10px;">
												<img src="{{ asset('assets_/images/logo_uin.png') }}" class="img-responsive" style="width: 80px;">
											</div>
											<div class="text-center col-md-10" style="margin-left: -30px;">
												<p>
													<span style="font-size: 18px; font-weight: bold;">
														KEMENTERIAN AGAMA<br>
														UNIVERSITAS ISLAM NEGERI ALAUDDIN MAKASSAR<br>
														FAKULTAS SAINS DAN TEKNOLOGI<br>	
													</span>
													<span style="font-size: 13px;">
														Kampus I: Jl. Sultan Alauddin No.63 Makassar | (0411) 868720, Fax. (0411) 864923 <br>
														Kampus II: Jl. H.M. Yasin Limpo No.36, Romangpolong-Gowa | 1500363, (0411) 841879, Fax. (0411) 8221400
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
												<b>Nomor: {{ $surat->no_surat }}/Un.06/FST/PP.{{ date('d/m/y', strtotime($surat->tggl_surat)) }}</b><br>
											</div>
										</div>
										<div class="row">
											<div class="col-md-1"></div>
											<div class="col-md-10" style="padding-left: 20px;">
												<div class="row m-t-20">
													<div class="col-md-12">Yang  bertanda tangan di bawah ini :</div>
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
														Demikian Surat Pernyataan ini dibuat dengan sesungguhnya, dan apabila dikemudian hari Surat Pernyataan ini tidak benar yang mengakibatkan <b>kerugian terhadap Negara Republik Indonesia,</b> maka saya bersedia menanggung kerugian tersebut.
													</p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-1"></div>
											<div class="col-md-5">
												<div class="container text-center" style="margin-top: 20px;">
													<div id="signature-padi" class="m-signature-pad">
														<div class="m-signature-pad--body">
															<canvas style="width: 200px; height: 140px; border:1.5px dashed #ccc;"></canvas>
															<div style="margin-top: -80px;">
																<span style="color: #ccc;"><i>TANDA TANGAN DISINI</i></span>
															</div>
															<div class="m-signature-pad--footer" style="margin-top: 60px;">
																<a href="javascript:;" id="clear" role="button" class="button clear" data-action="clear">Bersihkan</a> | 
																<a href="javascript:;" id="save" class="button save" data-action="">Terapkan</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6" style="padding-left: 50px;">
												<p>Wassalama</p>
												<p>
													Dekan <br>
													Tanggal {{ date('d F Y', strtotime($surat->tggl_surat)) }}
												</p>
												<p style="margin-top: 70px;">
													<b>Prof. Dr. Muhammad Halifah Mustami, M.Pd</b><br>
													NIP: 19710412 200003 1 001
												</p>
												<div style="width: 150px; height: 100px; margin-top: -110px; margin-left: -80px;">
													@php
													$img = $paraf->where('surat_id', $surat->id)->first();
													@endphp
													<img src="{{ asset('storage/paraf/'.$img->file_paraf) }}" alt="" id="">
												</div>
												<div style="width: 200px; height: 140px; margin-top: -150px; margin-left: -10px;">
													<img src="" alt="" id="set_ttd">
												</div>
											</div>
										</div>
									</div>
									<input type="hidden" name="id" value="{{ $surat->id }}">
									<input type="hidden" name="ttd" id="ttd">
									<button type="submit" id="tombol" class="btn btn-success btn-lg m-t-20">Submit</button>
								</form>
							</div> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section("javascript")
<script src="{{ asset('ttd/js/signature_pad.js') }}"></script>
<script src="{{ asset('ttd/js/app.js') }}"></script>
<script>
	jQuery(document).ready(function($) {
		$("#save").click(function(){
			$('#ttd').val(signaturePad.toDataURL());
			$('#set_ttd').attr('src', signaturePad.toDataURL());
		});

		$("#clear").click(function(){
			$('#ttd').val('');
			$('#set_ttd').removeAttr('src', signaturePad.toDataURL());
			$('#set_ttd').attr('src', '');
		});
	});
</script>
@endsection