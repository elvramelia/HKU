@extends('layouts.admin')

@section('content')
<div class="top-bar">
    <h4 class="fw-bold mb-0">Data Testimoni</h4>
    <a href="{{ route('admin.testimonials.create') }}" class="btn btn-danger"><i class="bi bi-plus-lg me-1"></i> Tambah Testimoni</a>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card border-0 shadow-sm">
    <div class="card-body p-0">
        <table class="table table-hover align-middle mb-0">
            <thead class="bg-light">
                <tr>
                    <th width="50">#</th>
                    <th>Nama</th>
                    <th>Testimoni</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($testimonials as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>
                        <div class="d-flex align-items-center">
                            @if($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" class="rounded-circle me-2" width="40" height="40" style="object-fit:cover">
                            @else
                                <div class="bg-secondary text-white rounded-circle me-2 d-flex align-items-center justify-content-center" width="40" height="40" style="width:40px;height:40px">{{ strtoupper(substr($item->name, 0, 1)) }}</div>
                            @endif
                            <div>
                                <div class="fw-bold">{{ $item->name }}</div>
                                <small class="text-muted">{{ $item->position }}</small>
                            </div>
                        </div>
                    </td>
                    <td>{{ Str::limit($item->content, 80) }}</td>
                    <td>
                        @if($item->is_active)
                            <span class="badge bg-success">Aktif</span>
                        @else
                            <span class="badge bg-light text-dark">Nonaktif</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.testimonials.edit', $item) }}" class="btn btn-sm btn-warning me-1"><i class="bi bi-pencil"></i></a>
                        <form action="{{ route('admin.testimonials.destroy', $item) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus testimoni ini?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" class="text-center p-5 text-muted">Belum ada testimoni.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection