<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('welcome');

Auth::routes();

Route::group(['prefix'=>'admin', 'middleware'=>'auth', 'namespace'=>'admin'], function(){
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('slider', 'SliderController');
});
