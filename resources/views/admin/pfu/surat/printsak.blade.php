@php
$mhs = $mahasiswa->where('id', $surat->mhs_id)->first();
$nama_wali = $item->where('surat_id', $surat->id)->where('tipe', 'nama wali')->first();
$nip = $item->where('surat_id', $surat->id)->where('tipe', 'nip')->first();
$jabatan = $item->where('surat_id', $surat->id)->where('tipe', 'jabatan')->first();
$instansi = $item->where('surat_id', $surat->id)->where('tipe', 'instansi')->first();
$keterangan = $item->where('surat_id', $surat->id)->where('tipe', 'keterangan')->first();
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
    <link href="{{ asset('/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/datatables/dataTables.colVis.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/datatables/fixedColumns.dataTables.min.css') }}" rel="stylesheet" type="text/css" />

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
                            <img src="{{ asset('assets_/images/logo_uin.png') }}" class="img-responsive"
                                style="width: 80px;">
                        </div>
                        <div class="text-center col-md-10" style="margin-left: -50px;">
                            <p>
                                <span style="font-size: 18px; font-weight: bold;">
                                    KEMENTERIAN AGAMA<br>
                                    UNIVERSITAS ISLAM NEGERI ALAUDDIN MAKASSAR<br>
                                    FAKULTAS SAINS DAN TEKNOLOGI<br>
                                </span>
                                <span style="font-size: 13px;">
                                    Kampus I: Jl. Sultan Alauddin No.63 Makassar | (0411) 868720, Fax. (0411) 864923
                                    <br>
                                    Kampus II: Jl. H.M. Yasin Limpo No.36, Romangpolong-Gowa | 1500363, (0411) 841879,
                                    Fax. (0411) 8221400
                                </span>
                            </p>
                        </div>
                    </div>
                    <div style="border-top: 2px solid"><br></div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <b>LAMPIRAN</b> <br><br>
                            <b>NOMOR</b> <br>
                            <b>NOMOR</b> <br>
                            <b>TANGGAL</b> <br>
                        </div>
                        <div class="col-md-9">
                            : <b>SURAT EDARAN BERSAMA MENTERI KEUANGAN DAN KEPALA <br>
                                &ensp;&nbsp;ADMINISTRASI KEUANGAN NEGARA</b><br>
                            : <b>SE.1.38/DJ/1.0/80 (NO.SE/117/80)</b><br>
                            : <b>19/SE/1980</b><br>
                            : <b>07 JULI 1980</b><br><br>
                        </div>
                        <div class="col-md-12" style="text-align: center;">
                            <b style="border-bottom: 1.5px solid;">SURAT PERNYATAAN MASIH AKTIF KULIAH</b><br>
                            <b>Nomor:
                                {{ $surat->no_surat }}/Un.06/FST/PP.{{ date('d/m/y', strtotime($surat->tggl_surat)) }}</b><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10" style="padding-left: 20px;">
                            <div class="row m-t-20">
                                <div class="col-md-12">Yang bertanda tangan di bawah ini :</div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3">1. Nama</div>
                                <div class="col-md-8">: Prof. Dr. Muhammad Halifah Mustami, M.Pd</div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3">2. NIP</div>
                                <div class="col-md-8">: 19710412 200003 1 001</div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3">3. Pangkat</div>
                                <div class="col-md-8">: Pembina Utama ( IV/c )</div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3">4. Jabatab</div>
                                <div class="col-md-8">: Dekan</div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3">5. Fakultas</div>
                                <div class="col-md-8">: Sains & Teknologi UIN Alauddin Makassar</div>

                                <div class="col-md-12">Menyatakan dengan sesungguhnya :</div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3">6. Nama</div>
                                <div class="col-md-8">: {{ $mhs->nama }}</div>

                                <div class="col-md-12">Adalah benar mahasiswa :</div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3">7. Pada Fakultas</div>
                                <div class="col-md-8">: Sains & Teknologi UIN Alauddin Makassar</div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3">8. Jurusan</div>
                                <div class="col-md-8">: {{ $mhs->jurusan }}</div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3">9. Nim</div>
                                <div class="col-md-8">: {{ $mhs->nim }}</div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3 p-0"> 10. Pada Tahun Akademik</div>
                                <div class="col-md-8">: {{ date('Y') }}</div>

                                <div class="col-md-12">Dan bahwa wali anak tersebut :</div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3 p-0">11. Nama</div>
                                <div class="col-md-8 form-inline">: {{ $nama_wali->item_surat }}</div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3 p-0">12. Nip/BN</div>
                                <div class="col-md-8 form-inline">: {{ $nip->item_surat }}</div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3 p-0">13. Jabatan/Golongan</div>
                                <div class="col-md-8 form-inline">: {{ $jabatan->item_surat }}</div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3 p-0">14. Instansi/Pensiun</div>
                                <div class="col-md-8 form-inline">: {{ $instansi->item_surat }}</div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3 p-0">15. Keterangan</div>
                                <div class="col-md-8 form-inline">: {{ $keterangan->item_surat }}</div>
                            </div>
                            <div class="text-justify m-t-20">
                                <p>
                                    Demikian Surat Pernyataan ini dibuat dengan sesungguhnya, dan apabila dikemudian
                                    hari Surat Pernyataan ini tidak benar yang mengakibatkan <b>kerugian terhadap Negara
                                        Republik Indonesia,</b> maka saya bersedia menanggung kerugian tersebut.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6" style="padding-left: 50px;">
                            <p>Wassalama</p>
                            <p>
                                Dekan <br>
                                Tanggal {{ date('d F Y', strtotime($surat->tggl_surat)) }}
                            </p>
                            <p style="margin-top: 50px;">
                                <b>Prof. Dr. Muhammad Halifah Mustami, M.Pd</b><br>
                                NIP: 19710412 200003 1 001
                            </p>
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
    <script src="{{ asset('/plugins/printarea/jquery.PrintArea.js') }}" type="text/JavaScript" language="javascript">
    </script>

    <script type="text/javascript">
        $(document).ready(function () {    
			window.print();
		});

    </script>



    @yield('javascript')

</body>

</html>