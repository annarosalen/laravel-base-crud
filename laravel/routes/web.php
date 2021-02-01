<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/devices', 'DeviceController@index') ->name('device-index');
Route::get('/device/{id}', 'DeviceController@show') ->name('device-show');

Route::get('/new/device', 'DeviceController@create') ->name('device-create');
Route::post('new/device/store', 'DeviceController@store') ->name('device-store');

