<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); 
})->name('home'); 

Route::get('/head', function () {
    return view('header-section');
});

// routes/web.php
use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');