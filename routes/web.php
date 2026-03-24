<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/thuthao', function () {
    return view('ten');
});

Route::get('/index','App\Http\Controllers\ViduController@sach');
