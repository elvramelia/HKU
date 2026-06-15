<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'nama_produk', 'slug', 'tipe', 'deskripsi', 'spesifikasi'];

    // Relasi ke Kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relasi ke Multiple Gambar
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}