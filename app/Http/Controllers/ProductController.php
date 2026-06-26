<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Menampilkan semua produk (Halaman /produk)
    public function index(Request $request)
    {
        $query = Product::with('category', 'images');

        // Logika filter kategori
        if ($request->has('category') && $request->category != '') {
            $query->where('category_id', $request->category);
        }

        $products = $query->latest()->paginate(12);
        $categories = Category::all();

        return view('produk', compact('products', 'categories'));
    }

    // Menampilkan detail 1 produk (Halaman /produk/{slug})
    public function show($slug)
    {
        $product = Product::with('category', 'images')->where('slug', $slug)->firstOrFail();

        $relatedProducts = Product::with('images')
            ->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();

        // PERHATIKAN BAGIAN INI: Harus tulis 'detailproduk' TANPA strip
        return view('detailproduk', compact('product', 'relatedProducts'));
    }
}