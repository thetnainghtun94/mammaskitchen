<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('welcome');
Route::post('/reservation', 'ReservationController@reserve')->name('reservation.reserve');

Auth::routes();

Route::group(['prefix'=>'admin', 'middleware'=>'auth', 'namespace'=>'admin'], function(){
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('slider', 'SliderController');
    Route::resource('category', 'CategoryController');
    Route::resource('item', 'ItemController');
});
