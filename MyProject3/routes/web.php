<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/abc',[UploadYZController::class,'show']);
Route::post('/upload',[UploadYZController::class,'upload']);