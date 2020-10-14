@extends('mahasiswa.template')

@section('konten')
<div class="row">
	<div class="col-lg-12">
		<div class="card-box">
			<div class="text-center">
				<h2>Pilih Jenis Surat</h2>
			</div>
			<hr>
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-4">
						<a href="{{ url('persyaratan/ppl') }}">
							<div class="widget-bg-color-icon card-box">
								<div class="bg-icon bg-icon-success pull-left">
									<i class="fa fa-envelope-o text-success"></i>
								</div>
								<div class="text-right">
									<h4 class="text-dark"><b>Surat Praktek Pengalama Lapangan</b></h4>
									<p class="text-muted">Income status</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<a href="{{ url('persyaratan/sak') }}">
							<div class="widget-bg-color-icon card-box">
								<div class="bg-icon bg-icon-success pull-left">
									<i class="fa fa-envelope-o text-success"></i>
								</div>
								<div class="text-right">
									<h4 class="text-dark"><b>Surt Aktif Kuliah</b></h4>
									<p class="text-muted">Income status</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<a href="{{ url('persyaratan/skb') }}">
							<div class="widget-bg-color-icon card-box">
								<div class="bg-icon bg-icon-success pull-left">
									<i class="fa fa-envelope-o text-success"></i>
								</div>
								<div class="text-right">
									<h4 class="text-dark"><b>Surat Kelakuan Baik</b></h4>
									<p class="text-muted">Income status</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-4">
						<a href="{{ url('persyaratan/skc') }}">
							<div class="widget-bg-color-icon card-box">
								<div class="bg-icon bg-icon-success pull-left">
									<i class="fa fa-envelope-o text-success"></i>
								</div>
								<div class="text-right">
									<h4 class="text-dark"><b>Surat Keterangan Cuti</b></h4>
									<p class="text-muted">Income status</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<a href="{{ url('persyaratan/') }}">
							<div class="widget-bg-color-icon card-box">
								<div class="bg-icon bg-icon-success pull-left">
									<i class="fa fa-envelope-o text-success"></i>
								</div>
								<div class="text-right">
									<h4 class="text-dark"><b>Surat Keterangan Beasiswa</b></h4>
									<p class="text-muted">Income status</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<a href="{{ url('persyaratan/') }}">
							<div class="widget-bg-color-icon card-box">
								<div class="bg-icon bg-icon-success pull-left">
									<i class="fa fa-envelope-o text-success"></i>
								</div>
								<div class="text-right">
									<h4 class="text-dark"><b>Surat Keterangan Konfren</b></h4>
									<p class="text-muted">Income status</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-4">
						<a href="{{ url('persyaratan/') }}">
							<div class="widget-bg-color-icon card-box">
								<div class="bg-icon bg-icon-success pull-left">
									<i class="fa fa-envelope-o text-success"></i>
								</div>
								<div class="text-right">
									<h4 class="text-dark"><b>Surat KKN</b></h4>
									<p class="text-muted">Income status</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<a href="{{ url('persyaratan/') }}">
							<div class="widget-bg-color-icon card-box">
								<div class="bg-icon bg-icon-success pull-left">
									<i class="fa fa-envelope-o text-success"></i>
								</div>
								<div class="text-right">
									<h4 class="text-dark"><b>Surat Hasil</b></h4>
									<p class="text-muted">Income status</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<a href="{{ url('persyaratan/') }}">
							<div class="widget-bg-color-icon card-box">
								<div class="bg-icon bg-icon-success pull-left">
									<i class="fa fa-envelope-o text-success"></i>
								</div>
								<div class="text-right">
									<h4 class="text-dark"><b>Surat Keterangan</b></h4>
									<p class="text-muted">Income status</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection