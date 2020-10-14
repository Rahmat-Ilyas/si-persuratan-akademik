<?php
// Admin
Route::group(['prefix' => 'admin'], function () {
	Route::get('/login', 'Auth\LoginAdminController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\LoginAdminController@login')->name('admin.login.submit');
	Route::get('/logout', 'Auth\LoginAdminController@logout')->name('admin.logout');
	Route::get('/', 'AdminController@home')->name('admin.home');

	// PFU
	Route::group(['middleware' => 'pfu'], function () {
		Route::get('/pfu/buatsurat', 'AdminController@surat');
		Route::get('/pfu/buatsurat/{page}/{id}', 'AdminController@buatsurat');
		Route::post('/pfu/buatsurat/store', 'AdminController@storeitem');
		Route::get('/pfu/datasurat/suratditolak', 'AdminController@suratditolak');
		Route::get('/pfu/datasurat/arsipsurat', 'AdminController@arsipsurat');
		Route::get('/pfu/datasurat/suratdibuat', 'AdminController@suratdibuat');
		Route::get('/pfu/suratselesai', 'AdminController@suratselesai');
		Route::get('/pfu/surat/konfirmasi/{id}', 'AdminController@konfirmasi');
		Route::get('/pfu/surat/cetak/{page}/{id}', 'AdminController@cetak');
		// Mahasiswa
		Route::get('/pfu/mahasiswa/datamahasiswa', 'AdminController@datamahasiswa');
		Route::get('/pfu/mahasiswa/tambahmahasiswa', 'AdminController@tambahmahasiswa');
		Route::post('/pfu/mahasiswa/tambahmahasiswa', 'AdminController@storemahasiswa');
		Route::post('/pfu/mahasiswa/editmahasiswa/{id}', 'AdminController@editmahasiswa');
		Route::post('/pfu/mahasiswa/hapusmahasiswa/{id}', 'AdminController@hapusmahasiswa');
	});

	// KASUBAG
	Route::group(['middleware' => 'kasubag'], function () {
		Route::get('/kasubag/permintaansurat', 'AdminController@permintaansurat');
		Route::get('/kasubag/setuju/{id}', 'AdminController@setuju');
		Route::post('/kasubag/tolak', 'AdminController@tolak');
		Route::get('/kasubag/riwayat/{status}', 'AdminController@riwayat');
	});

	// KABAG
	Route::group(['middleware' => 'kabag'], function () {
		Route::get('/kabag/permintaan', 'AdminController@permintaan');
		Route::get('/kabag/verif/{id}', 'AdminController@verif');
		Route::get('kabag/riwayatverif', 'AdminController@riwayatverif');
	});

	// WAKIL DEKAN
	Route::group(['middleware' => 'wd'], function () {
		Route::get('/wd/permintaan', 'AdminController@permintaan_');
		Route::get('/wd/paraf/{page}/{id}', 'AdminController@parafsurat');
		Route::post('/wd/paraf/store', 'AdminController@storeparaf');
		Route::get('/wd/suratdiparaf', 'AdminController@suratdiparaf');
	});

	// DEKAN
	Route::group(['middleware' => 'dekan'], function () {
		Route::get('/dekan/permintaan', 'AdminController@ttdsurat');
		Route::get('/dekan/ttd/{page}/{id}', 'AdminController@ttd');
		Route::post('/dekan/ttd/store', 'AdminController@storettd');
		Route::get('/dekan/suratdittd', 'AdminController@suratdittd');
	});
});

// Mahasiswa
Auth::routes();
Route::get('/', 'MahasiswaController@home')->name('home');
Route::get('{page}', 'MahasiswaController@url');
Route::get('persyaratan/{jenis}', 'MahasiswaController@persyaratan');
Route::post('persyaratan/store', 'MahasiswaController@store');
