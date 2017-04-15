<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(array('prefix' => 'admin'), function(){
  Route::resource('/kecamatan','KecamatanController',['except' => ['show']]); // seharusnya method 'show' tidak ada
  Route::delete('kecamatan/delete/{kecamatan}','KecamatanController@destroy');

  Route::resource('/puskesmas','PuskesmasController',['except' => ['show']]); // seharusnya method 'show' tidak ada
  Route::delete('puskesmas/delete/{puskesmas}','PuskesmasController@destroy');

  Route::resource('/kelurahan','KelurahanController',['except' => ['show']]); // seharusnya method 'show' tidak ada
  Route::delete('kelurahan/delete/{kelurahan}','KelurahanController@destroy');

  Route::resource('/pegawai','PegawaiController',['except' => ['show']]); // seharusnya method 'show' tidak ada
  Route::delete('pegawai/delete/{pegawai}','PegawaiController@destroy');

  Route::resource('/satuankecil','SatuanKecilController',['except' => ['show']]); // seharusnya method 'show' tidak ada
  Route::delete('satuankecil/delete/{pegawai}','SatuanKecilController@destroy');

  Route::resource('/satuanbesar','SatuanBesarController',['except' => ['show']]); // seharusnya method 'show' tidak ada
  Route::delete('satuanbesar/delete/{pegawai}','SatuanBesarController@destroy');

  Route::resource('/jenisobat','JenisObatController',['except' => ['show']]); // seharusnya method 'show' tidak ada
  Route::delete('jenisobat/delete/{pegawai}','JenisObatController@destroy');

  Route::resource('/terapiobat','TerapiObatController',['except' => ['show']]); // seharusnya method 'show' tidak ada
  Route::delete('terapiobat/delete/{pegawai}','TerapiObatController@destroy');

  Route::resource('/golonganobat','GolonganObatController',['except' => ['show']]); // seharusnya method 'show' tidak ada
  Route::delete('golonganobat/delete/{pegawai}','GolonganObatController@destroy');

  Route::resource('/obat','ObatController',['except' => ['show']]); // seharusnya method 'show' tidak ada
  Route::delete('obat/delete/{pegawai}','ObatController@destroy');

  // ajax route to get list of kelurahan
  Route::get('/listkelurahan/{id}','PuskesmasController@listKelurahan');
});
