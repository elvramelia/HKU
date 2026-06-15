@extends('layouts.app')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="container position-relative" style="z-index:2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item active">Hubungi Kami</li>
            </ol>
        </nav>
        <h1>Hubungi Kami</h1>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="text-center mb-5">
            <p class="section-desc mx-auto">
                Silakan hubungi tim kami untuk konsultasi, pertanyaan produk, atau kebutuhan lainnya. 
                Kami siap membantu Anda.
            </p>
        </div>
        <div class="row g-4">
            <!-- Contact Info -->
            <div class="col-lg-5">
                <div class="contact-info-card">
                    <h4><i class="bi bi-geo-alt-fill me-2" style="color:#ef4444"></i> Lokasi & Kontak</h4>
                    
                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <div>
                            <h6>Kantor Pusat</h6>
                            <p>Jl. Rungkut Industri I/No. 15<br>Surabaya 60293, Jawa Timur<br>Indonesia</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div>
                            <h6>Telepon Kantor</h6>
                            <p><a href="tel:0317328168">(031) 7328168</a></p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <div>
                            <h6>WhatsApp</h6>
                            <p><a href="https://wa.me/6281234567890">+62 812-3456-7890</a></p>
                        </div>
                    </div>

                    <hr style="border-color:rgba(255,255,255,0.08); margin:28px 0;">

                    <h4><i class="bi bi-headset me-2" style="color:#ef4444"></i> Layanan Pelanggan</h4>
                    
                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <h6>Email</h6>
                            <p><a href="mailto:info@hku.co.id">info@hku.co.id</a></p>
                            <p><a href="mailto:sales@hku.co.id">sales@hku.co.id</a></p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <div>
                            <h6>Jam Operasional</h6>
                            <p>Senin - Jumat: 08:00 - 17:00 WIB<br>Sabtu: 08:00 - 12:00 WIB<br>Minggu & Hari Libur: Tutup</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="contact-form-card">
                    <h4>Kirim Pesan</h4>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="Masukkan nama Anda">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="Masukkan email Anda">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">No. Telepon</label>
                                <input type="tel" class="form-control" placeholder="Masukkan nomor telepon">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Subjek</label>
                                <select class="form-control">
                                    <option value="">Pilih Subjek</option>
                                    <option>Konsultasi Produk</option>
                                    <option>Permintaan Penawaran</option>
                                    <option>Layanan Teknis</option>
                                    <option>Lainnya</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Pesan</label>
                                <textarea class="form-control" rows="5" placeholder="Tulis pesan Anda di sini..."></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn-submit">
                                    <i class="bi bi-send-fill me-2"></i> Kirim Pesan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5!2d112.78!3d-7.33!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sSurabaya!5e0!3m2!1sid!2sid!4v1"
        allowfullscreen="" 
        loading="lazy">
    </iframe>
</section>

@endsection