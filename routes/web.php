<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); 
})->name('home'); 

Route::get('/head', function () {
    return view('header-section');
});
