@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section">
    <div class="container position-relative" style="z-index:2">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="hero-badge fade-up delay-1">
                    <i class="bi bi-shield-check"></i> Terpercaya Sejak Bertahun
                </div>
                <p class="hero-subtitle fade-up delay-2">Specialist Supplier</p>
                <h1 class="hero-title fade-up delay-2">
                    Industrial<br>
                    <span class="highlight">Boiler & Burner</span><br>
                    Part
                </h1>
                <p class="hero-desc fade-up delay-3">
                    PT. Hardjadinata Karya Utama menyediakan produk dan layanan terbaik 
                    untuk kebutuhan boiler, burner, dan sparepart industri Anda. 
                    Progressive and Modulating.
                </p>
                <div class="hero-buttons fade-up delay-4">
                    <a href="/produk" class="btn-hero-primary">
                        Lihat Produk <i class="bi bi-arrow-right"></i>
                    </a>
                    <a href="/tentang" class="btn-hero-secondary">
                        <i class="bi bi-play-circle"></i> Tentang Kami
                    </a>
                </div>
            </div>
            <div class="col-lg-6 hero-image-col fade-up delay-5">
                <div class="hero-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1565008447742-97f6f38c985c?q=80&w=800" 
                         alt="Industrial Boiler">
                </div>
                <div class="hero-stat-float">
                    <div class="stat-icon">
                        <i class="bi bi-award-fill"></i>
                    </div>
                    <div>
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Tahun Pengalaman</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Bar -->
<section class="stats-bar">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="stat-item">
                    <div class="stat-num">500<span>+</span></div>
                    <div class="stat-text">Proyek Selesai</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-item">
                    <div class="stat-num">200<span>+</span></div>
                    <div class="stat-text">Klien Industri</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-item">
                    <div class="stat-num">1000<span>+</span></div>
                    <div class="stat-text">Produk Tersedia</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-item">
                    <div class="stat-num">15<span>+</span></div>
                    <div class="stat-text">Tahun Pengalaman</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-tag justify-content-center">Layanan Kami</div>
            <h2 class="section-title">Solusi Industri Terpadu</h2>
            <p class="section-desc mx-auto">
                Kami menyediakan berbagai layanan profesional untuk mendukung 
                kebutuhan industri Anda secara menyeluruh.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-fire"></i>
                    </div>
                    <h5>Boiler System</h5>
                    <p>Penyediaan dan instalasi sistem boiler industri berkualitas tinggi dengan teknologi terkini untuk efisiensi optimal.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-fan"></i>
                    </div>
                    <h5>Burner & Combustion</h5>
                    <p>Supply burner dan sistem pembakaran progresif serta modulating untuk performa dan keamanan maksimal.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-gear-wide-connected"></i>
                    </div>
                    <h5>Sparepart Industri</h5>
                    <p>Penyediaan suku cadang industri lengkap dan berkualitas dengan jaminan keaslian dari brand terkemuka.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-tools"></i>
                    </div>
                    <h5>Jasa Perbaikan</h5>
                    <p>Layanan perbaikan dan maintenance boiler serta peralatan industri oleh tim teknisi berpengalaman.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-clipboard-check"></i>
                    </div>
                    <h5>Konsultasi Teknis</h5>
                    <p>Konsultasi gratis untuk menentukan solusi teknis terbaik sesuai kebutuhan dan budget industri Anda.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-truck"></i>
                    </div>
                    <h5>Pengiriman Cepat</h5>
                    <p>Layanan pengiriman sparepart dan peralatan ke seluruh Indonesia dengan jaminan keamanan dan ketepatan waktu.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Preview Section -->
<section class="about-preview">
    <div class="container position-relative" style="z-index:2">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="section-tag">Profil Perusahaan</div>
                <h2 class="section-title">PT. Hardjadinata Karya Utama</h2>
                <p class="section-desc mb-4">
                    Berdiri di Surabaya, Indonesia, HKU adalah perusahaan yang berkomitmen 
                    menjadi penyedia solusi boiler dan sparepart industri terpercaya. Kami 
                    mengutamakan kualitas produk dan kepuasan pelanggan.
                </p>
                <div class="about-feature">
                    <div class="about-feature-icon">
                        <i class="bi bi-check-lg"></i>
                    </div>
                    <div>
                        <h6>Produk Berkualitas Tinggi</h6>
                        <p>Semua produk kami berasal dari brand terkemuka dengan jaminan kualitas.</p>
                    </div>
                </div>
                <div class="about-feature">
                    <div class="about-feature-icon">
                        <i class="bi bi-check-lg"></i>
                    </div>
                    <div>
                        <h6>Tim Profesional Berpengalaman</h6>
                        <p>Didukung oleh tenaga ahli yang siap membantu kebutuhan teknis Anda.</p>
                    </div>
                </div>
                <div class="about-feature">
                    <div class="about-feature-icon">
                        <i class="bi bi-check-lg"></i>
                    </div>
                    <div>
                        <h6>Layanan Purna Jual</h6>
                        <p>Komitmen kami tidak berhenti di titik penjualan, kami selalu siap mendampingi Anda.</p>
                    </div>
                </div>
                <a href="/tentang" class="btn-hero-primary mt-3">
                    Selengkapnya <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="col-lg-6">
                <div class="about-image-box">
                    <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?q=80&w=800" 
                         alt="Industrial Facility">
                    <div class="experience-badge">
                        <div class="exp-num">15+</div>
                        <div class="exp-text">Tahun Pengalaman</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="products-section">
   
<div class="col-md-6 col-lg-4">
    <a href="/produk/detail" class="text-decoration-none">
        <div class="product-card">
            <div class="product-img">
                <img src="https://images.unsplash.com/photo-1631567091066-5f6c7a5a5576?q=80&w=600" alt="Boiler">
                <span class="product-badge">Unggulan</span>
            </div>
            <div class="product-body">
                <div class="product-category">Boiler</div>
                <h5>Fire Tube Boiler</h5>
                <p>Boiler pipa api dengan kapasitas dan efisiensi tinggi untuk kebutuhan industri.</p>
            </div>
        </div>
    </a>
</div>

<div class="col-md-6 col-lg-4">
    <a href="/produk/detail" class="text-decoration-none">
        <div class="product-card">
            <div class="product-img">
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85f82e?q=80&w=600" alt="Burner">
                <span class="product-badge">Unggulan</span>
            </div>
            <div class="product-body">
                <div class="product-category">Burner</div>
                <h5>Industrial Burner</h5>
                <p>Burner industri modulating dengan sistem pembakaran presisi dan ramah lingkungan.</p>
            </div>
        </div>
    </a>
</div>

<div class="col-md-6 col-lg-4">
    <a href="/produk/detail" class="text-decoration-none">
        <div class="product-card">
            <div class="product-img">
                <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=600" alt="Valve">
                <span class="product-badge">Unggulan</span>
            </div>
            <div class="product-body">
                <div class="product-category">Valve & Fitting</div>
                <h5>Control Valve</h5>
                <p>Katup kontrol presisi untuk regulasi aliran fluida dalam sistem industri.</p>
            </div>
        </div>
    </a>
</div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container position-relative" style="z-index:2">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2>Butuh Solusi Industri?</h2>
                <p>Hubungi tim kami untuk konsultasi gratis dan temukan produk yang tepat untuk kebutuhan industri Anda.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="/kontak" class="btn-cta-white">
                    Hubungi Kami <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection