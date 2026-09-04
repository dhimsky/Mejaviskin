@extends('admin.layout')

@section('title', 'Ringkasan')

@section('content')

<div class="admin-stat-grid">
  <div class="admin-stat">
    <strong>{{ $stats['products'] }}</strong>
    <span>Total Produk</span>
  </div>
  <div class="admin-stat">
    <strong>{{ $stats['articles'] }}</strong>
    <span>Total Artikel</span>
  </div>
  <div class="admin-stat">
    <strong>{{ $stats['messages'] }}</strong>
    <span>Total Pesan Masuk</span>
  </div>
  <div class="admin-stat">
    <strong>{{ $stats['unread_messages'] }}</strong>
    <span>Pesan Belum Dibaca</span>
  </div>
</div>

<div class="admin-card">
  <h2>Pesan Terbaru</h2>
  <p class="admin-card-sub">5 pesan kontak terakhir yang masuk melalui website.</p>

  @if ($latestMessages->isEmpty())
    <div class="admin-empty">Belum ada pesan masuk.</div>
  @else
    <table class="admin-table">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Topik</th>
          <th>Tanggal</th>
          <th>Status</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($latestMessages as $msg)
          <tr>
            <td>{{ $msg->nama }}</td>
            <td>{{ $msg->topik ?? '—' }}</td>
            <td>{{ $msg->created_at->translatedFormat('d M Y, H:i') }}</td>
            <td>
              @if ($msg->is_read)
                <span class="admin-badge admin-badge-gray">Sudah dibaca</span>
              @else
                <span class="admin-badge admin-badge-gold">Baru</span>
              @endif
            </td>
            <td><a href="{{ route('admin.messages.show', $msg) }}" class="admin-btn admin-btn-outline admin-btn-sm">Lihat</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
</div>

<div class="admin-card">
  <h2>Akses Cepat</h2>
  <div style="display:flex; gap:12px; flex-wrap:wrap; margin-top:14px;">
    <a href="{{ route('admin.products.create') }}" class="admin-btn admin-btn-primary">+ Tambah Produk</a>
    <a href="{{ route('admin.articles.create') }}" class="admin-btn admin-btn-primary">+ Tulis Artikel</a>
    <a href="{{ route('admin.settings.edit') }}" class="admin-btn admin-btn-outline">Ubah Info Kontak</a>
  </div>
</div>

@endsection
