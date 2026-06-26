@extends('layouts.admin')

@section('content')
<div class="top-bar">
    <h4 class="fw-bold mb-0">Edit Testimoni</h4>
    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-outline-secondary"><i class="bi bi-arrow-left me-1"></i> Kembali</a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-4">
        <!-- Route diubah ke .update dan menyertakan ID -->
        <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- WAJIB ADA UNTUK EDIT -->
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Nama Klien</label>
                    <!-- Mengambil data lama, fallback ke old() jika validasi gagal -->
                    <input type="text" name="name" class="form-control" value="{{ old('name', $testimonial->name) }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Jabatan / Perusahaan</label>
                    <input type="text" name="position" class="form-control" value="{{ old('position', $testimonial->position) }}">
                </div>
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-bold">Isi Testimoni</label>
                <textarea name="content" class="form-control" rows="4" required>{{ old('content', $testimonial->content) }}</textarea>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Ganti Foto Klien (Kosongkan jika tidak ingin diganti)</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                    
                    <!-- Menampilkan Foto Lama -->
                    @if($testimonial->image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $testimonial->image) }}" class="rounded-circle" width="80" height="80" style="object-fit: cover;" alt="Foto Lama">
                            <small class="text-muted d-block mt-1">Foto saat ini</small>
                        </div>
                    @endif
                </div>
                <div class="col-md-6 mb-3 d-flex align-items-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_active" id="isActive" {{ $testimonial->is_active ? 'checked' : '' }}>
                        <label class="form-check-label" for="isActive">Tampilkan di Website (Aktif)</label>
                    </div>
                </div>
            </div>

            <button class="btn btn-warning px-4"><i class="bi bi-pencil-square me-1"></i> Update Testimoni</button>
        </form>
    </div>
</div>
@endsection