<header class="site-header">
  <div class="nav-wrap">
    <a href="{{ route('home') }}" class="brand">
      <img src="{{ asset('assets/img/logo.png') }}" alt="Mejavi Skin+" class="brand-logo">
    </a>
    <nav class="primary-nav">
      <ul>
        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a></li>
        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Tentang Kami</a></li>
        <li><a href="{{ route('products.index') }}" class="{{ request()->routeIs('products.*') ? 'active' : '' }}">Produk</a></li>
        <li><a href="{{ route('ingredients.index') }}" class="{{ request()->routeIs('ingredients.*') ? 'active' : '' }}">Kandungan Aktif</a></li>
        <li><a href="{{ route('articles.index') }}" class="{{ request()->routeIs('articles.*') ? 'active' : '' }}">Artikel</a></li>
        <li><a href="{{ route('contact.create') }}" class="{{ request()->routeIs('contact.*') ? 'active' : '' }}">Kontak</a></li>
      </ul>
    </nav>
    <div class="nav-cta">
      <a href="{{ route('contact.create') }}" class="btn btn-primary">Hubungi Kami</a>
      <button class="nav-toggle" aria-label="Buka menu"><span></span></button>
    </div>
  </div>
</header>
