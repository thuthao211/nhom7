<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViduLayoutController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/trang1', [ViduLayoutController::class, 'trang1']);
Route::get('/sach', [ViduLayoutController::class, 'sach']);