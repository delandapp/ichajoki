<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route Login And Register
Route::prefix('/users')->group(function() {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/registrasi', [AuthController::class, 'registrasi']);
    
});
