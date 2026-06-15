@extends('layouts.app')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="container position-relative" style="z-index:2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item active">Produk</li>
            </ol>
        </nav>
        <h1>Semua Produk</h1>
    </div>
</section>

<!-- Products Section -->
<section style="padding:80px 0">
    <div class="container">
        <!-- Filter Bar -->
        <div class="filter-bar">
            <div class="d-flex align-items-center gap-3 flex-wrap">
                <span class="fw-600" style="font-size:0.85rem; color:#64748b;">Filter:</span>
                <select class="form-select">
                    <option selected>Semua Kategori</option>
                    <option>Boiler</option>
                    <option>Burner</option>
                    <option>Valve & Fitting</option>
                    <option>Pompa</option>
                    <option>Sparepart</option>
                </select>
                <select class="form-select">
                    <option selected>Urutkan: Terbaru</option>
                    <option>Nama A-Z</option>
                    <option>Nama Z-A</option>
                </select>
                <button class="btn btn-sm" style="background:#ef4444; color:#fff; border-radius:6px; font-size:0.8rem; font-weight:600; padding:6px 16px;">
                    Reset Filter
                </button>
            </div>
            <div class="product-count">
                Menampilkan <strong>6</strong> dari <strong>6</strong> produk
            </div>
        </div>

        <!-- Product Grid -->
        <div class="row g-4">

            <!-- Produk 1: Fire Tube Boiler -->
            <div class="col-md-6 col-lg-4">
                <a href="/produk/detail" class="text-decoration-none">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://images.unsplash.com/photo-1631567091066-5f6c7a5a5576?q=80&w=600" alt="Fire Tube Boiler">
                            <span class="product-badge">Unggulan</span>
                        </div>
                        <div class="product-body">
                            <div class="product-category">Boiler</div>
                            <h5>Fire Tube Boiler</h5>
                            <p>Boiler pipa api dengan kapasitas dan efisiensi tinggi untuk kebutuhan industri berat.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Produk 2: Industrial Burner -->
            <div class="col-md-6 col-lg-4">
                <a href="/produk/detail" class="text-decoration-none">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85f82e?q=80&w=600" alt="Industrial Burner">
                            <span class="product-badge">Unggulan</span>
                        </div>
                        <div class="product-body">
                            <div class="product-category">Burner</div>
                            <h5>Industrial Burner</h5>
                            <p>Burner modulating dengan sistem pembakaran presisi dan ramah lingkungan.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Produk 3: Control Valve -->
            <div class="col-md-6 col-lg-4">
                <a href="/produk/detail" class="text-decoration-none">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=600" alt="Control Valve">
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

            <!-- Produk 4: Centrifugal Pump -->
            <div class="col-md-6 col-lg-4">
                <a href="/produk/detail" class="text-decoration-none">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://images.unsplash.com/photo-1621905252507-b35492cc74b4?q=80&w=600" alt="Water Pump">
                        </div>
                        <div class="product-body">
                            <div class="product-category">Pompa</div>
                            <h5>Centrifugal Pump</h5>
                            <p>Pompa sentrifugal bertekanan tinggi untuk sirkulasi air dan fluida industri.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Produk 5: Gasket & Sealing -->
            <div class="col-md-6 col-lg-4">
                <a href="/produk/detail" class="text-decoration-none">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?q=80&w=600" alt="Sparepart">
                        </div>
                        <div class="product-body">
                            <div class="product-category">Sparepart</div>
                            <h5>Gasket & Sealing</h5>
                            <p>Komponen gasket dan sealing berkualitas tinggi untuk berbagai jenis boiler dan pipa.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Produk 6: Pressure Gauge -->
            <div class="col-md-6 col-lg-4">
                <a href="/produk/detail" class="text-decoration-none">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?q=80&w=600" alt="Pressure Gauge">
                            <span class="product-badge">Unggulan</span>
                        </div>
                        <div class="product-body">
                            <div class="product-category">Instrument</div>
                            <h5>Pressure Gauge</h5>
                            <p>Alat ukur tekanan presisi untuk monitoring sistem boiler dan instalasi pipa.</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="container position-relative" style="z-index:2">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2>Tidak Menemukan Produk yang Dicari?</h2>
                <p>Hubungi kami dan tim kami akan membantu Anda menemukan produk yang sesuai kebutuhan.</p>
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