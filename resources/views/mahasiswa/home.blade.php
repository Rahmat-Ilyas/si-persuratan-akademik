@extends('mahasiswa.template')

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
                <h2 class="panel-title text-center">Selamat Datang</h2>
              </div>
              <div class="panel-body">
                <h4 class="text-center">Halo <b>{{ Auth::user()->nama }}</b> Selamat datang di Sistem Informasi Persuratan FST-UINAM</h4><br>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="panel panel-color panel-inverse">
              <div class="panel-heading">
                <h3 class="panel-title text-center">Apa itu Sistem Informasi Persuratan?</h3>
              </div>
              <div class="panel-body">
                <div class="text-justify">
                  <p>
                    &emsp;&emsp;Sistem informasi persuratan adalah sebuah aplikasi berbasis web yang diperuntukkan bagi semua mahasiswa Sains dan Teknologi yang ingin mengurus surat. Dengan menggunakan aplikasi ini, mahasiswa dapat megajukan surat secara online tanpa harus datang di ruangna fakultas Sains dan Teknologi.
                  </p>
                  <p>
                    &emsp;&emsp;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="panel panel-color panel-inverse">
              <div class="panel-heading">
                <h3 class="panel-title text-center">Bagaimana saya menggunakan sistem ini?</h3>
              </div>
              <div class="panel-body">
                <p class="text-justify">
                  &emsp;&emsp;Bagi mahasiswa yang ingin mengurus surat menggunakan sistem aplikasi ini dapat mengikuti langkah-lagkah sebagai berikut:
                  <ol>
                    <li>Login menggunakan Nim dan Password masing-masing.</li>
                    <li>Pilih Menu "Buat Surat" di panel navigasi.</li>
                    <li>Kemudian akan diarahkan ke halaman untuk memilih jenis surat yang ingin diajukan untuk dibuat.</li>
                    <li>Pilih salah satu jenis surat yang ingin diajukan.</li>
                    <li>Setelah memilih jenis surat kemudian akan diarahkan ke halaman untuk melengkapi berkas persyaratan pembuatan surat.</li>
                    <li>Upload berkas persyaratan yang di minta (persyaratan berbeda-beda tergantung jenis surat yang di pilih).</li>
                    <li>Surat yang kamu ajukan akan di proses oleh sistem. Tunggu sampai proses selesai.</li>
                    <li>Setelah proses selesai kamu akana mendapat notifikasi dan sudah bisa mengambil surat di ruangan fakultas Sains dan Teknologi.</li>
                  </ol>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection