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

Route::get('/', 'Viewcontroller2@index');
Route::get('/halamanawal', 'Viewcontroller2@halamanawal');
Route::get('/edit', 'Viewcontroller2@edit');
Route::get('/tambah', 'Viewcontroller2@tambah');
