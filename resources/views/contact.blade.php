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
                            <p>Spazio Tower Office Building Lantai 2 Unit 201<br>JL.Mayjend Jonosewono No.Kav 3<br>Surabaya, Jawa Timur

Indonesia</p>
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
           <!-- Contact Form -->
<div class="col-lg-7">
    <div class="contact-form-card">
        <h4>Kirim Pesan</h4>
        
        <!-- Tambahkan action, method POST, dan @csrf -->
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            
            <!-- Pesan Success / Error -->
            @if(session('success'))
                <div class="alert alert-success border-0 py-3">
                    <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
                </div>
            @endif

            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Masukkan nama Anda" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Masukkan email Anda" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label">No. Telepon</label>
                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" placeholder="Masukkan nomor telepon">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Subjek</label>
                    <select name="subject" class="form-control">
                        <option value="">Pilih Subjek</option>
                        <option>Konsultasi Produk</option>
                        <option>Permintaan Penawaran</option>
                        <option>Layanan Teknis</option>
                        <option>Lainnya</option>
                    </select>
                </div>
                <div class="col-12">
                    <label class="form-label">Pesan</label>
                    <textarea name="message" class="form-control @error('message') is-invalid @enderror" rows="5" placeholder="Tulis pesan Anda di sini..." required>{{ old('message') }}</textarea>
                    @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
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