@extends('mahasiswa.template')

@section('konten')
<div class="row">
	<div class="col-lg-12">
		<div class="card-box">
			<div class="text-center">
				<h2>Daftar Surat yang diajukan</h2>
			</div>
			<hr>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<table id="datatable" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Jenis Surat</th>
									<th>Tggl Pengajuan</th>
									<th>Perkiraan Selesai</th>
									<th>Status</th>
									<th>Berkas Persyaratan</th>
								</tr>
							</thead>
							<tbody>
								@foreach($surat->all() as $i => $dta)
								<tr>
									<td>{{ $i+1 }}</td>
									<td>{{ $dta->jenis_surat }}</td>
									<td>{{ date('d F Y', strtotime($dta->created_at)) }}</td>
									@php
									if ($dta->status == 'Dalam Proses') $warna = "text-warning";
									else if ($dta->status == 'Sudah Selesai') $warna = "text-success";
									else $warna = "text-danger";

									$perkiraan = date('d F Y', strtotime($dta->created_at) + (2*24*60*60));
									@endphp
									<td>{{ $perkiraan }}</td>
									<td class="{{ $warna }}">{{ $dta->status }}</td>
									<td><a href="javascript:;" data-toggle="modal" data-target=".show{{ $dta->id }}">lihat detail berkas..</a></td>
								</tr>

								<!-- Modal -->
								<div id="accordion-modal" class="modal fade show{{ $dta->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h2 class="modal-title" id="myLargeModalLabel">Berkas Persyaratan</h2>
											</div>
											<div class="modal-body">
												<div class="panel-group panel-group-joined" id="accordion-test"> 
													@foreach($dta->persyaratan as $i => $syrt)
													<div class="panel panel-default border"> 
														<div class="panel-heading"> 
															<h4 class="panel-title"> 
																<a data-toggle="collapse" data-parent="#accordion-test" href="#collapse{{ $syrt->id }}">
																	{{ $syrt->nama_syarat }}
																</a> 
															</h4> 
														</div> 
														<div id="collapse{{ $syrt->id }}" class="panel-collapse collapse @if($i<=0){{ 'in' }}@endif"> 
															<div class="panel-body p-0">
																<img src="{{ asset('storage/berkas/'.$syrt->file_berkas) }}" alt="image" style="width: 100%; height: 400px;">
															</div> 
														</div> 
													</div><br>
													@endforeach
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach
								@if(!isset($i))
								<tr>
									<td colspan="6" class="text-center">Belum ada surat yang diajukan</td>
								</tr>
								@endif
							</tbody>
						</table>
						<br><p class="text-success">Note: Setelah seurat selesai di proses, kamu akan mendapat notifikasi dan sudah bisa langsung mengambil surat di ruang fakultas Sains dan Teknologi.</p>
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
		$.Notification.autoHideNotify("success", "top right", "Surat Berhasil Diajukan","{{ session('msg') }}");
	});
</script>
@endif
@endsection