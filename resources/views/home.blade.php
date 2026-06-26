@extends('layouts.app')

@section('content')

<!-- Hero Section (Banner Dinamis) -->
<!-- Hero Section (Banner Dinamis) -->
<section class="hero-section">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            @forelse($banners as $banner)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <div class="hero-bg-wrapper">
                        <img src="{{ asset('storage/' . $banner->image) }}" class="d-block w-100 hero-bg" alt="{{ $banner->title }}">
                        <div class="hero-overlay"></div>
                    </div>
                    
                    <!-- PERUBAHAN UTAMA ADA DI DIV INI (Center Alignment) -->
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center text-center" style="z-index: 3; height: 100%; top: 0; bottom: 0;">
                        <div style="max-width: 800px;">
                            @if($banner->subtitle)
                                <div class="hero-badge mb-3"><i class="bi bi-shield-check"></i> {{ $banner->subtitle }}</div>
                            @endif
                            <h1 class="hero-title mb-3" style="text-shadow: 2px 2px 8px rgba(0,0,0,0.5);">{!! $banner->title !!}</h1>
                            @if($banner->description)
                                <p class="hero-desc mb-4" style="text-shadow: 1px 1px 4px rgba(0,0,0,0.5);">{{ $banner->description }}</p>
                            @endif
                            @if($banner->button_text)
                                <a href="{{ $banner->button_link ?: '#' }}" class="btn-hero-primary">
                                    {{ $banner->button_text }} <i class="bi bi-arrow-right"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                    <!-- AKHIR PERUBAHAN -->

                </div>
            @empty
                <!-- Fallback jika belum ada banner di database -->
                <div class="carousel-item active">
                    <div class="hero-bg-wrapper">
                        <img src="https://images.unsplash.com/photo-1565008447742-97f6f38c985c?q=80&w=800" class="d-block w-100 hero-bg" alt="Default">
                        <div class="hero-overlay"></div>
                    </div>
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center text-center" style="z-index: 3; height: 100%; top: 0; bottom: 0;">
                        <div style="max-width: 800px;">
                            <h1 class="hero-title">Industrial Boiler & Burner</h1>
                            <p class="hero-desc">PT. Hardjadinata Karya Utama</p>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
        @if($banners->count() > 1)
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
        @endif
    </div>
</section>

<!-- Stats Bar -->
<section class="stats-bar">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="stat-item"><div class="stat-num">500<span>+</span></div><div class="stat-text">Proyek Selesai</div></div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-item"><div class="stat-num">200<span>+</span></div><div class="stat-text">Klien Industri</div></div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-item"><div class="stat-num">1000<span>+</span></div><div class="stat-text">Produk Tersedia</div></div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-item"><div class="stat-num">15<span>+</span></div><div class="stat-text">Tahun Pengalaman</div></div>
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
            <p class="section-desc mx-auto">Kami menyediakan berbagai layanan profesional untuk mendukung kebutuhan industri Anda secara menyeluruh.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="service-card"><div class="service-icon"><i class="bi bi-fire"></i></div><h5>Boiler System</h5><p>Penyedia dan Instalasi perawatan boiler.</p></div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card"><div class="service-icon"><i class="bi bi-fan"></i></div><h5>Industrial Burner</h5><p>Penyedia,sparepart perawatan burner .</p></div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card"><div class="service-icon"><i class="bi bi-gear-wide-connected"></i></div><h5>Instrumentasi Industri</h5><p>Instrumentasi dan equipment.</p></div>
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
                <p class="section-desc mb-4">Berdiri di Surabaya, Indonesia, HKU adalah perusahaan yang berkomitmen menjadi penyedia solusi boiler dan sparepart industri terpercaya.</p>
                <div class="about-feature"><div class="about-feature-icon"><i class="bi bi-check-lg"></i></div><div><h6>Produk Berkualitas Tinggi</h6><p>Semua produk kami berasal dari brand terkemuka.</p></div></div>
                <div class="about-feature"><div class="about-feature-icon"><i class="bi bi-check-lg"></i></div><div><h6>Tim Profesional Berpengalaman</h6><p>Didukung oleh tenaga ahli yang siap membantu.</p></div></div>
                <div class="about-feature"><div class="about-feature-icon"><i class="bi bi-check-lg"></i></div><div><h6>Layanan Purna Jual</h6><p>Komitmen kami tidak berhenti di titik penjualan.</p></div></div>
                <a href="/tentang" class="btn-hero-primary mt-3">Selengkapnya <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="col-lg-6">
                <div class="about-image-box">
                    <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?q=80&w=800" alt="Industrial Facility">
                    <div class="experience-badge"><div class="exp-num">15+</div><div class="exp-text">Tahun Pengalaman</div></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Section (DINAMIS) -->
<section class="products-section" style="padding: 80px 0;">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-tag justify-content-center">Produk Kami</div>
            <h2 class="section-title">Produk Unggulan</h2>
            <p class="section-desc mx-auto">Berikut adalah beberapa produk terbaik yang kami sediakan untuk kebutuhan industri Anda.</p>
        </div>
        
        <!-- Wrapper row yang tadi hilang sudah ditambahkan -->
        <div class="row g-4">
            @forelse($products as $product)
            <div class="col-md-6 col-lg-4">
                <a href="/produk/{{ $product->slug }}" class="text-decoration-none">
                    <div class="product-card">
                        <div class="product-img">
                            @if($product->images->count() > 0)
                                <img src="{{ asset('storage/' . $product->images->first()->image_path) }}" alt="{{ $product->nama_produk }}">
                            @else
                                <img src="https://via.placeholder.com/600x400?text=No+Image" alt="No Image">
                            @endif
                            <span class="product-badge">Unggulan</span>
                        </div>
                        <div class="product-body">
                            <div class="product-category">{{ $product->category->nama_kategori ?? 'Tanpa Kategori' }}</div>
                            <h5>{{ $product->nama_produk }}</h5>
                            <p>{{ \Illuminate\Support\Str::limit(strip_tags($product->deskripsi), 80) }}</p>
                        </div>
                    </div>
                </a>
            </div>
            @empty
            <div class="col-12 text-center text-muted py-5">Belum ada produk yang ditambahkan.</div>
            @endforelse
        </div>
    </div>
</section>

<!-- Testimoni Section (DINAMIS) -->
<section class="py-5 bg-light" style="background-color: #f8fafc !important;">
    <div class="container py-5">
        <div class="text-center mb-5">
            <div class="section-tag justify-content-center">Testimoni</div>
            <h2 class="section-title">Apa Kata Klien Kami</h2>
        </div>
        <div class="row g-4">
            @forelse($testimonials as $testimonial)
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 rounded-4">
                    <div class="card-body p-4">
                        <div class="mb-3 text-warning">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p class="card-text text-dark">"{{ $testimonial->content }}"</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            @if($testimonial->image)
                                <img src="{{ asset('storage/' . $testimonial->image) }}" class="rounded-circle me-3" width="50" height="50" style="object-fit:cover" alt="{{ $testimonial->name }}">
                            @else
                                <div class="bg-danger text-white rounded-circle me-3 d-flex align-items-center justify-content-center fw-bold" style="width:50px;height:50px;">{{ strtoupper(substr($testimonial->name, 0, 1)) }}</div>
                            @endif
                            <div>
                                <h6 class="mb-0 fw-bold text-dark">{{ $testimonial->name }}</h6>
                                <small class="text-muted">{{ $testimonial->position }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center text-muted">Belum ada testimoni.</div>
            @endforelse
        </div>
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
                <a href="/kontak" class="btn-cta-white">Hubungi Kami <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

@endsection