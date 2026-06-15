<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Tambahkan field yang boleh diisi massal
    protected $fillable = ['nama_kategori', 'slug'];

    // Relasi: Satu kategori bisa memiliki banyak produk
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}