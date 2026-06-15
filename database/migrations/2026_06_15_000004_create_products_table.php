<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
         Schema::table('products', function (Blueprint $table) {
            $table->string('tipe')->nullable()->after('category_id'); // Menambahkan kolom tipe
            $table->dropColumn('gambar'); // Hapus kolom gambar lama, karena kita pakai tabel baru
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};