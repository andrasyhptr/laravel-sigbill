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

//UTAMA
Route::get('/', array('as' => 'map.home', 'uses' => 'MapController@index'));
Route::get('/distanceMatrix', array('as' => 'map.distance.matrix', 'uses' => 'MapController@getDistanceMatrix'));
Route::get('/peta', array('as' => 'map.kecamatan', 'uses' => 'MapController@kecamatan')); 
Route::get('/map/kecamatan/{id}', array('as' => 'map.kecamatan.detail', 'uses' => 'MapController@kecamatandetail')); 
Route::get('/daftar', array('as' => 'map.kategori', 'uses' => 'MapController@kategori'));
Route::get('/map/kategori/{id}', array('as' => 'map.kategori.detail', 'uses' => 'MapController@kategoridetail'));
Route::get('/tentang', array('as' => 'map.directions', 'uses' => 'MapController@directions'));
Route::get('/map/direction/{id}', array('as' => 'map.direction', 'uses' => 'MapController@direction'));
Route::get('/deteksi-lokasi', array('as' => 'detect-map', 'uses' => 'MapController@geolocation'));

//Authentication process
Route::get('auth/login', array('as' => 'login', 'uses' => 'Auth\AuthController@getLogin'));
Route::post('auth/login', array('as' => 'login', 'uses' => 'Auth\AuthController@postLogin'));
Route::get('auth/logout', array('as' => 'logout', 'uses' => 'Auth\AuthController@getLogout'));

Route::group(['middleware' => 'auth'], function() {
	Route::get('admin', array('as' => 'home', 'uses' => 'AdminController@index'));

	//CRUD USER
	Route::get('admin/user', array('as' => 'user.index', 'uses' => 'AdminController@user'));
	Route::get('admin/user/create', array('as' => 'user.create', 'uses' => 'AdminController@create'));
	Route::post('admin/user', array('as' => 'user.store', 'uses' => 'AdminController@store'));
	Route::get('admin/user/{id}', array('as' => 'user.show', 'uses' => 'AdminController@show'));
	Route::get('admin/user/{id}/edit', array('as' => 'user.edit', 'uses' => 'AdminController@edit'));
	Route::put('admin/user/{id}', array('as' => 'user.update', 'uses' => 'AdminController@update'));
	Route::get('admin/user/delete/{id}', array('as' => 'user.delete', 'uses' => 'AdminController@destroy'));
	
	//CRUD kecamatan
	Route::get('admin/kecamatan', array('as' => 'kecamatan.index', 'uses' => 'KecamatanController@index'));
	Route::get('admin/kecamatan/create', array('as' => 'kecamatan.create', 'uses' => 'KecamatanController@create'));
	Route::post('admin/kecamatan', array('as' => 'kecamatan.store', 'uses' => 'KecamatanController@store'));
	Route::get('admin/kecamatan/{id_status}', array('as' => 'kecamatan.show', 'uses' => 'KecamatanController@show'));
	Route::get('admin/kecamatan/{id_status}/edit', array('as' => 'kecamatan.edit', 'uses' => 'KecamatanController@edit'));
	Route::put('admin/kecamatan/{id_status}', array('as' => 'kecamatan.update', 'uses' => 'KecamatanController@update'));
	Route::get('admin/kecamatan/delete/{id_status}', array('as' => 'kecamatan.delete', 'uses' => 'KecamatanController@destroy'));

	//CRUD kategori
	Route::get('admin/kategori', array('as' => 'kategori.index', 'uses' => 'KategoriController@index'));
	Route::get('admin/kategori/create', array('as' => 'kategori.create', 'uses' => 'KategoriController@create'));
	Route::post('admin/kategori', array('as' => 'kategori.store', 'uses' => 'KategoriController@store'));
	Route::get('admin/kategori/{id}', array('as' => 'kategori.show', 'uses' => 'KategoriController@show'));
	Route::get('admin/kategori/{id}/edit', array('as' => 'kategori.edit', 'uses' => 'KategoriController@edit'));
	Route::put('admin/kategori/{id}', array('as' => 'kategori.update', 'uses' => 'KategoriController@update'));
	Route::get('admin/kategori/delete/{id}', array('as' => 'kategori.delete', 'uses' => 'KategoriController@destroy'));

	//CRUD jenis
	Route::get('admin/jenis', array('as' => 'jenis.index', 'uses' => 'JenisController@index'));
	Route::get('admin/jenis/create', array('as' => 'jenis.create', 'uses' => 'JenisController@create'));
	Route::post('admin/jenis', array('as' => 'jenis.store', 'uses' => 'JenisController@store'));
	Route::get('admin/jenis/{id}', array('as' => 'jenis.show', 'uses' => 'JenisController@show'));
	Route::get('admin/jenis/{id}/edit', array('as' => 'jenis.edit', 'uses' => 'JenisController@edit'));
	Route::put('admin/jenis/{id}', array('as' => 'jenis.update', 'uses' => 'JenisController@update'));
	Route::get('admin/jenis/delete/{id}', array('as' => 'jenis.delete', 'uses' => 'JenisController@destroy'));

	//CRUD INFO
	Route::get('admin/info', array('as' => 'info.index', 'uses' => 'InfoController@index'));
	Route::get('admin/info/create', array('as' => 'info.create', 'uses' => 'InfoController@create'));
	Route::post('admin/info', array('as' => 'info.store', 'uses' => 'InfoController@store'));
	Route::get('admin/info/{id}', array('as' => 'info.show', 'uses' => 'InfoController@show'));
	Route::get('admin/info/{id}/edit', array('as' => 'info.edit', 'uses' => 'InfoController@edit'));
	Route::put('admin/info/{id}', array('as' => 'info.update', 'uses' => 'InfoController@update'));
	Route::get('admin/info/delete/{id}', array('as' => 'info.delete', 'uses' => 'InfoController@destroy'));
});