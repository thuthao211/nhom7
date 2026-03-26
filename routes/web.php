<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViDuLayoutController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', [ViDuLayoutController::class, 'sach']);

// Trang lọc theo thể loại
Route::get('/sach/theloai/{id}', [ViDuLayoutController::class, 'theloai']);
Route::get('/sach/chitiet/{id}', [ViDuLayoutController::class, 'chitiet']);