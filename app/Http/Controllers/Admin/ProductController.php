<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category', 'images')->latest()->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_produk' => 'required',
            'category_id' => 'required|exists:categories,id',
            'tipe'        => 'nullable|string',
            'deskripsi'   => 'required',
            'spesifikasi' => 'nullable',
            'images.*'    => 'image|mimes:jpeg,png,jpg|max:2048' // Validasi multiple image
        ]);

        $data['slug'] = Str::slug($request->nama_produk);

        // Buat Produk
        $product = Product::create($data);

        // Upload Multiple Images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $path = $image->storeAs('products', $filename, 'public');
                
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path
                ]);
            }
        }

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $product->load('images'); // Load relasi gambar
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'nama_produk' => 'required',
            'category_id' => 'required|exists:categories,id',
            'tipe'        => 'nullable|string',
            'deskripsi'   => 'required',
            'spesifikasi' => 'nullable',
            'images.*'    => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data['slug'] = Str::slug($request->nama_produk);
        $product->update($data);

        // Tambah gambar baru jika ada
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $path = $image->storeAs('products', $filename, 'public');
                
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path
                ]);
            }
        }

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil diupdate!');
    }

    public function destroy(Product $product)
    {
        // Hapus gambar dari storage
        foreach ($product->images as $image) {
            Storage::delete('public/' . $image->image_path);
        }
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil dihapus!');
    }
}