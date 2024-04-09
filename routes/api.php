<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StockController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route Login And Register
Route::prefix('/users')->group(function() {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/registrasi', [AuthController::class, 'registrasi']);

    Route::group(['middleware' => 'auth:sanctum'], function() {
        Route::get('/stock/tampil', [StockController::class, 'tampilStock']);
        Route::get('/stock/masuk', [StockController::class, 'tampilStockMasuk']);
        Route::get('/stock/keluar', [StockController::class, 'tampilStockKeluar']);
        Route::get('/kategori', [StockController::class, 'tampilKategori']);
    });
});
