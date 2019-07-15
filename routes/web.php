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


Route::get('/detail', function (){
   return view('frontend.partials.detail');
});


Route::get('dashboard', 'DashboardControler@index')->name('dashboard');

Route::get('/tour', 'TourController@index')->name('tour');
Route::get('/tour/tambah','TourController@create')->name('tour.create');
Route::post('/tour/tambah','TourController@store')->name('tour.store');
Route::get('/tour/edit/{id}','TourController@edit')->name('tour.edit');
Route::patch('/tour/edit/{id}','TourController@update')->name('tour.update');
Route::get('/tour/destroy/{id}','TourController@destroy')->name('tour.destroy');

Route::get('kategori', 'KategoriController@index')->name('kategori');
Route::get('kategori/tambah', 'KategoriController@create')->name('kategori.create');
Route::post('/kategori/tambah','KategoriController@store')->name('kategori.store');
Route::get('/kategori/edit/{id}','KategoriController@edit')->name('kategori.edit');
Route::patch('/kategori/edit/{id}','KategoriController@update')->name('kategori.update');
Route::get('/kategori/destroy/{id}','KategoriController@destroy')->name('kategori.destroy');

Route::get('datatravel', 'DataKategoriController@index')->name('datatravel');
Route::get('/', 'FrontendController@index')->name('user');
Route::get('/detail/{id}', 'FrontendController@detail')->name('user.detail');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
