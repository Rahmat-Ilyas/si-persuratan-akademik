@extends('admin.pfu.template')

@section('konten')
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="text-center">
                <h2>Daftar Mahasiswa</h2>
            </div>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="{{ url('admin/pfu/mahasiswa/tambahmahasiswa') }}" role="button"
                            class="btn btn-primary waves-effect waves-light m-b-20"><i
                                class="fa fa-plus"></i>&nbsp;Tambah Mahasiswa</a>
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nim</th>
                                    <th>Jurusan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mahasiswa as $i => $mhs)
                                <tr>
                                    <td>{{ $i+1 }}</td>
                                    <td>{{ $mhs->nama }}</td>
                                    <td>{{ $mhs->nim }}</td>
                                    <td>{{ $mhs->jurusan }}</td>
                                    <td class="text-center">
                                        <a href="javascript:;" role="button" data-toggle="modal"
                                            data-target="#con-close-modal{{$mhs->id}}"
                                            class="btn btn-success waves-effect waves-light" data-toggle1="tooltip"
                                            title="Edit"><i class="fa fa-edit"></i></a>
                                        <a href="javascript:;" role="button" data-toggle="modal"
                                            data-target="#con-close-modalp{{$mhs->id}}"
                                            class="btn btn-primary waves-effect waves-light" data-toggle1="tooltip"
                                            title="Ubah Password"><i class="fa fa-key"></i></a>
                                        <a href="javascript:;" role="button" data-toggle="modal"
                                            data-target="#hapus{{$mhs->id}}"
                                            class="btn btn-danger waves-effect waves-light" data-toggle1="tooltip"
                                            title="Hapus"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                {{-- Edit Modal --}}
                                <div id="con-close-modal{{$mhs->id}}" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                                <h4 class="modal-title">Edit Mahasiswa</h4>
                                            </div>
                                            <form class="form-horizontal" role="form" method="POST"
                                                action="{{ url('admin/pfu/mahasiswa/editmahasiswa/'.$mhs->id) }}">
                                                <div class="modal-body">
                                                    {{ csrf_field() }}
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-2">Nama</label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" name="nama"
                                                                    value="{{ $mhs->nama }}"> <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-2">Nim</label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" name="nim"
                                                                    value="{{ $mhs->nim }}"> <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-2">Jurusan</label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" name="jurusan"
                                                                    value="{{ $mhs->jurusan }}"> <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect"
                                                        data-dismiss="modal">Batal</button>
                                                    <button type="submit"
                                                        class="btn btn-success waves-effect waves-light">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                {{-- Modal Ganti Password --}}
                                <div id="con-close-modalp{{$mhs->id}}" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                                <h4 class="modal-title">Ubah Password</h4>
                                            </div>
                                            <form class="form-horizontal" role="form" method="POST"
                                                action="{{ url('admin/pfu/mahasiswa/editmahasiswa/'.$mhs->id) }}">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-md-12"> <br>
                                                        <div class="form-group">
                                                            <label class="control-label">Password Baru</label>
                                                            <input type="text" class="form-control" name="password"
                                                                placeholder="Password Baru">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect"
                                                        data-dismiss="modal">Batal</button>
                                                    <button type="submit"
                                                        class="btn btn-info waves-effect waves-light">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                {{-- Modal Hapus --}}
                                <div id="hapus{{$mhs->id}}" class="modal fade bs-example-modal-sm" tabindex="-1"
                                    role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                                <h5 class="modal-title" id="mySmallModalLabel">Konfirmasi Hapus</h5>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                    Lanjutkan menghapus mahasiswa ini?<br>
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <form method="POST"
                                                    action="{{ url('admin/pfu/mahasiswa/hapusmahasiswa/'.$mhs->id) }}">
                                                    {{ csrf_field() }}
                                                    <button type="button" class="btn btn-default waves-effect"
                                                        data-dismiss="modal">Batal</button>
                                                    <button type="submit"
                                                        class="btn btn-danger waves-effect">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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
<script type="text/javascript">
    $(document).ready(function() {
		$('[data-toggle1="tooltip"]').tooltip();
	});
</script>
@endsection