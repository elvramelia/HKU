@extends('layouts.admin')

@section('content')
<div class="top-bar">
    <h4 class="fw-bold mb-0">Pesan Masuk</h4>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-0">
        <table class="table table-hover align-middle mb-0">
            <thead class="bg-light">
                <tr>
                    <th>Pengirim</th>
                    <th>Subjek</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($messages as $msg)
                <tr class="{{ $msg->is_read == 0 ? 'fw-bold' : '' }}">
                    <td>{{ $msg->name }} <br><small class="text-muted">{{ $msg->email }}</small></td>
                    <td>{{ $msg->subject ?? 'Tanpa Subjek' }}</td>
                    <td>{{ $msg->created_at->format('d M Y, H:i') }}</td>
                    <td>
                        @if($msg->is_read == 0)
                            <span class="badge bg-primary">Baru</span>
                        @else
                            <span class="badge bg-secondary">Dibaca</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.messages.show', $msg) }}" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></a>
                        <form action="{{ route('admin.messages.destroy', $msg) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus pesan ini?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" class="text-center p-5 text-muted">Tidak ada pesan masuk.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection