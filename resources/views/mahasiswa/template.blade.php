<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
	<meta name="author" content="Coderthemes">

	<link rel="shortcut icon" href="{{ asset('/assets/images/favicon_1.ico') }}">

	<title>Sistem Informasi Persuratan FST-UINAM</title>

	<!--Morris Chart CSS -->
	<link rel="stylesheet" href="{{ asset('/plugins/morris/morris.css') }}">

	<link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/css/core.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/css/components.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/css/pages.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/css/menu.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

	<!-- Plugins css-->
	<link href="{{ asset('/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" />
	<link href="{{ asset('/plugins/switchery/css/switchery.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('/plugins/multiselect/css/multi-select.css') }}"  rel="stylesheet" type="text/css" />
	<link href="{{ asset('/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />

	<script src="{{ asset('/assets/js/modernizr.min.js') }}"></script>

</head>


<body>
	<header id="topnav">
		<div class="topbar-main">
			<div class="container">
				<div class="logo">
					<a href="index.html" class="logo"><span>Sistem Informasi Persuratan FST-UINAM</span></a>
				</div>
				<div class="menu-extras">
					<ul class="nav navbar-nav navbar-right pull-right">
						<li class="dropdown navbar-c-items">
							<a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
								<i class="icon-bell"></i> 
								@php
								$id = Auth::user()->id;
								$get = new App\Model\Surat;
								$notif = $get->where('status', '!=','Dalam Proses')->where('mhs_id', $id)->get();
								$count = count($notif);
								@endphp
								@if($count>0)
								<span class="badge badge-xs badge-danger">{{ $count }}</span>
								@endif
							</a>
							<ul class="dropdown-menu dropdown-menu-lg">
								<li class="notifi-title">Notification</li>
								<li class="list-group slimscroll-noti notification-list">
									@foreach($notif as $notifs)
									@if($notifs->status == 'Sudah Selesai')
									<a href="{{ url('/pengajuan') }}" class="list-group-item">
										<div class="media">
											<div class="pull-left p-r-10">
												<em class="fa fa-envelope-o noti-success"></em>
											</div>
											<div class="media-body">
												<h5 class="media-heading">Surat telah selesai</h5>
												<p class="m-0">
													<small>Surat {{ $notifs->jenis_surat }} telah selesai dibuat</small>
												</p>
											</div>
										</div>
									</a>
									@else
									<a href="{{ url('/pengajuan') }}" class="list-group-item">
										<div class="media">
											<div class="pull-left p-r-10">
												<em class="fa fa-envelope-o noti-danger"></em>
											</div>
											<div class="media-body">
												<h5 class="media-heading">Surat ditolak</h5>
												<p class="m-0">
													<small>Surat {{ $notifs->jenis_surat }} yang kamu ajukan ditolak</small>
												</p>
											</div>
										</div>
									</a>
									@endif
									@endforeach
								</li>
							</ul>
						</li>
						<li class="dropdown navbar-c-items">
							<a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true">
								<span>{{ Auth::user()->nama }}</span>
								<img src="{{ asset('/assets/images/users/avatar-1.jpg') }}" alt="user-img" class="img-circle"> 
							</a>
							<ul class="dropdown-menu">
								<li><a href="javascript:void(0)"><i class="ti-user text-custom m-r-10"></i> Profile</a></li>
								<li><a href="javascript:void(0)"><i class="ti-settings text-custom m-r-10"></i> Settings</a></li>
								<li><a href="javascript:void(0)"><i class="ti-lock text-custom m-r-10"></i> Lock screen</a></li>
								<li class="divider"></li>
								<li>
									<a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
										<i class="ti-power-off text-danger m-r-10"></i> Logout
									</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								</li>
								
							</ul>
						</li>
					</ul>
					<div class="menu-item">
						<!-- Mobile menu toggle-->
						<a class="navbar-toggle">
							<div class="lines">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</a>
						<!-- End mobile menu toggle-->
					</div>
				</div>

			</div>
		</div>

		<div class="navbar-custom">
			<div class="container">
				<div id="navigation">
					<!-- Navigation Menu-->
					<ul class="navigation-menu">
						<li class="has-submenu">
							<a href="{{ url('home') }}"><i class="fa fa-home"></i>Home</a>
						</li>
						<li class="has-submenu">
							<a href="{{ url('buatsurat') }}"><i class="fa fa-envelope-o"></i>Buat Surat</a>
						</li>
						<li class="has-submenu">
							<a href="{{ url('pengajuan') }}"><i class="fa fa-file-text-o"></i>Surat Diajukan</a>
						</li>
					</ul>
					<!-- End navigation menu        -->
				</div>
			</div> <!-- end container -->
		</div> <!-- end navbar-custom -->
	</header>
	<!-- End Navigation Bar-->


	<div class="wrapper">
		<div class="container">
			@yield('konten')
			<!-- Footer -->
			<footer class="footer text-right">
				<div class="container">
					<div class="row">
						<div class="col-xs-6">
							© 2019. Karpten(KRP).
						</div>
					</div>
				</div>
			</footer>
			<!-- End Footer -->

		</div>
	</div>



	<!-- jQuery  -->
	<script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/assets/js/detect.js') }}"></script>
	<script src="{{ asset('/assets/js/fastclick.js') }}"></script>

	<script src="{{ asset('/assets/js/jquery.slimscroll.js') }}"></script>
	<script src="{{ asset('/assets/js/jquery.blockUI.js') }}"></script>
	<script src="{{ asset('/assets/js/waves.js') }}"></script>
	<script src="{{ asset('/assets/js/wow.min.js') }}"></script>
	<script src="{{ asset('/assets/js/jquery.nicescroll.js') }}"></script>
	<script src="{{ asset('/assets/js/jquery.scrollTo.min.js') }}"></script>

	<script src="{{ asset('/plugins/peity/jquery.peity.min.js') }}"></script>

	<!-- jQuery  -->
	<script src="{{ asset('/plugins/waypoints/lib/jquery.waypoints.js') }}"></script>
	<script src="{{ asset('/plugins/counterup/jquery.counterup.min.js') }}"></script>

	<script src="{{ asset('/plugins/morris/morris.min.js') }}"></script>
	<script src="{{ asset('/plugins/raphael/raphael-min.js') }}"></script>

	<script src="{{ asset('/plugins/jquery-knob/jquery.knob.js') }}"></script>

	<script src="{{ asset('/assets/pages/jquery.dashboard.js') }}"></script>

	<script src="{{ asset('/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js') }}"></script>
	<script src="{{ asset('/plugins/switchery/js/switchery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/plugins/jquery-quicksearch/jquery.quicksearch.js') }}"></script>
	<script src="{{ asset('/plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/plugins/bootstrap-select/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>

	<script type="text/javascript" src="{{ asset('/plugins/autocomplete/jquery.mockjax.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/plugins/autocomplete/jquery.autocomplete.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/plugins/autocomplete/countries.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/assets/pages/autocomplete.js') }}"></script>

	<script type="text/javascript" src="{{ asset('/assets/pages/jquery.form-advanced.init.js') }}"></script>

	<script src="{{ asset('/plugins/notifyjs/js/notify.js') }}"></script>
	<script src="{{ asset('/plugins/notifications/notify-metro.js') }}"></script>

	<script src="{{ asset('/assets/js/jquery.core.js') }}"></script>
	<script src="{{ asset('/assets/js/jquery.app.js') }}"></script>

	@yield('javascript')

	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('.counter').counterUp({
				delay: 100,
				time: 1200
			});

			$(".knob").knob();

		});
	</script>

</body>
</html>
