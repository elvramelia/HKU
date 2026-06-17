@extends('layouts.admin')

@section('content')
<div class="top-bar">
    <h4 class="fw-bold mb-0">Data Kategori</h4>
    <a href="{{ route('admin.categories.create') }}" class="btn btn-danger">
        <i class="bi bi-plus-lg me-1"></i> Tambah Kategori
    </a>
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
                        <th>Nama Kategori</th>
                        <th width="100">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $key => $cat)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td class="fw-bold">{{ $cat->nama_kategori }}</td>
                        <td>
                            <form action="{{ route('admin.categories.destroy', $cat) }}" method="POST"
                                  class="d-inline" onsubmit="return confirm('Hapus kategori ini?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center py-5 text-muted">
                            <i class="bi bi-inbox fs-1 d-block mb-2" style="opacity:0.3"></i>
                            Belum ada kategori.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection