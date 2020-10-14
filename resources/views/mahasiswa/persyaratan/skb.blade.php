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
									<b>Jenis Surat : Surat Keterangan Baik</b><br><br>
									<b>Persyaratan :</b>
								</div>
								<div class="p-20">
									<form>
										<div class="form-group">
											<label class="control-label">Scen Suarat Pengantar Jurusan</label>
											<input type="file" class="filestyle" data-buttonname="btn-default">
										</div>
										<div class="form-group">
											<label class="control-label">Scen Suarat Keterangan Jurusan</label>
											<input type="file" class="filestyle" data-buttonname="btn-default">
										</div>
										<div class="form-group">
											<label class="control-label">Scen Suarat Pengantar Jurusan</label>
											<input type="file" class="filestyle" data-buttonname="btn-default">
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