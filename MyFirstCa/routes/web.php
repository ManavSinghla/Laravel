<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LifeController;

Route::get('/color/{id}' , [LifeController::class, 'color']);