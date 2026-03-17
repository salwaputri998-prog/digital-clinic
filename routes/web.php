<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListDokterController;
use App\Http\Controllers\DashboardController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });
    Route::get('/users', function () {
        return 'Admin Users';
    });
});

Route::get('/listbarang/{id}/{nama}', function($id, $nama){
    return view('list_barang', compact('id', 'nama'));
});

// Dashboard routes with controller
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard_admin/{id}/{nama}', [DashboardController::class, 'admin']);
Route::get('/dashboard_dokter/{id}/{nama}', [DashboardController::class, 'dokter']);
Route::get('/dashboard_pasien/{id}/{nama}', [DashboardController::class, 'pasien']);

// HAPUS atau KOMEN route listdokter yang lama ini
// Route::get('/listdokter/{id}/{nama}', function($id, $nama){
//     return view('list_dokter', compact('id', 'nama'));
// });

// PAKAI YANG INI (hanya satu)
Route::get('/listdokter/{id}/{nama}', [ListDokterController::class, 'tampilkan']);
