@extends('layouts.admin')

@section('content')
<div class="top-bar">
    <h4 class="fw-bold mb-0">Tambah Produk Baru</h4>
    <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary"><i class="bi bi-arrow-left me-1"></i> Kembali</a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-4">
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
           <div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label fw-bold">Nama Produk</label>
        <input type="text" name="nama_produk" class="form-control" value="{{ old('nama_produk') }}" required>
    </div>
    <div class="col-md-6 mb-3">
        <label class="form-label fw-bold">Kategori</label>
        <select name="category_id" class="form-select" required>
            <option value="">Pilih Kategori</option>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}" @selected(old('category_id') == $cat->id)>
                    {{ $cat->nama_kategori }}
                </option>
            @endforeach
        </select>
    </div>
</div>
            
            <div class="mb-3">
                <label class="form-label fw-bold">Tipe Produk (Contoh: Progressive / Modulating)</label>
                <input type="text" name="tipe" class="form-control" value="{{ old('tipe') }}">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Gambar Produk (Bisa Lebih dari 1)</label>
                <input type="file" name="images[]" class="form-control" multiple accept="image/*">
                <small class="text-muted">Hold CTRL untuk memilih beberapa gambar sekaligus.</small>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="4" required>{{ old('deskripsi') }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Spesifikasi</label>
                <textarea name="spesifikasi" class="form-control" rows="3">{{ old('spesifikasi') }}</textarea>
            </div>

            <button class="btn btn-danger px-4"><i class="bi bi-save me-1"></i> Simpan Produk</button>
        </form>
    </div>
</div>
@endsection