@extends('layouts.admin')

@section('content')
<div class="top-bar">
    <div>
        <h4 class="fw-bold mb-0">Dashboard</h4>
        <small class="text-muted">Selamat datang kembali, {{ Auth::user()->name }}!</small>
    </div>
    <span class="text-muted"><i class="bi bi-calendar3 me-1"></i> {{ date('d F Y') }}</span>
</div>

<div class="row g-4 mb-5">
    <div class="col-md-4">
        <div class="stat-card border-0 shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <p class="text-muted mb-1 fw-bold" style="font-size:0.85rem">Total Produk</p>
                    <h2 class="fw-bold mb-0">{{ $productCount }}</h2>
                </div>
                <div class="icon-box bg-danger bg-opacity-10 text-danger">
                    <i class="bi bi-box-seam-fill"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="stat-card border-0 shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <p class="text-muted mb-1 fw-bold" style="font-size:0.85rem">Total Artikel</p>
                    <h2 class="fw-bold mb-0">{{ $articleCount }}</h2>
                </div>
                <div class="icon-box bg-primary bg-opacity-10 text-primary">
                    <i class="bi bi-newspaper"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="stat-card border-0 shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <p class="text-muted mb-1 fw-bold" style="font-size:0.85rem">Pesan Masuk</p>
                    <h2 class="fw-bold mb-0">{{ $unreadMessages }}</h2>
                </div>
                <div class="icon-box bg-success bg-opacity-10 text-success">
                    <i class="bi bi-envelope-fill"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-header bg-white py-3 border-bottom">
        <h6 class="mb-0 fw-bold">Selamat Datang di Panel Admin HKU</h6>
    </div>
    <div class="card-body p-4">
        <div class="text-center py-5 text-muted">
            <i class="bi bi-clipboard2-data fs-1 mb-3 d-block" style="opacity:0.3"></i>
            <p class="mb-0">Gunakan menu di sebelah kiri untuk mengelola website.</p>
            <small>Anda bisa mulai menambahkan produk atau artikel baru.</small>
        </div>
    </div>
</div>
@endsection