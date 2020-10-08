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

Route::group(['prefix' => 'master'], function () {
    Route::get('/','MasterController@index')->name('master.index');
    Route::get('/create','MasterController@create')->name('master.create');
    Route::get('/{master:slug}','MasterController@show')->name('master.show');
    Route::get('/{master:slug}/edit','MasterController@edit')->name('master.edit');
    Route::post('/store','MasterController@store')->name('master.store');
    Route::put('/{master:slug}/edit','MasterController@update')->name('master.update');
});

Route::group(['prefix' => 'penjualan'], function () {
    Route::view('/', 'pages.penjualan.index');
});
