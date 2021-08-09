<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JemaatController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\DashboardController;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    
    Route::resource('/jemaat',JemaatController::class);    
    Route::resource('/keluarga',KeluargaController::class);
    Route::resource('/keuangan',KeuanganController::class);    
});

require __DIR__.'/auth.php';
