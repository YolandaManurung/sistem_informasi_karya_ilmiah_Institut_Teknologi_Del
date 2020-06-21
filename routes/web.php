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
use Illuminate\Http\Request;

Route::get('/', function () { 
    return view('index');
});

Route::get('/homecivitas', 'HomeController@home');
Route::get('/civitaseditprofile', 'CivitasController@civitaseditprofile');
Route::get('/civitasprofile', 'CivitasController@civitasprofile');
Route::get('/civitaskaryailmiah', 'CivitasController@civitaskaryailmiah');
Route::get('/civitaspenulis', 'CivitasController@civitaspenulis');
Route::get('/civitastentang', 'CivitasController@civitastentang');
Route::get('/civitasprodi', 'CivitasController@civitasprodi');

Route::get('/Tentang','TentangController@About');
Route::get('/karyailmiah' , 'KaryailmiahController@index');
Route::get('/penulis' , 'PenulisController@index');
Route::post('/proses_login', 'AutentikasiController@login');
Route::get('/prodi' , 'ProdiController@prodi');
Route::get('/viewprodi' , 'ViewProdiController@viewprodi');
Route::get('/civitasrequest' , 'CivitasController@civitasrequest');
Route::get('/login', function () {
    return view('login');
});

Route::get('/Publikasi' , 'PublikasiController@index')->name('Publikasi.index');
Route::get('/tambah' , 'PublikasiController@create')->name('Publikasi.create');
Route::PUT('/store' , 'PublikasiController@store')->name('Publikasi.store');

Route::get('/FormAddKaryaAdmin', 'CivitasController1@index');
Route::post('/upload/proses','CivitasController1@UploadFiles')->name('upload');

Route::get('/homeadmin', 'HomeController@homeadmin');
Route::get('/admin/koleksi' , 'AdminController@adminkoleksi');
Route::get('/admin/tentang' , 'AdminController@admintentang');
Route::get('/admin/prodi' , 'AdminController@adminprodi');
Route::get('/admin/penulis', 'AdminController@adminpenulis');
Route::get('/rejected','AdminController@getAllReject');
Route::get('/files/reject/{id}','AdminController@reject');
Route::get('/files/publish/{id}','AdminController@publish');
Route::get('/files/download/{file}', 'AdminController@download')->name('downloadfile');
Route::get('/files/unduh/{file}', 'AdminController@unduh')->name('unduhfile');
Route::get('/adminprofile', 'AdminController@index')->name('admin.index');
Route::get('/admin/admineditprofile/{id}', 'AdminController@edit')->name('admin.edit');
Route::PUT('/adminprofile/{id}', 'AdminController@update')->name('admin.update');

Route::get('/sisteminformasi', 'AdminController@sisteminformasi')->name('adminprodi.sisteminformasi');
Route::get('/informatika', 'AdminController@informatika')->name('adminprodi.informatika');
Route::get('/teknologikomputer', 'AdminController@teknologikomputer')->name('adminprodi.teknologikomputer');
Route::get('/teknikelektro', 'AdminController@teknikelektro')->name('adminprodi.teknikelektro');
Route::get('/trpl', 'AdminController@trpl')->name('adminprodi.trpl');
Route::get('/teknologiinformasi', 'AdminController@teknologiinformasi')->name('adminprodi.teknologiinformasi');
Route::get('/manajemenrekayasa', 'AdminController@manajemenrekayasa')->name('adminprodi.manajemenrekayasa');
Route::get('/teknikbioproses', 'AdminController@teknikbioproses')->name('adminprodi.teknikbioproses');

Route::get('/informasi' , 'CivitasController@informasi')->name('civitasprodi.informasi');
Route::get('/elektro' , 'CivitasController@elektro')->name('civitasprodi.elektro');
Route::get('/ti' , 'CivitasController@ti')->name('civitasprodi.ti');
Route::get('/teknologirekayasa' , 'CivitasController@teknologirekayasa')->name('civitasprodi.teknologirekayasa');
Route::get('/d3ti' , 'CivitasController@d3ti')->name('civitasprodi.d3ti');
Route::get('/komputer' , 'CivitasController@komputer')->name('civitasprodi.komputer');
Route::get('/bioproses' , 'CivitasController@bioproses')->name('civitasprodi.bioproses');
Route::get('/mr' , 'CivitasController@mr')->name('civitasprodi.mr');

Route::get('/s1teknikelektro', 'ProdiController@s1te')->name('visitorprodi.s1te');
Route::get('/s1sisteminformasi', 'ProdiController@s1si')->name('visitorprodi.s1si');
Route::get('/s1manajemenrekayasa', 'ProdiController@s1mr')->name('visitorprodi.s1mr');
Route::get('/s1informatika', 'ProdiController@s1info')->name('visitorprodi.s1info');
Route::get('/s1teknikbioproses', 'ProdiController@s1bp')->name('visitorprodi.s1bp');
Route::get('/d3teknologiinformasi', 'ProdiController@diplomati')->name('visitorprodi.diplomati');
Route::get('/d4trpl', 'ProdiController@d4trpl')->name('visitorprodi.d4trpl');
Route::get('/d3teknologikomputer', 'ProdiController@d3tk')->name('visitorprodi.d3tk');