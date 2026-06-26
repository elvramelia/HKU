@extends('layouts.admin')

@section('content')
<div class="top-bar">
    <h4 class="fw-bold mb-0">Edit Produk</h4>
    <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary"><i class="bi bi-arrow-left me-1"></i> Kembali</a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-4">
        <!-- 
           Penting: Method harus PUT untuk update, 
           dan route menyertakan ID produk ($product->id)
        -->
        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') 

           <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Nama Produk</label>
                    <!-- Menggunakan value dari $product, bukan old() -->
                    <input type="text" name="nama_produk" class="form-control" value="{{ $product->nama_produk }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Kategori</label>
                    <select name="category_id" class="form-select" required>
                        <option value="">Pilih Kategori</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? 'selected' : '' }}>
                                {{ $cat->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-bold">Tipe Produk</label>
                <input type="text" name="tipe" class="form-control" value="{{ $product->tipe }}">
            </div>

           <!-- ... kode form sebelumnya ... -->

<div class="mb-3">
    <label class="form-label fw-bold">Gambar Produk</label>
    <input type="file" name="images[]" class="form-control" multiple accept="image/*">
    <small class="text-muted">Upload gambar baru (gambar lama tidak akan terhapus otomatis).</small>
    
    <!-- TAMPILAN GAMBAR LAMA (PERBAIKAN DI SINI) -->
    @if($product->images && count($product->images) > 0)
        <div class="mt-3">
            <p class="small text-muted mb-2">Gambar saat ini:</p>
            <div class="d-flex gap-2 flex-wrap">
                @foreach($product->images as $img)
                    <!-- Ganti $img->path menjadi $img->image_path -->
                    <img src="{{ asset('storage/' . $img->image_path) }}" 
                         width="80" height="80" 
                         class="object-fit-cover rounded border shadow-sm" 
                         alt="Product Image">
                @endforeach
            </div>
        </div>
    @endif
</div>

<!-- ... kode form setelahnya ... -->

            <div class="mb-3">
                <label class="form-label fw-bold">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="4" required>{{ $product->deskripsi }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Spesifikasi</label>
                <textarea name="spesifikasi" class="form-control" rows="3">{{ $product->spesifikasi }}</textarea>
            </div>

            <button class="btn btn-warning px-4"><i class="bi bi-pencil-square me-1"></i> Update Produk</button>
        </form>
    </div>
</div>
@endsection