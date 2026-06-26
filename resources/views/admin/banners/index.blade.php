@extends('layouts.admin')

@section('content')
<div class="top-bar">
    <h4 class="fw-bold mb-0">Kelola Banner</h4>
    <a href="{{ route('admin.banners.create') }}" class="btn btn-danger"><i class="bi bi-plus-lg me-1"></i> Tambah Banner</a>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card border-0 shadow-sm">
    <div class="card-body p-0">
        <table class="table table-hover align-middle mb-0">
            <thead class="bg-light">
                <tr>
                    <th width="50">Urutan</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($banners as $item)
                <tr>
                    <td class="text-center fw-bold">{{ $item->order }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $item->image) }}" class="rounded border" width="120" height="60" style="object-fit: cover;" alt="Banner">
                    </td>
                    <td>
                        <div class="fw-bold">{{ $item->title }}</div>
                        <small class="text-muted d-block">Link: {{ $item->button_link ?? 'Tanpa Link' }}</small>
                    </td>
                    <td>
                        @if($item->is_active)
                            <span class="badge bg-success">Aktif</span>
                        @else
                            <span class="badge bg-light text-dark">Nonaktif</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.banners.edit', $item) }}" class="btn btn-sm btn-warning me-1"><i class="bi bi-pencil"></i></a>
                        <form action="{{ route('admin.banners.destroy', $item) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus banner ini?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" class="text-center p-5 text-muted">Belum ada banner.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection