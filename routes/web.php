<?php

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function(){

	Route::middleware('admin_saja')->group(function(){

		Route::get('/karyawan', 'KaryawanController@index')->name('karyawan');
		Route::get('/karyawan/tambah', 'KaryawanController@create')->name('karyawan.create');
		Route::post('/karyawan', 'KaryawanController@store')->name('karyawan.store');

		Route::get('/gaji', 'GajiController@index')->name('gaji');
		Route::get('/cek-gaji', 'GajiController@cek');
		Route::post('/gaji-baru', 'GajiController@store')->name('gaji-baru.store');

		Route::get('/kalimat-bijak', 'KalimatBijakController@index')->name('kalimat-bijak');

		Route::get('/ubah-username', 'UsernameController@edit')->name('ubah-username');
		Route::put('/ubah-username', 'UsernameController@update')->name('update-username');

		Route::get('/gaji-impor-dari-excel', 'GajiController@imporExcel')->name('impor-excel');
		Route::post('/gaji-impor-dari-excel', 'GajiController@imporPost')->name('impor-excel.post');
		Route::get('/gaji-baru', 'GajiController@baru')->name('gaji-baru');

	});

	Route::get('/gaji-saya', 'GajiController@saya')->name('gaji-saya');
	Route::get('/slip/{id}', 'GajiController@slip')->name('slip');

	Route::get('/ubah-password', 'PasswordController@edit')->name('ubah-password');
	Route::put('/ubah-password', 'PasswordController@update')->name('update-password');

});