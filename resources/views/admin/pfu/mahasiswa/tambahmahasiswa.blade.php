@extends('admin.pfu.template')

@section('konten')
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="text-center">
                <h2>Tambah Mahasiswa</h2>
            </div>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-6">
                        <form class="form-horizontal" role="form" method="POST"
                            action="{{ url('admin/pfu/mahasiswa/tambahmahasiswa') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-md-2 control-label">Nama</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama" class="form-control" autocomplete="off"
                                        placeholder="Nama">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">NIM</label>
                                <div class="col-md-10">
                                    <input type="text" name="nim" class="form-control" autocomplete="off"
                                        placeholder="NIM">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Jurusan</label>
                                <div class="col-md-10">
                                    <input type="text" name="jurusan" class="form-control" autocomplete="off"
                                        placeholder="Jurusan">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <button class="btn btn-primary waves-effect waves-light"
                                        type="submit">Simpan</button>
                                    <a href="{{ url('admin/pfu/mahasiswa/datamahasiswa') }}" role="button"
                                        class="btn btn-default waves-effect waves-light m-l-5">Batal</a>
                                </div>
                            </div>
                        </form>
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
<script type="text/javascript">
    $(document).ready(function() {
		$('[data-toggle1="tooltip"]').tooltip();
	});
</script>
@endsection