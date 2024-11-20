<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); 
})->name('home'); 

Route::get('/sign', function () {
    return view('sign-in');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/register', function () {
    return view('register');
});

use App\Http\Controllers\BarcodeController;

Route::get('/barcode-search', [BarcodeController::class, 'showForm']);
Route::get('/barcode-search-result', [BarcodeController::class, 'search'])->name('barcode.search');


// routes/web.php
use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');