@extends('layouts.app')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="container position-relative" style="z-index:2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item"><a href="/produk">Produk</a></li>
                <!-- Nanti diganti variabel dinamis -->
                <li class="breadcrumb-item active">Detail Produk</li> 
            </ol>
        </nav>
        <h1>Detail Produk</h1>
    </div>
</section>

<!-- Product Detail Section -->
<section class="product-detail-section">
    <div class="container">
        <div class="row g-5">
            <!-- Image Column -->
            <div class="col-lg-6">
                <!-- Cek apakah produk punya gambar -->
                @php 
                    // Ini contoh data statis dulu. Nanti saat data dikirim dari controller, ganti $product->images
                    $hasImages = false; 
                @endphp
                
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85f82e?q=80&w=800" 
                     alt="Product Image" 
                     class="detail-img-main"
                     id="mainImage">
                
                <div class="detail-img-thumbs">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85f82e?q=80&w=200" 
                         alt="Thumb 1" class="detail-thumb active"
                         onclick="changeImage(this, 'https://images.unsplash.com/photo-1558618666-fcd25c85f82e?q=80&w=800')">
                    <img src="https://images.unsplash.com/photo-1565008447742-97f6f38c985c?q=80&w=200" 
                         alt="Thumb 2" class="detail-thumb"
                         onclick="changeImage(this, 'https://images.unsplash.com/photo-1565008447742-97f6f38c985c?q=80&w=800')">
                    <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=200" 
                         alt="Thumb 3" class="detail-thumb"
                         onclick="changeImage(this, 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=800')">
                </div>
            </div>

            <!-- Info Column -->
            <div class="col-lg-6">
                <!-- Nanti Kategori ini diambil dari relasi $product->category->nama_kategori -->
                <div class="detail-category">FBR Burner</div>
                <h2 class="detail-title">FBR Series Industrial Burner</h2>
                
                <p class="detail-desc">
                    Burner industri seri FBR dirancang untuk memberikan performa pembakaran yang optimal 
                    dan efisien. Dilengkapi dengan teknologi progressive dan modulating, burner ini 
                    cocok untuk aplikasi boiler, kiln, dan heater industri dengan kapasitas menengah hingga besar. 
                    Memiliki sistem kontrol keamanan berlapis dan mudah diintegrasikan dengan sistem otomasi pabrik.
                </p>

                <!-- Simple Specs Table (Dengan Tipe) -->
                <table class="spec-table">
                    <tr>
                        <td>Kategori</td>
                        <td>: FBR Burner</td> <!-- Nanti $product->category->nama_kategori -->
                    </tr>
                    <tr>
                        <td>Tipe</td>
                        <td>: Progressive / Modulating</td> <!-- Nanti $product->tipe -->
                    </tr>
                    <tr>
                        <td>Bahan Bakar</td>
                        <td>: Gas / Diesel (Dual Fuel)</td>
                    </tr>
                    <tr>
                        <td>Kapasitas</td>
                        <td>: 100 kW - 10 MW</td>
                    </tr>
                </table>

                <!-- Action Buttons -->
                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="/kontak" class="btn-request-quote">
                        <i class="bi bi-envelope-paper"></i> Minta Penawaran
                    </a>
                    <a href="https://wa.me/6281234567890?text=Halo%20HKU,%20saya%20tertarik%20dengan%20produk%20ini" target="_blank" class="btn-wa">
                        <i class="bi bi-whatsapp"></i> Chat WhatsApp
                    </a>
                </div>

                <!-- Info Box -->
                <div class="info-box">
                    <h6><i class="bi bi-info-circle-fill"></i> Butuh Spesifikasi Teknis Lengkap?</h6>
                    <p>Hubungi tim teknis kami untuk mendapatkan datasheet lengkap, manual book, dan konsultasi penentuan kapasitas yang tepat untuk industri Anda.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    function changeImage(thumb, newSrc) {
        document.getElementById('mainImage').src = newSrc;
        document.querySelectorAll('.detail-thumb').forEach(el => el.classList.remove('active'));
        thumb.classList.add('active');
    }
</script>
@endsection