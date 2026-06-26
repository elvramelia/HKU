@extends('layouts.admin')

@section('content')
<div class="top-bar">
    <h4 class="fw-bold mb-0">Data Produk</h4>
    <a href="{{ route('admin.products.create') }}" class="btn btn-danger"><i class="bi bi-plus-lg me-1"></i> Tambah Produk</a>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card border-0 shadow-sm">
    <div class="card-body p-4">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="bg-light">
                    <tr>
                        <th width="50">#</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $key => $item)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td class="fw-bold">{{ $item->nama_produk }}</td>
                        <td>
                            @if($item->category)
                                <span class="badge bg-secondary">{{ $item->category->nama_kategori }}</span>
                            @else
                                <span class="badge bg-light text-dark">Tanpa Kategori</span>
                            @endif
                        </td>
                        <td>
                             <a href="{{ route('admin.products.edit', $item->id) }}" class="btn btn-sm btn-warning me-1">
        <i class="bi bi-pencil-square"></i>
    </a>
                            <form action="{{ route('admin.products.destroy', $item) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus produk ini?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-5 text-muted">
                            <i class="bi bi-inbox fs-1 d-block mb-2" style="opacity:0.3"></i>
                            Belum ada data produk. Klik tombol "Tambah Produk" untuk memulai.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection