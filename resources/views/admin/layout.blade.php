<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Dashboard') | Admin {{ \App\Models\Setting::get('brand_name', 'Mejavi Skin+') }}</title>
<link rel="stylesheet" href="{{ asset('assets/admin.css') }}">
</head>
<body class="admin-body">
<div class="admin-shell">

  <aside class="admin-sidebar">
    <div class="admin-brand">
      <strong>{{ \App\Models\Setting::get('brand_name', 'Mejavi Skin+') }}</strong>
      <span>Dashboard Admin</span>
    </div>
    <nav class="admin-nav">
      <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="3" width="7" height="9" rx="1.5"/><rect x="14" y="3" width="7" height="5" rx="1.5"/><rect x="14" y="12" width="7" height="9" rx="1.5"/><rect x="3" y="16" width="7" height="5" rx="1.5"/></svg>
        Ringkasan
      </a>
      <a href="{{ route('admin.products.index') }}" class="{{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M20 7l-8-4-8 4m16 0v10l-8 4m8-14l-8 4m0 10l-8-4V7m8 14V11m-8-4l8 4"/></svg>
        Produk
      </a>
      <a href="{{ route('admin.articles.index') }}" class="{{ request()->routeIs('admin.articles.*') ? 'active' : '' }}">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 4h13a2 2 0 012 2v13a1 1 0 01-1 1H6a2 2 0 01-2-2V4z"/><path d="M8 8h9M8 12h9M8 16h5"/></svg>
        Artikel
      </a>
      <a href="{{ route('admin.ingredients.index') }}" class="{{ request()->routeIs('admin.ingredients.*') ? 'active' : '' }}">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M9 3v6l-5 8a2 2 0 001.7 3h12.6a2 2 0 001.7-3l-5-8V3"/><path d="M9 3h6"/></svg>
        Kandungan Aktif
      </a>
      <a href="{{ route('admin.messages.index') }}" class="{{ request()->routeIs('admin.messages.*') ? 'active' : '' }}">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 5h16v14H4V5z"/><path d="M4 6l8 7 8-7"/></svg>
        Pesan Kontak
        @php($unread = \App\Models\ContactMessage::where('is_read', false)->count())
        @if ($unread > 0)
          <span class="admin-badge admin-badge-gold" style="margin-left:auto;">{{ $unread }}</span>
        @endif
      </a>
      <a href="{{ route('admin.settings.edit') }}" class="{{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
        <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.7 1.7 0 00.34 1.87l.06.06a2 2 0 11-2.83 2.83l-.06-.06a1.7 1.7 0 00-1.87-.34 1.7 1.7 0 00-1 1.55V21a2 2 0 11-4 0v-.09a1.7 1.7 0 00-1-1.55 1.7 1.7 0 00-1.87.34l-.06.06a2 2 0 11-2.83-2.83l.06-.06a1.7 1.7 0 00.34-1.87 1.7 1.7 0 00-1.55-1H3a2 2 0 110-4h.09a1.7 1.7 0 001.55-1 1.7 1.7 0 00-.34-1.87l-.06-.06a2 2 0 112.83-2.83l.06.06a1.7 1.7 0 001.87.34H9a1.7 1.7 0 001-1.55V3a2 2 0 114 0v.09a1.7 1.7 0 001 1.55 1.7 1.7 0 001.87-.34l.06-.06a2 2 0 112.83 2.83l-.06.06a1.7 1.7 0 00-.34 1.87V9c.26.6.8 1 1.55 1H21a2 2 0 110 4h-.09a1.7 1.7 0 00-1.55 1z"/></svg>
        Pengaturan Situs
      </a>
    </nav>
    <div class="admin-sidebar-footer">
      <div style="font-size:12.5px; color:#9ca3af; margin-bottom:10px;">Masuk sebagai<br><strong style="color:#e5e7eb;">{{ auth()->user()->name }}</strong></div>
      <form method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <button type="submit">Keluar</button>
      </form>
      <a href="{{ route('home') }}" target="_blank" style="display:block; margin-top:10px; font-size:12.5px; color:#9ca3af;">&larr; Lihat situs</a>
    </div>
  </aside>

  <main class="admin-main">
    <div class="admin-topbar">
      <h1>@yield('title', 'Ringkasan')</h1>
      <div class="admin-user">{{ now()->translatedFormat('l, d F Y') }}</div>
    </div>
    <div class="admin-content">
      @if (session('status'))
        <div class="admin-alert admin-alert-success">{{ session('status') }}</div>
      @endif
      @if ($errors->any())
        <div class="admin-alert admin-alert-error">
          Terdapat kesalahan pada isian. Mohon periksa kembali form di bawah.
        </div>
      @endif

      @yield('content')
    </div>
  </main>

</div>
</body>
</html>
