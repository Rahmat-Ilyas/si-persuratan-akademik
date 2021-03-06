<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
  <meta name="author" content="Coderthemes">

  <link rel="shortcut icon" href="{{ asset('/assets_/images/favicon_1.ico') }}">

  <title>Wakil Dekan - Sistem Informasi Persuratan FST-UINAM</title>

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

<body class="fixed-left">
    <div id="wrapper">
        <div class="topbar">
            <div class="topbar-left">
                <div class="text-center">
                    <a href="index.html" class="logo">
                        <i class="icon-magnet icon-c-logo"></i>
                        <span>Wakil Dekan</span>
                    </a>
                </div>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="">
                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="dropdown navbar-c-items">
                                <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true">
                                    <span>{{ Auth::user()->nama }}</span>
                                    <img src="{{ asset('/assets/images/users/avatar-1.jpg') }}" alt="user-img" class="img-circle"> 
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="javascript:void(0)"><i class="ti-user text-custom m-r-10"></i> Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="ti-settings text-custom m-r-10"></i> Settings</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{ url('admin/logout') }}"><i class="ti-power-off text-danger m-r-10"></i> Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <div id="sidebar-menu">
                    <ul>
                        <li class="has_sub">
                            <a href="{{ url('admin') }}" class="waves-effect">
                                <i class="fa fa-home"></i><span>Home</span>
                            </a>
                        </li>
                        <li class="has_sub">
                            @php
                            $get = new App\Model\Surat;
                            $notif = $get->where('proses', 3)->get();
                            $count = count($notif);
                            @endphp
                            <a href="{{ url('admin/wd/permintaan') }}" class="waves-effect">
                                <i class="fa fa-file-text-o"></i>
                                @if($count>0)
                                <span class="label label-pink pull-right">{{ $count }}</span>
                                @endif
                                <span>Permintaan Surat</span>
                            </a>
                        </li>
                        <li class="has_sub">
                            <a href="{{ url('admin/wd/suratdiparaf') }}" class="waves-effect">
                                <i class="fa fa-files-o"></i><span>Surat di Paraf</span>
                            </a>
                        </i>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <div class="content">
                <div class="container">
                    @yield('konten')
                </div>
            </div>
            <footer class="footer">
                © 2019. Karpten(KRP).
            </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

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

    <script src="{{ asset('/pages/datatables.init.js') }}"></script>

    <script src="{{ asset('/assets_/js/jquery.core.js') }}"></script>
    <script src="{{ asset('/assets_/js/jquery.app.js') }}"></script>

    <script src="{{ asset('/plugins/notifyjs/js/notify.js') }}"></script>
    <script src="{{ asset('/plugins/notifications/notify-metro.js') }}"></script>

    <script src="{{ asset('/assets/js/jquery.core.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.app.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {            
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({keys: true});
            $('#datatable-responsive').DataTable();
            $('#datatable-colvid').DataTable({
                "dom": 'C<"clear">lfrtip',
                "colVis": {
                    "buttonText": "Change columns"
                }
            });
            $('#datatable-scroller').DataTable({
                ajax: "assets/plugins/datatables/json/scroller-demo.json",
                deferRender: true,
                scrollY: 380,
                scrollCollapse: true,
                scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
            var table = $('#datatable-fixed-col').DataTable({
                scrollY: "300px",
                scrollX: true,
                scrollCollapse: true,
                paging: false,
                fixedColumns: {
                    leftColumns: 1,
                    rightColumns: 1
                }
            });
        });
        TableManageButtons.init();

    </script>



    @yield('javascript')

</body>
</html>