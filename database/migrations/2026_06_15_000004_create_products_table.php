<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->foreignId('category_id')->constrained()->onDelete('cascade');
        $table->string('nama_produk');
        $table->string('slug')->unique(); // Tambahkan slug
        $table->string('tipe')->nullable(); // Tambahkan tipe
        $table->text('deskripsi')->nullable(); // Tambahkan deskripsi
        $table->text('spesifikasi')->nullable(); // Tambahkan spesifikasi
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};