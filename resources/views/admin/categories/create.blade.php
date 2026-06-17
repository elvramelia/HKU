@extends('layouts.admin')

@section('content')
<div class="top-bar">
    <h4 class="fw-bold mb-0">Tambah Kategori</h4>
    <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left me-1"></i> Kembali
    </a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-4">
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label fw-bold">Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control @error('nama_kategori') is-invalid @enderror"
                       value="{{ old('nama_kategori') }}" required>
                @error('nama_kategori')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-danger px-4"><i class="bi bi-save me-1"></i> Simpan</button>
        </form>
    </div>
</div>
@endsection