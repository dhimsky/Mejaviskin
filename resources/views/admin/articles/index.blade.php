@extends('admin.layout')

@section('title', 'Artikel')

@section('content')

<div class="admin-toolbar">
  <div style="font-size:13.5px; color:var(--adm-text-soft);">{{ $articles->total() }} artikel terdaftar</div>
  <a href="{{ route('admin.articles.create') }}" class="admin-btn admin-btn-primary">+ Tulis Artikel</a>
</div>

<div class="admin-card" style="padding:0;">
  @if ($articles->isEmpty())
    <div class="admin-empty">Belum ada artikel. Klik "Tulis Artikel" untuk mulai.</div>
  @else
    <table class="admin-table">
      <thead>
        <tr>
          <th></th>
          <th>Judul</th>
          <th>Kategori</th>
          <th>Tanggal Terbit</th>
          <th>Unggulan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($articles as $article)
          <tr>
            <td><img class="thumb" src="{{ $article->cover_url ?? asset('assets/produk-lineup.png') }}" alt=""></td>
            <td>{{ \Illuminate\Support\Str::limit($article->title, 55) }}</td>
            <td><span class="admin-badge admin-badge-gray">{{ $article->category }}</span></td>
            <td>{{ optional($article->published_at)->translatedFormat('d M Y') ?? '—' }}</td>
            <td>
              @if ($article->is_featured)
                <span class="admin-badge admin-badge-gold">Ya</span>
              @else
                —
              @endif
            </td>
            <td>
              <a href="{{ route('admin.articles.edit', $article) }}" class="admin-btn admin-btn-outline admin-btn-sm">Ubah</a>
              <form method="POST" action="{{ route('admin.articles.destroy', $article) }}" onsubmit="return confirm('Hapus artikel ini?');">
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

<div class="admin-pagination">{{ $articles->links() }}</div>

@endsection
