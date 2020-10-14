@extends('admin.viewsurat')
@extends('admin.wd.template')

@section('konten')
<div class="row">
	<div class="col-lg-12">
		<div class="card-box">
			<div class="text-center">
				<h2>Daftar Surat yang Diajukan</h2>
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
									<th>Review Surat</th>
									<th>Proses</th>
								</tr>
							</thead>
							<tbody>
								@foreach($surat->all() as $i => $dta)
								<tr>
									@php
									$mhs = $mahasiswa->where('id', $dta->mhs_id)->first();
									$proses = 3;

									if($dta->jenis_surat == "Praktek Pengalaman Lapangan") $page = "ppl";
									else if($dta->jenis_surat == "Surat Aktif Kuliah") $page = "sak"; 
									@endphp
									<td>{{ $i+1 }}</td>
									<td>{{ $mhs->nama }}</td>
									<td>{{ $mhs->nim }}</td>
									<td>{{ $mhs->jurusan }}</td>
									<td>{{ $dta->jenis_surat }}</td>
									<td>
										<a href="javascript:;" data-toggle="modal" data-target=".show{{ $dta->id }}">lihat surat..</a>
									</td>
									<td class="text-center">
										<a href="{{ url('admin/wd/paraf/'.$page.'/'.$dta->id) }}" role="button" class="btn btn-success waves-effect waves-light">Paraf Surat</a>
									</td>
								</tr>
								@endforeach

								@if(!isset($i))
								<tr>
									<td colspan="7" rowspan="2" class="text-center">Belum ada permintaan surat yang diajukan</td>
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
@endsection