@extends('admin.kasubag.template')

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
									<th>Berkas Persyaratan</th>
									<th>Proses</th>
								</tr>
							</thead>
							<tbody>
								@foreach($surat->all() as $i => $dta)
								<tr>
									@php
									$mhs = $mahasiswa->where('id', $dta->mhs_id)->first();
									$syrt = $syarat->where('surat_id', $dta->id)->first();
									@endphp
									<td>{{ $i+1 }}</td>
									<td>{{ $mhs->nama }}</td>
									<td>{{ $mhs->nim }}</td>
									<td>{{ $mhs->jurusan }}</td>
									<td>{{ $dta->jenis_surat }}</td>
									<td>
										<a href="javascript:;" data-toggle="modal"
											data-target=".show{{ $dta->id }}">lihat detail berkas..</a>
									</td>
									<td class="text-center">
										<a href="" role="button" class="btn btn-danger waves-effect waves-light"
											data-toggle="modal" data-target="#con-close-modal">Tolak</a>
										<a href="{{ url('admin/kasubag/setuju/'.$dta->id) }}" role="button"
											class="btn btn-success waves-effect waves-light">Setujiu</a>
									</td>
								</tr>
								<!-- Modal Inpit -->
								<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog"
									aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
									<form method="POST" action="{{ url('admin/kasubag/tolak') }}">
										{{ csrf_field() }}
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal"
														aria-hidden="true">×</button>
													<h4 class="modal-title">Alasan Penolakan</h4>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-md-12">
															<textarea name="alasan" class="form-control autogrow"
																id="field-7" placeholder="Alasan Penolakan"></textarea>
														</div>
													</div>
												</div>
												<input type="hidden" name="id" value="{{ $dta->id }}">
												<div class="modal-footer">
													<button type="button" class="btn btn-default waves-effect"
														data-dismiss="modal">Tutup</button>
													<button type="submit"
														class="btn btn-danger waves-effect waves-light">Kirim</button>
												</div>
											</div>
										</div>
									</form>
								</div>

								<!-- Modal -->
								<div id="accordion-modal" class="modal fade show{{ $dta->id }}" tabindex="-1"
									role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"
									style="display: none;">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"
													aria-hidden="true">×</button>
												<h2 class="modal-title" id="myLargeModalLabel">Berkas Persyaratan</h2>
											</div>
											<div class="modal-body">
												<div class="panel-group panel-group-joined" id="accordion-test">
													@foreach($dta->persyaratan as $i => $syrt)
													<div class="panel panel-default border">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion-test"
																	href="#collapse{{ $syrt->id }}">
																	{{ $syrt->nama_syarat }}
																</a>
															</h4>
														</div>
														<div id="collapse{{ $syrt->id }}"
															class="panel-collapse collapse @if($i<=0){{ 'in' }}@endif">
															<div class="panel-body p-0">
																<img src="{{ asset('storage/berkas/'.$syrt->file_berkas) }}"
																	alt="image" style="width: 100%; height: 700px;">
															</div>
														</div>
													</div>
													@endforeach
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach

								@if(!isset($i))
								<tr>
									<td colspan="7" rowspan="2" class="text-center">Belum ada permintaan surat yang
										diajukan</td>
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