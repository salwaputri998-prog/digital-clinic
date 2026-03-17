<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Route untuk halaman utama (redirect ke login)
Route::get('/', function () {
    return redirect()->route('login');
});

// Route untuk login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route untuk register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Route dashboard (protected)
Route::get('/dashboard', function () {
    return view('dashboard'); // Buat file dashboard.blade.php sederhana
})->middleware('auth')->name('dashboard');