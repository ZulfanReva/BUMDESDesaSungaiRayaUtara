<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;

// Mengarahkan root URL ke metode index BerandaController
Route::get('/', [BerandaController::class, 'index'])->name('beranda.index');

// Resource route untuk BerandaController
Route::resource('beranda', BerandaController::class)->only(['index']);
