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
    return view('home');
})->name('home');
Auth::routes();
Route::prefix('admin')->group(function(){
    Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa.index');
    Route::get('/mahasiswa/tambah', 'MahasiswaController@create')->name('mahasiswa.create');
    Route::post('/mahasiswa/store', 'MahasiswaController@store')->name('mahasiswa.store');
    Route::get('/mahasiswa/show/{id}', 'MahasiswaController@show')->name('mahasiswa.show');
    Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit')->name('mahasiswa.edit');
    Route::put('/mahasiswa/update/{id}', 'MahasiswaController@update')->name('mahasiswa.update');
    Route::get('/mahasiswa/delete/{id}', 'MahasiswaController@destroy')->name('mahasiswa.destroy');
});


Route::get('/home', 'HomeController@index')->name('home');
