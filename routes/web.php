<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('http-controller', App\Http\Controllers\HttpControlller::class);
