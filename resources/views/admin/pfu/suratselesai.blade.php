@extends('admin.viewsurat')
@extends('admin.pfu.template')

@section('konten')
<div class="row">
	<div class="col-lg-12">
		<div class="card-box">
			<div class="text-center">
				<h2>Daftar Surat yang Telah Dibuat</h2>
			</div>
			<hr>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<table id="datatable" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Nim</th>
									<th>Jurusan</th>
									<th>Jenis Surat</th>
									<th>Aksi</th>
									<th>Konfirmasi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($surat->all() as $i => $dta)
								<tr>
									@php
									$mhs = $mahasiswa->where('id', $dta->mhs_id)->first();

									if ($dta->jenis_surat == "Praktek Pengalaman Lapangan") $page = 'ppl';
									else if ($dta->jenis_surat == "Surat Aktif Kuliah") $page = 'sak';
									@endphp
									<td>{{ $i+1 }}</td>
									<td>{{ $mhs->nama }}</td>
									<td>{{ $mhs->nim }}</td>
									<td>{{ $mhs->jurusan }}</td>
									<td>{{ $dta->jenis_surat }}</td>
									<td class="text-center">
										<a href="javascript:;" role="button"
											class="btn btn-primary waves-effect waves-light" data-toggle="modal"
											data-target=".show{{ $dta->id }}" data-toggle1="tooltip"
											title="Preview Surat"><i class="fa fa-eye"></i></a>
										<a href="{{ url('admin/pfu/surat/cetak/'.$page.'/'.$dta->id) }}" target="blank_"
											role="button" class="btn btn-primary waves-effect waves-light"
											data-toggle1="tooltip" title="Print Surat"><i class="fa fa-print"></i></a>
									</td>
									<td class="text-center">
										<a href="{{ url('admin/pfu/surat/konfirmasi/'.$dta->id) }}" role="button"
											class="btn btn-success waves-effect waves-light">Konfirmasi</a>
									</td>
								</tr>

								@endforeach

								@if(!isset($i))
								<tr>
									<td colspan="7" rowspan="2" class="text-center">Belum ada permintaan data</td>
									<td hidden=""></td>
									<td hidden=""></td>
									<td hidden=""></td>
									<td hidden=""></td>
									<td hidden=""></td>
									<td hidden=""></td>
								</tr>
								@endif
							</tbody>
						</table>
						@yield('modal')
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('javascript')
@if(session('msg'))
<script>
	$(document).ready(function() {
		$.Notification.autoHideNotify("success", "top right", "Sukses","{{ session('msg') }}");
	});
</script>
@endif
<script type="text/javascript">
	$(document).ready(function() {
		$('[data-toggle1="tooltip"]').tooltip();
	});
</script>
@endsection