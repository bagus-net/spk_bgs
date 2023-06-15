<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'kriteria'], function () {
	Route::get('/', 'KriteriaController@index');
	Route::post('/tambah', 'KriteriaController@insert');
	Route::get('/edit/{id}', 'KriteriaController@edit');
	Route::post('/update', 'KriteriaController@update');
	Route::get('/hapus/{id}', 'KriteriaController@delete');
});

Route::group(['prefix' => 'alternatif'], function () {
	Route::get('/', 'AlternatifController@index');
	Route::get('/penilaian/{alternatif}', 'AlternatifController@value');
	Route::post('/nilai_simpan', 'AlternatifController@store');
	Route::get('/detail/{id}', 'AlternatifController@show');
	Route::post('/tambah', 'AlternatifController@insert');
	Route::get('/edit/{id}', 'AlternatifController@edit');
	Route::post('/update', 'AlternatifController@update');
	Route::get('/hapus/{id}', 'AlternatifController@delete');
});

Route::group(['prefix' => 'user'], function () {
	Route::get('/', 'UserController@index');
	Route::post('/tambah', 'UserController@insert');
	Route::get('/edit/{id}', 'UserController@edit');
	Route::post('/update', 'UserController@update');
	Route::get('/hapus/{id}', 'UserController@delete');
});

Route::get('hasil', 'HasilController@index');
