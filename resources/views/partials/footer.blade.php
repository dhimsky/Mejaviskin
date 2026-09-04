@php
    $footerProducts = \App\Models\Product::where('is_active', true)->where('is_coming_soon', false)->orderBy('sort_order')->take(4)->get();
    $waNumber = \App\Models\Setting::whatsappNumber();
@endphp
<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="brand" style="color:var(--cream);">
          <img src="{{ asset('assets/img/logo_white.png') }}" alt="Mejavi Skin+" class="brand-logo">
        </div>
        <p>{{ \App\Models\Setting::get('footer_tagline', 'Diproduksi oleh PT Satu Satunya. Perawatan kulit yang nyata, aman, dan efektif — lahir dari sains dan alam.') }}</p>
      </div>
      <div>
        <h4>Navigasi</h4>
        <a href="{{ route('home') }}">Beranda</a>
        <a href="{{ route('about') }}">Tentang Kami</a>
        <a href="{{ route('products.index') }}">Produk</a>
        <a href="{{ route('ingredients.index') }}">Kandungan Aktif</a>
        <a href="{{ route('articles.index') }}">Artikel</a>
        <a href="{{ route('contact.create') }}">Kontak</a>
      </div>
      <div>
        <h4>Produk</h4>
        @forelse ($footerProducts as $fp)
          <a href="{{ route('products.index') }}">{{ $fp->name }}</a>
        @empty
          <a href="{{ route('products.index') }}">Lihat Semua Produk</a>
        @endforelse
      </div>
      <div>
        <h4>Kontak</h4>
        <a href="mailto:{{ \App\Models\Setting::get('contact_email', 'hello@mejaviskin.id') }}">{{ \App\Models\Setting::get('contact_email', 'hello@mejaviskin.id') }}</a>
        <a href="tel:{{ '+'.$waNumber }}">{{ \App\Models\Setting::get('contact_phone_display', '+62 21 1234 5678') }}</a>
        <span>Jakarta, Indonesia</span>
      </div>
    </div>
    <div class="footer-bottom">
      <span>&copy; {{ date('Y') }} {{ \App\Models\Setting::get('company_name', 'PT Satu Satunya') }} — {{ \App\Models\Setting::get('brand_name', 'Mejavi Skin+') }}. Seluruh hak cipta dilindungi.</span>
      <span>Dibuat dengan perhatian pada detail.</span>
    </div>
  </div>
</footer>
