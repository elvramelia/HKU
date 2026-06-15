@extends('layouts.app')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="container position-relative" style="z-index:2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item"><a href="/produk">Produk</a></li>
                <li class="breadcrumb-item active">FBR Burner Series</li>
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
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85f82e?q=80&w=800" 
                     alt="FBR Burner" 
                     class="detail-img-main"
                     id="mainImage">
                
                <div class="detail-img-thumbs">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85f82e?q=80&w=200" 
                         alt="Thumb 1" 
                         class="detail-thumb active"
                         onclick="changeImage(this, 'https://images.unsplash.com/photo-1558618666-fcd25c85f82e?q=80&w=800')">
                    <img src="https://images.unsplash.com/photo-1565008447742-97f6f38c985c?q=80&w=200" 
                         alt="Thumb 2" 
                         class="detail-thumb"
                         onclick="changeImage(this, 'https://images.unsplash.com/photo-1565008447742-97f6f38c985c?q=80&w=800')">
                    <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=200" 
                         alt="Thumb 3" 
                         class="detail-thumb"
                         onclick="changeImage(this, 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=800')">
                </div>
            </div>

            <!-- Info Column -->
            <div class="col-lg-6">
                <div class="detail-category">FBR Burner</div>
                <h2 class="detail-title">FBR Series Industrial Burner</h2>
                <p class="detail-desc">
                    Burner industri seri FBR dirancang untuk memberikan performa pembakaran yang optimal 
                    dan efisien. Dilengkapi dengan teknologi progressive dan modulating, burner ini 
                    cocok untuk aplikasi boiler, kiln, dan heater industri dengan kapasitas menengah hingga besar. 
                    Memiliki sistem kontrol keamanan berlapis dan mudah diintegrasikan dengan sistem otomasi pabrik.
                </p>

                <!-- Simple Specs Table -->
                <table class="spec-table">
                    <tr>
                        <td>Kategori</td>
                        <td>: FBR Burner</td>
                    </tr>
                    <tr>
                        <td>Tipe</td>
                        <td>: Progressive / Modulating</td>
                    </tr>
                    <tr>
                        <td>Bahan Bakar</td>
                        <td>: Gas / Diesel (Dual Fuel)</td>
                    </tr>
                    <tr>
                        <td>Kapasitas</td>
                        <td>: 100 kW - 10 MW</td>
                    </tr>
                    <tr>
                        <td>Aplikasi</td>
                        <td>: Boiler, Kiln, Thermal Heater</td>
                    </tr>
                </table>

                <!-- Action Buttons -->
                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="/kontak" class="btn-request-quote">
                        <i class="bi bi-envelope-paper"></i> Minta Penawaran
                    </a>
                    <a href="https://wa.me/6281234567890?text=Halo%20HKU,%20saya%20tertarik%20dengan%20produk%20FBR%20Burner" target="_blank" class="btn-wa">
                        <i class="bi bi-whatsapp"></i> Chat WhatsApp
                    </a>
                </div>

                <!-- Info Box -->
                <div class="info-box">
                    <h6><i class="bi bi-info-circle-fill"></i> Butuh Spesifikasi Teknis Lengkap?</h6>
                    <p>Hubungi tim teknis kami untuk mendapatkan datasheet lengkap, manual book, dan konsultasi penentuan kapasitas burner yang tepat untuk industri Anda.</p>
                </div>
            </div>
        </div>

        <!-- Tabs Section (Deskripsi & Fitur) -->
        <div class="mt-5 pt-4">
            <ul class="nav detail-tabs mb-4" role="tablist">
                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#deskripsi">Deskripsi Lengkap</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#fitur">Fitur Utama</button>
                </li>
            </ul>
            
            <div class="tab-content">
                <div class="tab-pane fade show active" id="deskripsi">
                    <div class="row">
                        <div class="col-lg-10">
                            <p style="color:#475569; line-height:1.8; font-size:0.95rem;">
                                PT. Hardjadinata Karya Utama (HKU) menyediakan FBR Series Burner sebagai solusi 
                                pembakaran andal untuk sektor industri. Burner ini mampu beroperasi pada berbagai 
                                kondisi beban dengan rasio udara-bahan bakar yang presisi, sehingga menghasilkan 
                                pembakaran bersih dan rendah emisi. Konstruksinya yang kokoh dan kompak memudahkan 
                                proses instalasi serta perawatan rutin. Cocok untuk pabrik pengolahan kelapa sawit, 
                                makanan dan minuman, tekstil, serta petrokimia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="fitur">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul style="list-style:none; padding:0; color:#475569; font-size:0.9rem; line-height:2;">
                                <li><i class="bi bi-check-circle-fill me-2" style="color:#ef4444"></i> Sistem pembakaran progressive dan modulating</li>
                                <li><i class="bi bi-check-circle-fill me-2" style="color:#ef4444"></i> Kompatibel bahan bakar ganda (Gas & Diesel)</li>
                                <li><i class="bi bi-check-circle-fill me-2" style="color:#ef4444"></i> Kontrol api otomatis dengan flame scanner</li>
                                <li><i class="bi bi-check-circle-fill me-2" style="color:#ef4444"></i> Efisiensi pembakaran hingga >98%</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul style="list-style:none; padding:0; color:#475569; font-size:0.9rem; line-height:2;">
                                <li><i class="bi bi-check-circle-fill me-2" style="color:#ef4444"></i> Low NOx emission (ramah lingkungan)</li>
                                <li><i class="bi bi-check-circle-fill me-2" style="color:#ef4444"></i> Panel kontrol digital terintegrasi</li>
                                <li><i class="bi bi-check-circle-fill me-2" style="color:#ef4444"></i> Material tahan suhu tinggi & korosi</li>
                                <li><i class="bi bi-check-circle-fill me-2" style="color:#ef4444"></i> Garansi resmi & layanan after-sales HKU</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products -->
<section style="padding:60px 0 100px; background:#f8fafc;">
    <div class="container">
        <div class="d-flex justify-content-between align-items-end mb-5 flex-wrap gap-3">
            <div>
                <div class="section-tag">Produk Lainnya</div>
                <h2 class="section-title mb-0">Kategori Serupa</h2>
            </div>
            <a href="/produk" class="btn-hero-primary" style="background:#0a1628; font-size:0.8rem; padding:10px 24px;">
                Lihat Semua <i class="bi bi-arrow-right"></i>
            </a>
        </div>
        <div class="row g-4">
            <!-- Related 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1631567091066-5f6c7a5a5576?q=80&w=600" alt="Boiler">
                        <span class="product-badge">Boiler</span>
                    </div>
                    <div class="product-body">
                        <div class="product-category">Boiler</div>
                        <h5>Fire Tube Boiler</h5>
                        <p>Boiler pipa api dengan kapasitas dan efisiensi tinggi untuk kebutuhan industri.</p>
                    </div>
                </div>
            </div>
            <!-- Related 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=600" alt="Valve">
                        <span class="product-badge">Valve & Instrumentation</span>
                    </div>
                    <div class="product-body">
                        <div class="product-category">Valve & Instrumentation</div>
                        <h5>Control Valve</h5>
                        <p>Katup kontrol presisi untuk regulasi aliran fluida dalam sistem industri.</p>
                    </div>
                </div>
            </div>
            <!-- Related 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?q=80&w=600" alt="Sparepart">
                        <span class="product-badge">Spare Part</span>
                    </div>
                    <div class="product-body">
                        <div class="product-category">Spare Part</div>
                        <h5>Nozzle & Ignition Transformer</h5>
                        <p>Suku cadang burner original untuk menjaga performa pembakaran tetap optimal.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    function changeImage(thumb, newSrc) {
        // Change main image
        document.getElementById('mainImage').src = newSrc;
        
        // Remove active class from all thumbs
        document.querySelectorAll('.detail-thumb').forEach(el => el.classList.remove('active'));
        
        // Add active class to clicked thumb
        thumb.classList.add('active');
    }
</script>
@endsection