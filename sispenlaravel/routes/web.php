<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'MahasiswaController@index');
Route::get('/matakuliah', 'MatakuliahController@getMatakuliah');
Route::get('/matakuliah/detailMatakuliah/{id}', 'MatakuliahController@detailMatakuliah');

Route::get('/mahasiswa', 'MahasiswaController@getMahasiswa');
Route::get('/mahasiswa/detailMahasiswa/{id}', 'MahasiswaController@detailMahasiswa');

Route::get('/dosen', 'DosenController@getDosen');
Route::get('/dosen/detailDosen/{id}', 'DosenController@detailDosen');

Route::get('/nilai', 'NilaiController@getNilai');
Route::get('/nilai/detailNilai/{id}', 'NilaiController@detailNilai');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/mahasiswauser', 'HomeController@userGetMahasiswa');
Route::get('/home/userDetailMahasiswa/{id}', 'HomeController@detailMahasiswa');
Route::get('/home/userTambahMahasiswa', 'HomeController@tambahMahasiswa');
Route::post('/home/userSimpanMahasiswa', 'HomeController@simpanMahasiswa');
Route::get('/home/userDeleteMahasiswa/{id}', 'HomeController@userDeleteMahasiswa');
Route::get('/home/userEditMahasiswa/{id}', 'HomeController@userEditMahasiswa');
Route::post('/home/userUpdateMahasiswa', 'HomeController@userUpdateMahasiswa');

Route::get('/home/matakuliahuser', 'HomeController@userGetMatakuliah');
Route::get('/home/userDetailMatakuliah/{id}', 'HomeController@detailMatakuliah');
Route::get('/home/userTambahMatakuliah', 'HomeController@tambahMatakuliah');
Route::post('/home/userSimpanMatakuliah', 'HomeController@simpanMatakuliah');
Route::get('/home/userDeleteMatakuliah/{id}', 'HomeController@userDeleteMatakuliah');
Route::get('/home/userEditMatakuliah/{id}', 'HomeController@userEditMatakuliah');
Route::post('/home/userUpdateMatakuliah', 'HomeController@userUpdateMatakuliah');

Route::get('/home/dosenuser', 'HomeController@userGetDosen');
Route::get('/home/userDetailDosen/{id}', 'HomeController@detailDosen');
Route::get('/home/userTambahDosen', 'HomeController@tambahDosen');
Route::post('/home/userSimpanDosen', 'HomeController@simpanDosen');
Route::get('/home/userDeleteDosen/{id}', 'HomeController@userDeleteDosen');
Route::get('/home/userEditDosen/{id}', 'HomeController@userEditDosen');
Route::post('/home/userUpdateDosen', 'HomeController@userUpdateDosen');

Route::get('/home/nilaiuser', 'HomeController@userGetNilai');
Route::get('/home/userDetailNilai/{id}', 'HomeController@detailNilai');
Route::get('/home/userTambahNilai', 'HomeController@tambahNilai');
Route::post('/home/userSimpanNilai', 'HomeController@simpanNilai');
Route::get('/home/userDeleteNilai/{id}', 'HomeController@userDeleteNilai');
Route::get('/home/userEditNilai/{id}', 'HomeController@userEditNilai');
Route::post('/home/userUpdateNilai', 'HomeController@userUpdateNilai');
