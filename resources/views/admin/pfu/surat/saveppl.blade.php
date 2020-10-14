@php
$mhs = $mahasiswa->where('id', $surat->mhs_id)->first();
$instansi = $item->where('surat_id', $surat->id)->where('tipe', 'instansi')->first();
$waktu = $item->where('surat_id', $surat->id)->where('tipe', 'waktu pelaksana')->first();
$get_nama = $item->where('surat_id', $surat->id)->where('tipe', 'nama')->all();
$get_nim = $item->where('surat_id', $surat->id)->where('tipe', 'nim')->all();

foreach ($get_nama as $nma) { $nama[] = $nma; }
foreach ($get_nim as $n) { $nim[] = $n; }

@endphp
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
	<meta name="author" content="Coderthemes">

	<link rel="shortcut icon" href="{{ asset('/assets_/images/favicon_1.ico') }}">

	<title>PFU - Sistem Informasi Persuratan FST-UINAM</title>

	<!-- X-editable css -->
	<link type="text/css" href="{{ asset('/plugins/x-editable/css/bootstrap-editable.css') }}" rel="stylesheet">

	<!-- DataTables -->
	<link href="{{ asset('/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('/plugins/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('/plugins/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('/plugins/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('/plugins/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('/plugins/datatables/dataTables.colVis.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('/plugins/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('/plugins/datatables/fixedColumns.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('/assets_/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets_/css/core.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets_/css/components.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets_/css/icons.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets_/css/pages.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets_/css/responsive.css') }}" rel="stylesheet" type="text/css" />

	<script src="{{ asset('/assets_/js/modernizr.min.js') }}"></script>

</head>
<body>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-lg-8">
			<div class="card-box">
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
						<div class="col-md-7"></div>
						<div class="col-md-5" style="padding-left: 50px;">
							<p>Wassalama</p>
							<p>
								Dekan <br>
								Tanggal {{ date('d F Y', strtotime($surat->tggl_surat)) }}
							</p>
							<p style="margin-top: 70px;">
								<b>Dr. M. Thahir Maloko, M.Hi.</b><br>
								NIP: 19631231 199503 1 006
							</p>
							<div style="width: 150px; height: 100px; margin-top: -110px; margin-left: -80px;">
								@php
								$img_paraf = $paraf->where('surat_id', $surat->id)->first();
								@endphp
								<img src="{{ asset('storage/paraf/'.$img_paraf->file_paraf) }}" alt="" id="set_ttd">
							</div>
							<div style="width: 200px; height: 140px; margin-top: -150px; margin-left: -10px;">
								@php
								$img_ttd = $tandatgn->where('surat_id', $surat->id)->first();
								@endphp
								<img src="{{ asset('storage/ttd/'.$img_ttd->file_ttd) }}" alt="" id="set_ttd">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		var resizefunc = [];
	</script>

	<!-- jQuery  -->
	<script src="{{ asset('/assets_/js/jquery.min.js') }}"></script>
	<script src="{{ asset('/assets_/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/assets_/js/detect.js') }}"></script>
	<script src="{{ asset('/assets_/js/fastclick.js') }}"></script>
	<script src="{{ asset('/assets_/js/jquery.slimscroll.js') }}"></script>
	<script src="{{ asset('/assets_/js/jquery.blockUI.js') }}"></script>
	<script src="{{ asset('/assets_/js/waves.js') }}"></script>
	<script src="{{ asset('/assets_/js/wow.min.js') }}"></script>
	<script src="{{ asset('/assets_/js/jquery.nicescroll.js') }}"></script>
	<script src="{{ asset('/assets_/js/jquery.scrollTo.min.js') }}"></script>

	<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('/plugins/datatables/dataTables.bootstrap.js') }}"></script>

	<script src="{{ asset('/plugins/datatables/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('/plugins/datatables/buttons.bootstrap.min.js') }}"></script>
	<script src="{{ asset('/plugins/datatables/jszip.min.js') }}"></script>
	<script src="{{ asset('/plugins/datatables/pdfmake.min.js') }}"></script>
	<script src="{{ asset('/plugins/datatables/vfs_fonts.js') }}"></script>
	<script src="{{ asset('/plugins/datatables/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('/plugins/datatables/buttons.print.min.js') }}"></script>
	<script src="{{ asset('/plugins/datatables/dataTables.fixedHeader.min.js') }}"></script>
	<script src="{{ asset('/plugins/datatables/dataTables.keyTable.min.js') }}"></script>
	<script src="{{ asset('/plugins/datatables/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('/plugins/datatables/responsive.bootstrap.min.js') }}"></script>
	<script src="{{ asset('/plugins/datatables/dataTables.scroller.min.js') }}"></script>
	<script src="{{ asset('/plugins/datatables/dataTables.colVis.js') }}"></script>
	<script src="{{ asset('/plugins/datatables/dataTables.fixedColumns.min.js') }}"></script>

	<!-- XEditable Plugin -->
	<script src="{{ asset('/plugins/moment/moment.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/plugins/x-editable/js/bootstrap-editable.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets_/pages/jquery.xeditable.js') }}"></script>

	<script src="{{ asset('/pages/datatables.init.js') }}"></script>

	<script src="{{ asset('/assets_/js/jquery.core.js') }}"></script>
	<script src="{{ asset('/assets_/js/jquery.app.js') }}"></script>

	<script src="{{ asset('/plugins/notifyjs/js/notify.js') }}"></script>
	<script src="{{ asset('/plugins/notifications/notify-metro.js') }}"></script>

	<script src="{{ asset('/assets/js/jquery.core.js') }}"></script>
	<script src="{{ asset('/assets/js/jquery.app.js') }}"></script>

	<script src="{{ asset('/plugins/printarea/jquery-ui-1.10.4.custom.js') }}"></script>
	<script src="{{ asset('/plugins/printarea/jquery.PrintArea.js') }}" type="text/JavaScript" language="javascript"></script>

	<script type="text/javascript">
		$(document).ready(function () {    
			window.print();
		});

	</script>



	@yield('javascript')

</body>
</html>