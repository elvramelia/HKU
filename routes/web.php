<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'index']);

Route::view('/tentang','about');

Route::view('/produk','product');

Route::view('/artikel','article');

Route::view('/kontak','contact');