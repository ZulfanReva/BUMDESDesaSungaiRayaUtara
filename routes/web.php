<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;

// Mengarahkan root URL ke metode index BerandaController
Route::get('/', [BerandaController::class, 'index'])->name('beranda.index');

// Resource route untuk BerandaController
Route::resource('beranda', BerandaController::class)->only(['index']);


// Route untuk halaman login
Route::get('/masuk', function () {
    if (Auth::check()) {
        // Cek peran pengguna
        return Auth::user()->role === 'superadmin'
            ? redirect()->route('admin')
            : redirect()->route('customer');
    }
    return view('masuk');
})->name('masuk');