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
        <!-- Filter Bar (Sekarang Dinamis) -->
        <div class="filter-bar">
            <div class="d-flex align-items-center gap-3 flex-wrap">
                <span class="fw-600" style="font-size:0.85rem; color:#64748b;">Filter:</span>
                
                <!-- Dropdown Kategori Dinamis -->
                <select id="categoryFilter" class="form-select" onchange="filterProducts()">
                    <option value="{{ route('produk.index') }}">Semua Kategori</option>
                    @foreach($categories as $cat)
                       <option value="{{ route('produk.index', ['category' => $cat->id]) }}" {{ request()->get('category') == $cat->id ? 'selected' : '' }}>
                            {{ $cat->nama_kategori }}
                        </option>
                    @endforeach
                </select>

                <a href="{{ route('produk.index') }}" class="btn btn-sm" style="background:#64748b; color:#fff; border-radius:6px; font-size:0.8rem; font-weight:600; padding:6px 16px; text-decoration:none;">
                    Reset Filter
                </a>
            </div>
            <div class="product-count">
                Menampilkan <strong>{{ $products->count() }}</strong> dari <strong>{{ $products->total() }}</strong> produk
            </div>
        </div>

        <!-- Product Grid (Sekarang Dinamis) -->
        <div class="row g-4">
            @forelse($products as $product)
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('produk.show', $product->slug) }}" class="text-decoration-none">
                    <div class="product-card">
                        <div class="product-img">
                            @if($product->images->count() > 0)
                                <img src="{{ asset('storage/' . $product->images->first()->image_path) }}" alt="{{ $product->nama_produk }}">
                            @else
                                <img src="https://via.placeholder.com/600x400?text=No+Image" alt="No Image">
                            @endif
                            
                            @if($product->is_featured ?? false)
                                <span class="product-badge">Unggulan</span>
                            @endif
                        </div>
                        <div class="product-body">
                            <div class="product-category">{{ $product->category->nama_kategori ?? 'Lainnya' }}</div>
                            <h5>{{ $product->nama_produk }}</h5>
                            <p>{{ \Illuminate\Support\Str::limit(strip_tags($product->deskripsi), 80) }}</p>
                        </div>
                    </div>
                </a>
            </div>
            @empty
            <div class="col-12 text-center py-5 text-muted">
                <i class="bi bi-inbox fs-1 d-block mb-3" style="opacity:0.3"></i>
                <p class="fw-bold">Belum ada produk di kategori ini.</p>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-5">
            {{ $products->links() }}
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

@section('scripts')
<script>
    // Script sederhana untuk pindah halaman saat dropdown kategori dipilih
    function filterProducts() {
        let url = document.getElementById('categoryFilter').value;
        if(url) {
            window.location.href = url;
        }
    }
</script>
@endsection