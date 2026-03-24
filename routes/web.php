<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/thuthao', function () {
    return view('ten');
});
<<<<<<< HEAD

Route::get('/index','App\Http\Controllers\ViduController@sach');
=======
Route::get('/bh',function(){
    return view('bh');
});
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 0f80d4c7d0879cbff7095308f1c6f0401b784f55
=======

Route::get('/layout_sach', function () {
    return view('components.layout_sach'); 
});
>>>>>>> remotes/origin/nhuthao
=======
Route::get('/chitietsach/{id}', 'App\Http\Controllers\SachController@chitietsach');
>>>>>>> remotes/origin/bachhop
