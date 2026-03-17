<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListObatController;
use App\Http\Controllers\ListPasienController;
use App\Http\Controllers\ListDokterController;
use App\Http\Controllers\ListResepController;
use App\Http\Controllers\ListKunjunganController;

// Orang 1: Login & Registrasi
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// Orang 2: Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/admin', [DashboardController::class, 'admin']);
Route::get('/dashboard/dokter', [DashboardController::class, 'dokter']);
Route::get('/dashboard/pasien', [DashboardController::class, 'pasien']);

// Orang 3: List Item (Master Data) - dengan 2 parameter
Route::get('/list-obat', [ListObatController::class, 'index']);
Route::get('/list-obat/{id}/{nama}', [ListObatController::class, 'show']);

Route::get('/list-pasien', [ListPasienController::class, 'index']);
Route::get('/list-pasien/{id}/{nama}', [ListPasienController::class, 'show']);

Route::get('/list-dokter', [ListDokterController::class, 'index']);
Route::get('/list-dokter/{id}/{nama}', [ListDokterController::class, 'show']);

Route::get('/list-resep', [ListResepController::class, 'index']);
Route::get('/list-resep/{id}', [ListResepController::class, 'show']);

Route::get('/list-kunjungan', [ListKunjunganController::class, 'index']);
Route::get('/list-kunjungan/{id}', [ListKunjunganController::class, 'show']);