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

Route::get('/base', 'AdminController@basefungsi') ;

Route::get('/dashboard', 'AdminController@dashboardfungsi')-> name('dashboard') ;

Route::resource('/kendaraan', 'KendaraanController');

Route::resource('/pemilik', 'PemilikController');

Route::resource('/karyawan', 'KaryawanController');

Route::resource('/tempat_parkir', 'TempatParkirController');

Route::resource('/shift', 'ShiftController');




Route::get('/', function () {
    return view('welcome');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
