<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // TAMBAHKAN 'slug' DI DALAM ARRAY INI
    protected $fillable = ['nama_kategori', 'slug'];
}