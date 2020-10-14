@extends('admin.pfu.template')

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
							<div class="col-lg-12"> 
								<div id="sticky">
									<ul class="nav nav-tabs tabs">
										<li class="active tab">
											<a href="#home-2" data-toggle="tab" aria-expanded="false"> 
												<span class="visible-xs"><i class="fa fa-home"></i></span> 
												<span class="hidden-xs">Buat Surat</span> 
											</a> 
										</li> 
										<li class="tab"> 
											<a href="#profile-2" data-toggle="tab" aria-expanded="false"> 
												<span class="visible-xs"><i class="fa fa-user"></i></span> 
												<span class="hidden-xs">Lihat Berkas</span> 
											</a> 
										</li> 
									</ul> 
								</div>
								<div class="tab-content"> 
									<div class="tab-pane active" id="home-2" style="padding: 20px 60px 20px 60px"> 
										<form action="{{ url('/admin/pfu/buatsurat/store') }}" method="POST">
											{{ csrf_field() }}
											<input type="hidden" name="tipe" value="sak">
											<input type="hidden" name="surat_id" value="{{ $id }}">
											<input type="hidden" name="no_surat" value="{{ $no_surat }}">
											<input type="hidden" name="tggl_surat" value="{{ date('Y-m-d') }}">
											<div class="container p-20" style="border: 1px solid #ccc;">
												<div class="row">
													<div class="col-md-2 p-20" style="margin-left: 20px;">
														<img src="{{ asset('assets_/images/logo_uin.png') }}" class="img-responsive" style="width: 80px;">
													</div>
													<div class="text-center col-md-10" style="margin-left: -50px;">
														<p>
															<span style="font-size: 18px; font-weight: bold;">
																KEMENTERIAN AGAMA<br>
																UNIVERSITAS ISLAM NEGERI ALAUDDIN MAKASSAR<br>
																FAKULTAS SAINS DAN TEKNOLOGI<br>	
															</span>
															Kampus I: Jl. Sultan Alauddin No.63 Makassar | (0411) 868720, Fax. (0411) 864923 <br>
															Kampus II: Jl. H.M. Yasin Limpo No.36, Romangpolong-Gowa | 1500363, (0411) 841879, Fax. (0411) 8221400
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
														<b>Nomor: {{ $no_surat }}/Un.06/FST/PP.{{ date('d/m/Y') }}</b><br>
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
															<div class="col-md-8">: {{ $mahasiswa->nama }}</div>

															<div class="col-md-12">Adalah benar mahasiswa :</div>
															<div class="col-md-1"></div>	
															<div class="col-md-3">7. Pada Fakultas</div>			
															<div class="col-md-8">: Sains & Teknologi UIN Alauddin Makassar</div>
															<div class="col-md-1"></div>
															<div class="col-md-3">8. Jurusan</div>			
															<div class="col-md-8">: {{ $mahasiswa->jurusan }}</div>
															<div class="col-md-1"></div>
															<div class="col-md-3">9. Nim</div>		
															<div class="col-md-8">: {{ $mahasiswa->nim }}</div>
															<div class="col-md-1"></div>
															<div class="col-md-3 p-0"> 10. Pada Tahun Akademik</div>	
															<div class="col-md-8">: {{ date('Y') }}</div>

															<div class="col-md-12">Dan bahwa wali anak tersebut :</div>
															<div class="col-md-1"></div>	
															<div class="col-md-3 p-0">11. Nama</div>			
															<div class="col-md-8 form-inline">: 
																<input type="text" name="nama_wali" class="form-control" placeholder="Nama" autocomplete="off" style="border: none;" required>		
															</div>
															<div class="col-md-1"></div>	
															<div class="col-md-3 p-0">12. Nip/BN</div>			
															<div class="col-md-8 form-inline">: 
																<input type="text" name="nip" class="form-control" placeholder="Nip/BN" autocomplete="off" style="border: none;" required>		
															</div>
															<div class="col-md-1"></div>	
															<div class="col-md-3 p-0">13. Jabatan/Golongan</div>
															<div class="col-md-8 form-inline">: 
																<input type="text" name="jabatan" class="form-control" placeholder="Jabatan/Golongan" autocomplete="off" style="border: none;" required>		
															</div>
															<div class="col-md-1"></div>	
															<div class="col-md-3 p-0">14. Instansi/Pensiun</div>
															<div class="col-md-8 form-inline">: 
																<input type="text" name="instansi" class="form-control" placeholder="Instansi" autocomplete="off" style="border: none;" required>		
															</div>
															<div class="col-md-1"></div>	
															<div class="col-md-3 p-0">15. Keterangan</div>			
															<div class="col-md-8 form-inline">: 
																<input type="text" name="keterangan" class="form-control" placeholder="Keterangan" autocomplete="off" style="border: none;" required>		
															</div>
														</div>
														<div class="text-justify m-t-20">
															<p>
																Demikian Surat Pernyataan ini dibuat dengan sesungguhnya, dan apabila dikemudian hari Surat Pernyataan ini tidak benar yang mengakibatkan <b>kerugian terhadap Negara Republik Indonesia,</b> maka saya bersedia menanggung kerugian tersebut.
															</p>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-7"></div>
													<div class="col-md-5" style="padding-left: 50px;">
														<p>Wassalama</p>
														<p>
															Dekan <br>
															Tanggal {{ date('d F Y') }}
														</p>
														<p style="margin-top: 50px;">
															<b>Prof. Dr. Muhammad Halifah Mustami, M.Pd</b><br>
															NIP: 19710412 200003 1 001
														</p>
													</div>
												</div>
											</div>
											<button type="submit" id="tombol" class="btn btn-success btn-lg m-t-20">Buat Surat</button>
										</form>
									</div>
								</div> 
								<div class="tab-pane" id="profile-2">
									<div class="m-t-10">
										@foreach($syarat as $i => $syrt)
										<div class="panel panel-color panel-inverse">
											<div class="panel-heading">
												<h3 class="panel-title">{{ $syrt->nama_syarat }}</h3>
											</div>
											<div class="panel-body p-0">
												<img src="{{ asset('storage/berkas/'.$syrt->file_berkas) }}" alt="image" style="width: 100%; height: 500px;">
											</div>
										</div>										
										@endforeach
									</div>
								</div>
							</div> 
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection

@section('javascript')
<script>
	jQuery(document).ready(function($) {
		$(document).scroll(function() {
			var sticky = $('#sticky').offset().top;
			var scroll = $(document).scrollTop();
			console.log(scroll+" "+sticky);
			if (scroll >= sticky) {
				$('#sticky').attr('class', 'topbar-tabs')
			} else if (scroll <= 90) {
				$('#sticky').removeAttr('class', 'topbar-tabs')
			}
		});
	});
</script>
@endsection