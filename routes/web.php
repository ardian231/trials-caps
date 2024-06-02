<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmkmController;


Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/umkm/create', function () {
    return view('umkm/create');
});
Route::get('/umkm/create', [UmkmController::class, 'create'])->name('umkm.create');
Route::post('/umkm/create', [UmkmController::class, 'store'])->name('umkm.store');




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
