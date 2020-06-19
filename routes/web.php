<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::post('address/create', 'AddressController@create')->name('address.create');
Route::delete('address/destroy', 'AddressController@destroy')->name('address.destroy');
Route::post('cities/getAreasByCityAjax', 'CityController@getAreasByCityAjax');
