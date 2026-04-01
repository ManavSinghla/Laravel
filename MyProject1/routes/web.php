<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first', [firstController::class, 'show']);
Route::get('/second/{id}', [firstController::class, 'display']);

