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

Route::get('/tambah', function () {
	$mahasiswa = new mahasiswa;
	$mahasiswa -> nama ="Ipa Rupaedah";
	$mahasiswa -> nim = "14111135";
	$mahasiswa -> alamat ="Majalaya";
$mahasiswa -> save ();});

