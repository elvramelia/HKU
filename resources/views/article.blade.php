@extends('layouts.app')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="container position-relative" style="z-index:2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item active">Artikel</li>
            </ol>
        </nav>
        <h1>Artikel & Informasi</h1>
    </div>
</section>

<!-- Articles Section -->
<section class="article-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="article-card">
                    <div class="article-img">
                        <img src="https://images.unsplash.com/photo-1565008447742-97f6f38c985c?q=80&w=600" alt="Artikel">
                    </div>
                    <div class="article-body">
                        <div class="article-meta">
                            <span><i class="bi bi-calendar3"></i> 15 Jan 2026</span>
                            <span><i class="bi bi-tag"></i> Boiler</span>
                        </div>
                        <h5><a href="#">Tips Perawatan Boiler Industri agar Tetap Optimal</a></h5>
                        <p>Pelajari cara merawat boiler industri Anda agar selalu beroperasi dengan efisiensi maksimal dan umur panjang.</p>
                        <a href="#" class="article-link">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="article-card">
                    <div class="article-img">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85f82e?q=80&w=600" alt="Artikel">
                    </div>
                    <div class="article-body">
                        <div class="article-meta">
                            <span><i class="bi bi-calendar3"></i> 10 Jan 2026</span>
                            <span><i class="bi bi-tag"></i> Burner</span>
                        </div>
                        <h5><a href="#">Memilih Burner yang Tepat untuk Industri Anda</a></h5>
                        <p>Panduan lengkap dalam memilih burner industri yang sesuai dengan kebutuhan dan spesifikasi pabrik Anda.</p>
                        <a href="#" class="article-link">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="article-card">
                    <div class="article-img">
                        <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?q=80&w=600" alt="Artikel">
                    </div>
                    <div class="article-body">
                        <div class="article-meta">
                            <span><i class="bi bi-calendar3"></i> 05 Jan 2026</span>
                            <span><i class="bi bi-tag"></i> Sparepart</span>
                        </div>
                        <h5><a href="#">Pentingnya Menggunakan Sparepart Original</a></h5>
                        <p>Ketahui mengapa penggunaan sparepart original sangat penting untuk keamanan dan performa peralatan industri.</p>
                        <a href="#" class="article-link">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="article-card">
                    <div class="article-img">
                        <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=600" alt="Artikel">
                    </div>
                    <div class="article-body">
                        <div class="article-meta">
                            <span><i class="bi bi-calendar3"></i> 28 Des 2025</span>
                            <span><i class="bi bi-tag"></i> Valve</span>
                        </div>
                        <h5><a href="#">Jenis-Jenis Valve Industri dan Fungsinya</a></h5>
                        <p>Kenali berbagai jenis valve yang digunakan di industri serta fungsinya masing-masing dalam sistem perpipaan.</p>
                        <a href="#" class="article-link">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="article-card">
                    <div class="article-img">
                        <img src="https://images.unsplash.com/photo-1621905252507-b35492cc74b4?q=80&w=600" alt="Artikel">
                    </div>
                    <div class="article-body">
                        <div class="article-meta">
                            <span><i class="bi bi-calendar3"></i> 20 Des 2025</span>
                            <span><i class="bi bi-tag"></i> Pompa</span>
                        </div>
                        <h5><a href="#">Perawatan Pompa Sentrifugal di Lingkungan Industri</a></h5>
                        <p>Panduan perawatan rutin pompa sentrifugal untuk menjaga performa dan mencegah kerusakan dini.</p>
                        <a href="#" class="article-link">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="article-card">
                    <div class="article-img">
                        <img src="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?q=80&w=600" alt="Artikel">
                    </div>
                    <div class="article-body">
                        <div class="article-meta">
                            <span><i class="bi bi-calendar3"></i> 15 Des 2025</span>
                            <span><i class="bi bi-tag"></i> Safety</span>
                        </div>
                        <h5><a href="#">Standar Keselamatan Operasional Boiler di Indonesia</a></h5>
                        <p>Informasi penting mengenai standar keselamatan dan regulasi pengoperasian boiler di Indonesia.</p>
                        <a href="#" class="article-link">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection