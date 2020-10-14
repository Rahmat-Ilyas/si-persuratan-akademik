@extends('mahasiswa.template')

@section('konten')
<div class="row">
	<div class="col-lg-12">
		<div class="card-box">
			<div class="text-center">
				<h2>Upload Berkas Persyaratan</h2>
			</div>
			<hr>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div style="padding-left: 20px; padding-bottom: 0px;">
									<b>Jenis Surat : Surat Praktek Pengalaman Lapangan(PPL)</b><br><br>
									<b>Persyaratan :</b>
								</div>
								<div class="p-20">
									<form method="POST" action="{{ url('persyaratan/store') }}" enctype="multipart/form-data">
										{{ csrf_field() }}
										<div class="form-group">
											<label class="control-label">Scen Suarat Pengantar Jurusan</label>
											<input type="file" name="persyaratan[]" class="filestyle" data-buttonname="btn-default" required="">
										</div>
										<div class="form-group">
											<input type="hidden" name="jenis_surat" value="Praktek Pengalaman Lapangan">
											<input type="hidden" name="tipe" value="ppl">
											<input type="hidden" name="nama_syarat[]" value="Scen Suarat Pengantar Jurusan">
											<input type="hidden" name="mhs_id" value="{{ Auth::user()->id }}">
											<button type="submit" class="btn btn-primary waves-effect waves-light">Ajukan Surat</button>
										</div>
									</form>
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
@if(session('msg'))
<script>
	$(document).ready(function() {
		$.Notification.autoHideNotify("error", "top right", "Gagal Mengupload File","{{ session('msg') }}");
	});
</script>
@endif
@endsection