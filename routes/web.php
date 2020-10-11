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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'home');

Route::group(['prefix' => 'master','as' => 'master.'], function () {
    Route::get('/','MasterController@index')->name('index');
    Route::get('/create','MasterController@create')->name('create');
    Route::get('/{master:slug}','MasterController@show')->name('show');
    Route::get('/kategori/{kategori:slug}','MasterController@showByCategory')->name('showByCategory');
    Route::get('/{master:slug}/edit','MasterController@edit')->name('edit');
    Route::post('/store','MasterController@store')->name('store');
    Route::put('/{master:slug}/edit','MasterController@update')->name('update');
    Route::delete('/{master:slug}/destroy','MasterController@destroy')->name('destroy');
});

Route::group(['prefix' => 'penjualan'], function () {
    Route::view('/', 'pages.penjualan.index');
});
