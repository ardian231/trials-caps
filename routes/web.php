<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

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
    Route::get('/admin/ditolak', [AdminController::class, 'ditolak'])->name('admin.ditolak');
    Route::get('/admin/diterima', [AdminController::class, 'diterima'])->name('admin.diterima');
    Route::get('/admin/investor', [AdminController::class, 'investor'])->name('admin.investor');
});

// Routes for authenticated users
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/umkm/create', [UmkmController::class, 'create'])->name('umkm.create');
    Route::post('/umkm/create', [UmkmController::class, 'store'])->name('umkm.store');
});
