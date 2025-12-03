<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. HALAMAN DEPAN (Landing Page/Katalog)
// Ini adalah halaman pertama yang dibuka (localhost:8000)
// Menampilkan daftar produk menggunakan HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');


// 2. DASHBOARD (Area User Login)
// Halaman ini hanya bisa diakses jika sudah login & email verified
Route::get('/dashboard', function () {
    $products = Product::get();
    return view('dashboard', compact('products'));
})->middleware(['auth', 'verified'])->name('dashboard');


// 3. PROFILE USER (Bawaan Breeze)
// Untuk user mengedit nama, email, password, atau hapus akun
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// 4. ROUTE KHUSUS ADMIN (Middleware 'admin')
// Hanya user dengan is_admin = true yang bisa masuk sini
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // Menampilkan tabel produk
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    
    // Menampilkan form tambah produk
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    
    // Proses simpan data ke database
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
});

// Memuat routes autentikasi (login, register, logout) dari file auth.php
require __DIR__ . '/auth.php';