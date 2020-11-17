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
    return view('welcome');
});

Route::get('/mahasiswa','MahasiswaController@index')->name('mahasiswa.index')->middleware('auth');

Route::get('/mahasiswa/create','MahasiswaController@create')->name('mahasiswa.create')->middleware('auth');

route::post('/mahasiswa','MahasiswaController@store')->name('mahasiswa.store');

route::get('/mahasiswa/{mahasiswa}','MahasiswaController@detail')->name('mahasiswa.detail')->middleware('auth');

route::get('/mahasiswa/{mahasiswa}/edit','MahasiswaController@edit')->name('mahasiswa.edit')->middleware('auth');

route::put('/mahasiswa/{mahasiswa}','MahasiswaController@update')->name('mahasiswa.update');

route::delete('/mahasiswa/{mahasiswa}','MahasiswaController@delete')->name('mahasiswa.delete')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
