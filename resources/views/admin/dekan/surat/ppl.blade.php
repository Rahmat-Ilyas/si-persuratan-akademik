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
									$instansi = $item->where('surat_id', $surat->id)->where('tipe', 'instansi')->first();
									$waktu = $item->where('surat_id', $surat->id)->where('tipe', 'waktu pelaksana')->first();
									$get_nama = $item->where('surat_id', $surat->id)->where('tipe', 'nama')->all();
									$get_nim = $item->where('surat_id', $surat->id)->where('tipe', 'nim')->all();

									foreach ($get_nama as $nma) { $nama[] = $nma; }
									foreach ($get_nim as $n) { $nim[] = $n; }
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
											<div class="col-md-1">
												Nomor <br>
												Sifat <br>
												Hal <br>
											</div>
											<div class="col-md-7">
												: <b>{{ $surat->no_surat }}</b>/Un.06/FST/PP.{{ date('d/m/y', strtotime($surat->tggl_surat)) }}<br>
												: Biasa<br>
												: <b>Praktek Kerja Lapangan</b><br>
											</div>
											<div class="col-md-3">
												Makassar, {{ date('d F Y', strtotime($surat->tggl_surat)) }}
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
														Kami sampaikan bahwa untuk memenuhi kurikulum yang berlaku pada Fakultas Sains & Teknologi UIN Alauddin Makassar, diwajibkan seriap mahasiswa untuk melakukan Praktek Pengalaman Lapangan. 
													</p>
													<p>
														Sehubungan dengan hal tersebut diatas kami mohon kiranya mahasiswa Jurusan {{ $mhs->jurusan }} Fakultas Sains & Teknologi UIN Alauddin Makassar, dapat diterima untuk melakukan Praktek Pengalaman Lapangan pada Perusahaan/Instansi yang Bapak/Ibu Pimpin. Adapun nama-nama mahasiswa di bawah ini :
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
															@for($i = 0; $i < count($nama); $i++)
															<tr>
																<td>{{ $i+1 }}</td>
																<td>{{ $nama[$i]->item_surat }}</td>
																<td>{{ $nim[$i]->item_surat }}</td>
																@if ($i < 1)
																<td rowspan="10">{{ $mhs->jurusan }}</td>
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
														Demikian permohonan kami, atas perhatian dan kerja samanya diucapkan terima kasih <br>
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