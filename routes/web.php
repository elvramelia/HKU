<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;

// Route Redirect /admin ke /admin/dashboard
Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
});

// Route Login & Logout
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); // Ini hanya menerima POST

// Route Admin Panel (Wajib Login)
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('products', ProductController::class);
     // Route Kategori (TAMBAHKAN INI)
    Route::resource('categories', CategoryController::class);
});

// Route Frontend
Route::get('/', [HomeController::class, 'index']);
Route::view('/tentang', 'about');
Route::view('/produk', 'product');
Route::view('/produk/detail', 'detailproduk');
Route::view('/artikel', 'artikel');
Route::view('/kontak', 'contact');

