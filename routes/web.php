<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/thuthao', function () {
    return view('ten');
});
Route::get('/bh',function(){
    return view('bh');
});