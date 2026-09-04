@extends('admin.layout')

@section('title', 'Pesan Kontak')

@section('content')

<div class="admin-toolbar">
  <div style="font-size:13.5px; color:var(--adm-text-soft);">{{ $messages->total() }} pesan masuk</div>
</div>

<div class="admin-card" style="padding:0;">
  @if ($messages->isEmpty())
    <div class="admin-empty">Belum ada pesan yang masuk dari form kontak.</div>
  @else
    <table class="admin-table">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Email</th>
          <th>Topik</th>
          <th>Tanggal</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($messages as $msg)
          <tr style="{{ $msg->is_read ? '' : 'font-weight:700;' }}">
            <td>{{ $msg->nama }}</td>
            <td>{{ $msg->email }}</td>
            <td>{{ $msg->topik ?? '—' }}</td>
            <td>{{ $msg->created_at->translatedFormat('d M Y, H:i') }}</td>
            <td>
              @if ($msg->is_read)
                <span class="admin-badge admin-badge-gray">Sudah dibaca</span>
              @else
                <span class="admin-badge admin-badge-gold">Baru</span>
              @endif
            </td>
            <td>
              <a href="{{ route('admin.messages.show', $msg) }}" class="admin-btn admin-btn-outline admin-btn-sm">Lihat</a>
              <form method="POST" action="{{ route('admin.messages.destroy', $msg) }}" onsubmit="return confirm('Hapus pesan ini?');">
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

<div class="admin-pagination">{{ $messages->links() }}</div>

@endsection
