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

// Route::get('/siswa', function(){
//     return "Selamat Datang...!";
// });

// Route::get('/guru', function(){
//     return "Selamat Datang Guru...!";
// });

// Route::get('/siswa/{id}', function($id){
//     return "Selamat Datang " . $id;
// });
// Route::get('/karyawan/{id?}', function($id=null){
//     return "Selamat Datang Karyawan " .$id;
// });

// Route::get('/home', function(){
//     return view('home');
//});

Route::get('/pegawai', 'PegawaiController@index');

Route::get('/suster', 'SusterController@index');
Route::get('/dokter', 'DokterController@about');
Route::get('/karyawan', 'KaryawanController@home');
Route::get('/karyawati', 'KaryawatiController@index');
Route::get('/mahasiswa', 'MahasiswaController@about');