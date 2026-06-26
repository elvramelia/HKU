<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil data dari database
        $banners = Banner::where('is_active', true)->orderBy('order', 'asc')->get();
        
        // Ambil 6 produk terbaru beserta relasi gambar dan kategori
        $products = Product::with('images', 'category')->latest()->take(6)->get();
        
        // Ambil 3 testimoni yang aktif
        $testimonials = Testimonial::where('is_active', true)->latest()->take(3)->get();

        // Kirim ke view
        return view('home', compact('banners', 'products', 'testimonials'));
    }
}