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
>>>>>>> 0f80d4c7d0879cbff7095308f1c6f0401b784f55
