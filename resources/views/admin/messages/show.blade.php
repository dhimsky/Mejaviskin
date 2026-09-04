@extends('admin.layout')

@section('title', 'Detail Pesan')

@section('content')

<div class="admin-card" style="max-width:640px;">
  <h2>Pesan dari {{ $message->nama }}</h2>
  <p class="admin-card-sub">Diterima {{ $message->created_at->translatedFormat('d F Y, H:i') }} WIB</p>

  <div class="admin-detail-row"><strong>Nama</strong><span>{{ $message->nama }}</span></div>
  <div class="admin-detail-row"><strong>Email</strong><span>{{ $message->email }}</span></div>
  <div class="admin-detail-row"><strong>Perusahaan</strong><span>{{ $message->perusahaan ?? '—' }}</span></div>
  <div class="admin-detail-row"><strong>Topik</strong><span>{{ $message->topik ?? '—' }}</span></div>
  <div class="admin-detail-row"><strong>Pesan</strong><span style="white-space:pre-wrap;">{{ $message->pesan }}</span></div>

  <div style="display:flex; gap:10px; margin-top:24px;">
    <a href="https://wa.me/?text={{ urlencode('Halo '.$message->nama.', terima kasih sudah menghubungi kami.') }}" target="_blank" rel="noopener" class="admin-btn admin-btn-primary">Balas via WhatsApp</a>
    <a href="mailto:{{ $message->email }}" class="admin-btn admin-btn-outline">Balas via Email</a>
    <a href="{{ route('admin.messages.index') }}" class="admin-btn admin-btn-outline">Kembali</a>
  </div>
</div>

@endsection
