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

Route::get('/index', function () {
    return view('index');
});
Route::get('/coffee', function () {
    return view('coffee');
});
Route::get('/cake', function () {
    return view('cake');
});
Route::get('halaman/tambah','contoh@tambah'); //file get tidak mau ditaruh bawah resource
//function tambah tidak ada di resource jadu ditambahkan sendiri
Route::resource('halaman','contoh');
Route::resource('/mahasiswa','mahasiswa');
Route::resource('user','user');
Route::resource('file','File');
Route::resource('barang','barang');
Route::resource('barang','barang');