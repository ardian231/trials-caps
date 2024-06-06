<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvestorController;


// Route default for main page
Route::get('/', function () {
    return view('index');
});

// Route for about page
Route::get('/about', function () {
    return view('about');
});

// Route for contact page
Route::get('/contact', function () {
    return view('contact');
});

// Authentication routes
Auth::routes();

// Route for home page after login
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Routes for admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/umkm_ditolak', [UmkmController::class, 'ditolakSistem'])->name('umkm.ditolak');
    Route::get('admin/umkm_diterima', [UmkmController::class, 'diterimaSistem'])->name('umkm.diterima');
    Route::get('admin/umkm_detail/{id}', [UMKMController::class, 'show'])->name('umkm.show');
    Route::get('/admin/investor', [InvestorController::class, 'investor'])->name('admin.investor');
});

// Routes for authenticated users
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/umkms', [UmkmController::class, 'index'])->name('umkm.index');
    Route::get('/umkm/create', [UmkmController::class, 'create'])->name('umkm.create');
    Route::post('/umkm/create', [UmkmController::class, 'store'])->name('umkm.store');
    Route::post('/umkm/analisis', [UmkmController::class, 'analisisUMKM'])->name('umkm.analisis');

Route::middleware('auth:api')->group(function () {
    Route::get('/rekomendasi_umkm', [UmkmController::class, 'rekomendasiUMKM'])->name('umkm.rekomendasi');
    Route::get('/analisis_UMKM', [UmkmController::class, 'analisisUMKM'])->name('umkm.analisis');
});

});
