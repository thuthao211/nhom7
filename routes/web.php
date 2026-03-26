<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViduLayoutController;
use App\Http\Controllers\SachController; 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/trang1', [ViduLayoutController::class, 'trang1']);
Route::get('/sach', [ViduLayoutController::class, 'sach']);

Route::get('/chitietsach/{id}', [SachController::class, 'chitietsach']);