@extends('layouts.admin')

@section('content')
<div class="top-bar">
    <h4 class="fw-bold mb-0">Tambah Testimoni</h4>
    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-outline-secondary"><i class="bi bi-arrow-left me-1"></i> Kembali</a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-4">
        <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Nama Klien</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Jabatan / Perusahaan</label>
                    <input type="text" name="position" class="form-control" value="{{ old('position') }}">
                </div>
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-bold">Isi Testimoni</label>
                <textarea name="content" class="form-control" rows="4" required>{{ old('content') }}</textarea>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Foto Klien</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                </div>
                <div class="col-md-6 mb-3 d-flex align-items-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_active" id="isActive" checked>
                        <label class="form-check-label" for="isActive">Tampilkan di Website (Aktif)</label>
                    </div>
                </div>
            </div>

            <button class="btn btn-danger px-4"><i class="bi bi-save me-1"></i> Simpan</button>
        </form>
    </div>
</div>
@endsection