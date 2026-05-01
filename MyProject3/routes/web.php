<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-mail', function () {
    $messageText = "Hello! If you're seeing this, your Laravel mail configuration is working.";
    Mail::to('ashutoshydv.connect@gmail.com')->send(new TestMail($messageText));
    
    return "Mail dispatched! Check your storage/logs/laravel.log or email inbox.";
});

Route::get('/abc',[UploadYZController::class,'show']);
Route::post('/upload',[UploadYZController::class,'upload']);