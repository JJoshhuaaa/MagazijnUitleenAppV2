<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home'); 
})->name('home'); 

use App\Http\Controllers\BarcodeController;

Route::get('/barcode-search', [BarcodeController::class, 'showForm']);
Route::get('/barcode-search-result', [BarcodeController::class, 'search'])->name('barcode.search');


use App\Http\Controllers\ReservationController;

Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
Route::get('reservations/{reservation_id}', [ReservationController::class, 'show'])->name('reservations.show');
Route::get('reservations/{reservation_id}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');
Route::put('reservations/{reservation_id}', [ReservationController::class, 'update'])->name('reservations.update');
Route::delete('reservations/{reservation_id}', [ReservationController::class, 'destroy'])->name('reservations.destroy');
Route::get('/reservation-panel', [ReservationController::class, 'index'])->name('reservations.index');

use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy'); 
