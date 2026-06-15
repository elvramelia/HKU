<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'nama_produk', 'slug', 'gambar', 'deskripsi', 'spesifikasi'];
}