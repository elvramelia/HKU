@extends('layouts.admin')

@section('content')
<div class="top-bar">
    <h4 class="fw-bold mb-0">Tambah Banner Baru</h4>
    <a href="{{ route('admin.banners.index') }}" class="btn btn-outline-secondary"><i class="bi bi-arrow-left me-1"></i> Kembali</a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-4">
        <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Judul Banner (Gunakan <code><br></code> untuk ganti baris)</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" required placeholder="Contoh: Industrial<br>Boiler & Burner">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Subjudul (Badge kecil)</label>
                    <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle') }}" placeholder="Contoh: Specialist Supplier">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Deskripsi Singkat</label>
                <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Gambar Banner (Wajib)</label>
                    <input type="file" name="image" class="form-control" accept="image/*" required>
                    <small class="text-muted">Rasio yang disarankan: 16:9 (Contoh: 1920x1080)</small>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label fw-bold">Urutan Tampil</label>
                    <input type="number" name="order" class="form-control" value="{{ old('order', 0) }}" min="0">
                </div>
                <div class="col-md-3 mb-3 d-flex align-items-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_active" id="isActive" checked>
                        <label class="form-check-label" for="isActive">Status Aktif</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Teks Tombol</label>
                    <input type="text" name="button_text" class="form-control" value="{{ old('button_text') }}" placeholder="Contoh: Lihat Produk">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Link Tombol</label>
                    <input type="text" name="button_link" class="form-control" value="{{ old('button_link') }}" placeholder="Contoh: /produk">
                </div>
            </div>

            <button class="btn btn-danger px-4"><i class="bi bi-save me-1"></i> Simpan Banner</button>
        </form>
    </div>
</div>
@endsection