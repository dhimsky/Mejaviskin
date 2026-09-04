@extends('admin.layout')

@section('title', 'Produk')

@section('content')

<div class="admin-toolbar">
  <div style="font-size:13.5px; color:var(--adm-text-soft);">{{ $products->total() }} produk terdaftar</div>
  <a href="{{ route('admin.products.create') }}" class="admin-btn admin-btn-primary">+ Tambah Produk</a>
</div>

<div class="admin-card" style="padding:0;">
  @if ($products->isEmpty())
    <div class="admin-empty">Belum ada produk. Klik "Tambah Produk" untuk mulai.</div>
  @else
    <table class="admin-table">
      <thead>
        <tr>
          <th></th>
          <th>Nama Produk</th>
          <th>Label Langkah</th>
          <th>Urutan</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
          <tr>
            <td><img class="thumb" src="{{ $product->image_url ?? asset('assets/produk-lineup.png') }}" alt=""></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->step_label ?? '—' }}</td>
            <td>{{ $product->sort_order }}</td>
            <td>
              @if ($product->is_coming_soon)
                <span class="admin-badge admin-badge-gold">Segera Hadir</span>
              @elseif ($product->is_active)
                <span class="admin-badge admin-badge-green">Aktif</span>
              @else
                <span class="admin-badge admin-badge-gray">Nonaktif</span>
              @endif
            </td>
            <td>
              <a href="{{ route('admin.products.edit', $product) }}" class="admin-btn admin-btn-outline admin-btn-sm">Ubah</a>
              <form method="POST" action="{{ route('admin.products.destroy', $product) }}" onsubmit="return confirm('Hapus produk ini?');">
                @csrf @method('DELETE')
                <button type="submit" class="admin-btn admin-btn-danger admin-btn-sm">Hapus</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
</div>

<div class="admin-pagination">{{ $products->links() }}</div>

@endsection
