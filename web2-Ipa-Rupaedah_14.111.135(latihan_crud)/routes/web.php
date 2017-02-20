<?php
use App\Mahasiswa;
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

Route::get('/', 'Viewcontroller2@index');
Route::get('/halamanawal', 'Viewcontroller2@halamanawal');
Route::get('/edit', 'Viewcontroller2@edit');
Route::get('/tambah', 'Viewcontroller2@tambah');
Route::get('/tambih',function(){
	$mahasiswa = new Mahasiswa;
	$mahasiswa -> nama ="Ipa Rupaedah";
	$mahasiswa -> nim = "14111135";
	$mahasiswa -> alamat ="Majalaya";
$mahasiswa -> save ();
});
Route::get('/ubah',function(){
	$mahasiswa = mahasiswa::find(5);
	$mahasiswa -> nama ="Thaufiq umardi ganteng";
	$mahasiswa -> nim = "14111135";
	$mahasiswa -> alamat ="Majalaya";
$mahasiswa -> save();
echo "berhasil ubah";});
Route :: get ('/hapus', function ()
{
	$mahasiswa= Mahasiswa::find(1);
	$mahasiswa -> delete();
});
