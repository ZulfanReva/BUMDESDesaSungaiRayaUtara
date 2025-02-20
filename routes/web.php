<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LayoutsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilKKNController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// Halaman error 404
Route::get('/404', function () {
    return view('errors.404');
})->name('error.404');

// Halaman utama
Route::get('/', [BerandaController::class, 'index'])->name('beranda.index');

Route::get('/profil-kkn', [ProfilKKNController::class, 'index'])->name('profil-kkn');

// // Untuk mengarah login
// Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');

// Route untuk halaman login
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

// Route untuk logut
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('beranda.index'); // Redirect ke halaman utama
})->name('logout');

// Route admin
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
});

// Route super admin
Route::middleware(['auth'])->group(function () {
    Route::get('/superadmin', [SuperAdminController::class, 'index'])->name('superadmin.dashboard');
    Route::get('/superadmin/layouts', [SuperAdminController::class, 'layouts'])->name('superadmin.layouts');
    // Route untuk update profil desa
    Route::post('/superadmin/layouts/update', [SuperAdminController::class, 'updateProfilDesa'])->name('superadmin.layouts.update');
});


// Profile routes (Breeze ProfileController)
Route::middleware(['auth'])->group(function () {
    // Route untuk halaman edit profil
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

    // Route untuk update profil
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // Route untuk menghapus akun
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Login dengan Google
Route::get('auth/google', function () {
    return Socialite::driver('google')->redirect();
})->name('google.login');

Route::get('auth/google/callback', function () {
    $googleUser = Socialite::driver('google')->user();

    $user = User::updateOrCreate(
        ['email' => $googleUser->getEmail()],
        [
            'nama' => $googleUser->getName(),
            'email' => $googleUser->getEmail(),
            'password' => bcrypt(str()->random(16)),
            'google_id' => $googleUser->getId(),
            'role' => 'admin',
        ]
    );

    Auth::login($user);

    return redirect()->route('dashboard');
});

// Include file auth.php dari Breeze
require __DIR__ . '/auth.php';
