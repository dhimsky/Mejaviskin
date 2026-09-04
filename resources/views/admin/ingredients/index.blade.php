@extends('admin.layout')

@section('title', 'Kandungan Aktif')

@section('content')

<div class="admin-toolbar">
  <div style="font-size:13.5px; color:var(--adm-text-soft);">{{ $ingredients->total() }} bahan aktif terdaftar</div>
  <a href="{{ route('admin.ingredients.create') }}" class="admin-btn admin-btn-primary">+ Tambah Kandungan</a>
</div>

<div class="admin-card" style="padding:0;">
  @if ($ingredients->isEmpty())
    <div class="admin-empty">Belum ada kandungan aktif. Klik "Tambah Kandungan" untuk mulai.</div>
  @else
    <table class="admin-table">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Deskripsi</th>
          <th>Urutan</th>
          <th>Status</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($ingredients as $ingredient)
          <tr>
            <td>{{ $ingredient->name }}</td>
            <td>{{ \Illuminate\Support\Str::limit($ingredient->description, 70) }}</td>
            <td>{{ $ingredient->sort_order }}</td>
            <td>
              @if ($ingredient->is_active)
                <span class="admin-badge admin-badge-green">Aktif</span>
              @else
                <span class="admin-badge admin-badge-gray">Nonaktif</span>
              @endif
            </td>
            <td style="display:flex; gap:8px;">
              <a href="{{ route('admin.ingredients.edit', $ingredient) }}" class="admin-btn admin-btn-outline admin-btn-sm">Ubah</a>
              <form method="POST" action="{{ route('admin.ingredients.destroy', $ingredient) }}" onsubmit="return confirm('Hapus kandungan ini?');">
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

<div class="admin-pagination">{{ $ingredients->links() }}</div>

@endsection
