<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\BannerController;

// Route Redirect /admin ke /admin/dashboard
Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
});

// Route Login & Logout
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route Admin Panel (Wajib Login)
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Gunakan Namespace Lengkap untuk menghindari konflik nama
    Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('banners', BannerController::class);
});

// Route Frontend (Halaman Utama)
Route::get('/', [HomeController::class, 'index']);
Route::view('/tentang', 'about');
Route::view('/kontak', 'contact');
Route::view('/artikel', 'artikel'); // Jika masih pakai halaman statis

// Route untuk halaman produk publik (DINAMIS)
// Saya menghapus Route::view('/produk') yang lama agar tidak bentrok
Route::get('/produk', [\App\Http\Controllers\ProductController::class, 'index'])->name('produk.index');
Route::get('/produk/{slug}', [\App\Http\Controllers\ProductController::class, 'show'])->name('produk.show');

Route::view('/kontak', 'contact');
// Tambahkan route POST ini untuk menangkap form kirim pesan
Route::post('/kontak', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
