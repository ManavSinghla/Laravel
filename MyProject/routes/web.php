<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/username/{name}', function ($name) {
    return "Welcome, {$name}";
});
