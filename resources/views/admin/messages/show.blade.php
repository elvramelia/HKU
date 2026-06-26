@extends('layouts.admin')

@section('content')
<div class="top-bar">
    <h4 class="fw-bold mb-0">Detail Pesan</h4>
    <a href="{{ route('admin.messages.index') }}" class="btn btn-outline-secondary"><i class="bi bi-arrow-left me-1"></i> Kembali</a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-header bg-white">
        <h5 class="mb-0">{{ $message->subject ?? 'Tanpa Subjek' }}</h5>
        <small class="text-muted">Dari: {{ $message->name }} ({{ $message->email }}) - {{ $message->created_at->format('d F Y H:i') }}</small>
    </div>
    <div class="card-body p-4">
        <p style="white-space: pre-wrap;">{{ $message->message }}</p>
    </div>
</div>
@endsection