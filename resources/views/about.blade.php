@extends('layouts.app')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="container position-relative" style="z-index:2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item active">Tentang Kami</li>
            </ol>
        </nav>
        <h1>Profil Perusahaan</h1>
    </div>
</section>

<!-- About Content -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <div class="about-logo-box">
                    <img src="https://picsum.photos/seed/hku-logo/200/200.jpg" alt="HKU Logo" 
                         style="border-radius:12px;">
                </div>
            </div>
            <div class="col-lg-7 about-text">
                <div class="section-tag">Profil Perusahaan</div>
                <h2>PT. Hardjadinata Karya Utama</h2>
                <p>
                    PT. Hardjadinata Karya Utama (HKU) adalah perusahaan yang bergerak di bidang 
                    penyediaan boiler, burner, dan sparepart industri yang berdiri di Surabaya, 
                    Indonesia. Dengan pengalaman bertahun-tahun, kami telah menjadi mitra terpercaya 
                    bagi berbagai perusahaan industri di Indonesia.
                </p>
                <p>
                    Kami berkomitmen untuk menyediakan produk-produk berkualitas tinggi dari 
                    brand-brand terkemuka dunia serta memberikan layanan terbaik kepada seluruh 
                    pelanggan kami. Dengan dukungan tim profesional yang berpengalaman, kami siap 
                    membantu Anda menemukan solusi industri yang efektif, efisien, dan terpercaya.
                </p>
                <p>
                    HKU terus berinovasi dan berkembang untuk memenuhi kebutuhan pasar yang semakin 
                    meningkat, dengan tetap mengutamakan kualitas, keandalan, dan kepuasan pelanggan 
                    sebagai prioritas utama kami.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="vision-mission">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-tag justify-content-center">Visi & Misi</div>
            <h2 class="section-title">Arah & Tujuan Kami</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="vm-card">
                    <div class="vm-icon">
                        <i class="bi bi-eye-fill"></i>
                    </div>
                    <h4>Visi</h4>
                    <p>
                        Menjadi perusahaan penyedia solusi boiler dan sparepart industri 
                        terdepan di Indonesia yang dikenal karena kualitas produk, 
                        keandalan layanan, dan komitmen terhadap kepuasan pelanggan.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vm-card">
                    <div class="vm-icon">
                        <i class="bi bi-bullseye"></i>
                    </div>
                    <h4>Misi</h4>
                    <p>
                        Menyediakan produk industri berkualitas tinggi dengan harga kompetitif, 
                        memberikan layanan profesional dan responsif, membangun kemitraan 
                        jangka panjang dengan pelanggan, serta terus berinovasi untuk memenuhi 
                        kebutuhan pasar.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="about-section">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-tag justify-content-center">Nilai Kami</div>
            <h2 class="section-title">Mengapa Memilih HKU?</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="service-card text-center">
                    <div class="service-icon mx-auto">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h5>Kualitas Terjamin</h5>
                    <p>Produk dari brand terkemuka dengan jaminan keaslian dan kualitas.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card text-center">
                    <div class="service-icon mx-auto">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <h5>Respon Cepat</h5>
                    <p>Tim kami siap merespon kebutuhan Anda dengan cepat dan tepat.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card text-center">
                    <div class="service-icon mx-auto">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h5>Tim Ahli</h5>
                    <p>Didukung tenaga ahli berpengalaman di bidang industri dan teknik.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card text-center">
                    <div class="service-icon mx-auto">
                        <i class="bi bi-hand-thumbs-up"></i>
                    </div>
                    <h5>Harga Kompetitif</h5>
                    <p>Penawaran harga terbaik tanpa mengorbankan kualitas produk dan layanan.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="container position-relative" style="z-index:2">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2>Ingin Mengenal HKU Lebih Dekat?</h2>
                <p>Jangan ragu untuk menghubungi kami. Tim kami siap membantu kebutuhan industri Anda.</p>
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