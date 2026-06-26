@extends('layouts.app')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="container position-relative" style="z-index:2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item"><a href="/produk">Produk</a></li>
                <li class="breadcrumb-item active">{{ $product->nama_produk }}</li>
            </ol>
        </nav>
        <h1>{{ $product->nama_produk }}</h1>
    </div>
</section>

<!-- Product Detail Section -->
<section class="product-detail-section">
    <div class="container">
        <div class="row g-5">
            <!-- Kolom Kiri: Gambar -->
            <div class="col-lg-6">
                <img id="mainImage" src="{{ $product->images->count() > 0 ? asset('storage/' . $product->images->first()->image_path) : 'https://via.placeholder.com/600x450?text=No+Image' }}" class="detail-img-main" alt="{{ $product->nama_produk }}">
                
                @if($product->images->count() > 1)
                <div class="detail-img-thumbs">
                    @foreach($product->images as $key => $img)
                        <img src="{{ asset('storage/' . $img->image_path) }}" 
                             class="detail-thumb {{ $key == 0 ? 'active' : '' }}" 
                             onclick="changeImage(this)" 
                             alt="Thumb">
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Kolom Kanan: Info Produk -->
            <div class="col-lg-6">
                <div class="detail-category">{{ $product->category->nama_kategori ?? 'Lainnya' }}</div>
                <h2 class="detail-title">{{ $product->nama_produk }}</h2>
                
                @if($product->tipe)
                    <p class="text-muted mb-3"><strong>Tipe:</strong> {{ $product->tipe }}</p>
                @endif

                <div class="detail-desc">
                    {!! nl2br(e($product->deskripsi)) !!}
                </div>

                <div class="d-flex gap-3 flex-wrap mt-4">
                    <a href="/kontak" class="btn-request-quote">
                        <i class="bi bi-envelope-fill"></i> Minta Penawaran
                    </a>
                    <a href="https://wa.me/6281216951155?text=Halo,%20saya%20tertarik%20dengan%20produk%20{{ urlencode($product->nama_produk) }}" target="_blank" class="btn-wa">
                        <i class="bi bi-whatsapp"></i> Tanya via WhatsApp
                    </a>
                </div>

                <div class="info-box mt-4">
                    <h6><i class="bi bi-info-circle-fill"></i> Informasi Tambahan</h6>
                    <p>Untuk spesifikasi teknis lengkap, ketersediaan stok, dan harga terbaik, silakan hubungi tim sales kami melalui tombol di atas atau langsung ke nomor WhatsApp kami.</p>
                </div>
            </div>
        </div>

        <!-- Tab Spesifikasi (Jika Ada) -->
        @if($product->spesifikasi)
        <div class="row mt-5 pt-4">
            <div class="col-12">
                <ul class="nav nav-tabs detail-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="spec-tab" data-bs-toggle="tab" data-bs-target="#spec" type="button" role="tab">Spesifikasi</button>
                    </li>
                </ul>
                <div class="tab-content p-4 border border-top-0 rounded-bottom" id="myTabContent">
                    <div class="tab-pane fade show active" id="spec" role="tabpanel">
                        <table class="spec-table">
                            @php
                                // Memecah spesifikasi per baris baru
                                $specs = explode("\n", $product->spesifikasi);
                            @endphp
                            @foreach($specs as $spec)
                                @if(trim($spec) !== '')
                                    @php
                                        // Misal format spesifikasi di database: "Nama Specs : Value"
                                        $parts = explode(':', $spec, 2);
                                        $label = trim($parts[0] ?? '');
                                        $value = trim($parts[1] ?? '');
                                    @endphp
                                    <tr>
                                        <td>{{ $label }}</td>
                                        <td>{{ $value }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Produk Terkait -->
        @if($relatedProducts->count() > 0)
        <div class="mt-5 pt-4 border-top">
            <h4 class="fw-bold mb-4">Produk Lainnya</h4>
            <div class="row g-4">
                @foreach($relatedProducts as $item)
                <div class="col-md-6 col-lg-3">
                    <a href="/produk/{{ $item->slug }}" class="text-decoration-none">
                        <div class="product-card">
                            <div class="product-img">
                                @if($item->images->count() > 0)
                                    <img src="{{ asset('storage/' . $item->images->first()->image_path) }}" alt="{{ $item->nama_produk }}">
                                @else
                                    <img src="https://via.placeholder.com/600x400?text=No+Image" alt="No Image">
                                @endif
                            </div>
                            <div class="product-body">
                                <div class="product-category">{{ $item->category->nama_kategori ?? '' }}</div>
                                <h5>{{ $item->nama_produk }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</section>

@endsection

@section('scripts')
<script>
    // Script untuk mengganti gambar utama saat thumbnail diklik
    function changeImage(thumb) {
        const mainImg = document.getElementById('mainImage');
        mainImg.src = thumb.src;
        
        // Hapus class active dari semua thumb
        document.querySelectorAll('.detail-thumb').forEach(el => el.classList.remove('active'));
        // Tambah class active ke thumb yang diklik
        thumb.classList.add('active');
    }
</script>
@endsection