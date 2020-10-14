@extends('admin.wd.template')

@section('konten')
<div class="row">
  <div class="col-lg-12">
    <div class="card-box">
      <div class="text-center">
        <h2>Sistem Informasi Persuratan</h2>
        <h2>Fakultas Sains dan Teknologi</h2>
        <h2>Universitas Islam Negeri Alauddin Makassar</h2>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-color panel-inverse">
              <div class="panel-heading">
                <h2 class="panel-title text-center">Selamat Datang di Halaman Admin Wakil Dekan</h2>
              </div>
              <div class="panel-body">
                <h4 class="text-center">Halo <b>{{ Auth::user()->nama }}</b> Selamat datang di Sistem Informasi Persuratan FST-UINAM</h4><br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection