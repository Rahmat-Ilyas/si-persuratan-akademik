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
											<input type="hidden" name="tipe" value="ppl">
											<input type="hidden" name="surat_id" value="{{ $id }}">
											<input type="hidden" name="instansi" id="instansi">
											<input type="hidden" name="no_surat" value="{{ $no_surat }}">
											<input type="hidden" name="tggl_surat" value="{{ date('Y-m-d') }}">
											<input type="hidden" name="nama[]" value="{{ $mahasiswa->nama }}">
											<input type="hidden" name="nim[]" value="{{ $mahasiswa->nim }}">
											<input type="hidden" name="jurusan" value="{{ $mahasiswa->jurusan }}">

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
													<div class="col-md-1">
														Nomor <br>
														Sifat <br>
														Hal <br>
													</div>
													<div class="col-md-7">
														: <b>{{ $no_surat }}</b>/Un.06/FST/PP.{{ date('d/m/Y') }}<br>
														: Biasa<br>
														: <b>Praktek Kerja Lapangan</b><br>
													</div>
													<div class="col-md-4">
														Makassar, {{ date('d F Y') }}
													</div>
												</div>
												<div class="row">
													<div class="col-md-1"></div>
													<div class="col-md-10" style="padding-left: 20px;">
														<p class="m-t-20">
															Kepada Yth. <br>
															Pemimpin 
															<a href="#" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname">klik untuk mengisi!</a><br>
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
																Sehubungan dengan hal tersebut diatas kami mohon kiranya mahasiswa Jurusan {{ $mahasiswa->jurusan }} Fakultas Sains & Teknologi UIN Alauddin Makassar, dapat diterima untuk melakukan Praktek Pengalaman Lapangan pada Perusahaan/Instansi yang Bapak/Ibu Pimpin. Adapun nama-nama mahasiswa di bawah ini :
															</p>

															<table class="table table-bordered m-0 p-0">
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
																	<tr>
																		<td>1</td>
																		<td>{{ $mahasiswa->nama }}</td>
																		<td>{{ $mahasiswa->nim }}</td>
																		<td rowspan="10">{{ $mahasiswa->jurusan }}</td>
																		<td rowspan="10" style="padding: 0px;">
																			<input type="text" name="waktu_pelaksana" class="form-control waktu" placeholder="Input waktu pelaksanaan" autocomplete="off" style="border: none;">
																		</td>
																	</tr>
																</tbody>
															</table>
															<div id="button">
																<a href="javascript:;" id="tambah" role="button" class="btn btn-sm btn-primary m-t-10">Tambah mahasiswa</a>
															</div><br>
															<p>
																Demikian permohonan kami, atas perhatian dan kerja samanya diucapkan terima kasih <br>
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
		$('#tombol').attr('disabled', '');

		$('#inline-firstname').click(function() {
			$('.input-sm').val('');
			if ($('.waktu').val() == '') $('#tombol').attr('disabled', ''); 
			else $('#tombol').removeAttr('disabled', '');
		});

		$(document).scroll(function() {
			var sticky = $('#sticky').offset().top;
			var scroll = $(document).scrollTop();
			console.log(scroll+" "+sticky);
			if (scroll >= sticky) {
				$('#sticky').attr('class', 'topbar-tabs')
			} else if (scroll <= 90) {
				$('#sticky').removeAttr('class', 'topbar-tabs')
			}

			if ($('#inline-firstname').text() == 'klik untuk mengisi!') $('#instansi').val('');
			else $('#instansi').val($('#inline-firstname').text());

		});

		// Validasi
		$('.waktu').keyup(function(event) {
			if ($('.waktu').val() == '' || $('#inline-firstname').text() == 'klik untuk mengisi!')
				$('#tombol').attr('disabled', ''); 
			else 
				$('#tombol').removeAttr('disabled', '');
		});

		$(document).on('keyup', '.nama',function(event) {
			if ($(this).val() == '' || $('.nim').val() == '' || $('.waktu').val() == '' || $('#inline-firstname').text() == 'klik untuk mengisi!') 
				$('#tombol').attr('disabled', ''); 
			else 
				$('#tombol').removeAttr('disabled', '');
		});

		$(document).on('keyup', '.nim',function(event) {
			if ($('.nama').val() == '' || $(this).val() == '' || $('.waktu').val() == '' || $('#inline-firstname').text() == 'klik untuk mengisi!') 
				$('#tombol').attr('disabled', ''); 
			else 
				$('#tombol').removeAttr('disabled', '');
		});

		var set = 1;
		$('#tambah').click(function(event) {
			$('#tombol').attr('disabled', '');

			var no = set;
			var no=parseInt(no) + 1;
			set = no;
			$('.item').append('<tr class="clear"><td>'+no+'</td> <td style="padding: 0px;"><input type="text" name="nama[]" class="form-control nama" placeholder="Input nama" autocomplete="off" style="border: none; width: 150px;"></td> <td style="padding: 0px;"><input type="text" name="nim[]" class="form-control nim" placeholder="Input nim" autocomplete="off" style="border: none; width: 110px;"></td></tr>');
			if (no <= 2) {
				$('#button').append('<a href="javascript:;" id="reset" role="button" class="btn btn-sm btn-danger m-t-10">Reset</a>');
			}
		});

		// Reset
		$(document).on('click', '#reset', function() {
			$('.clear').remove();
			$('#reset').remove();
			set = 1;
		});
	});
</script>
@endsection