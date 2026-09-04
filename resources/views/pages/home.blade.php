@extends('layouts.app')

@section('title', \App\Models\Setting::get('brand_name', 'Mejavi Skin+').' | Perawatan Kulit Berbasis Sains & Alam')
@section('meta_description', 'Mejavi Skin+ oleh '.\App\Models\Setting::get('company_name', 'PT Satu Satunya').' — produk perawatan kulit yang nyata, aman, dan efektif, dipercaya klien domestik dan internasional.')

@push('styles')
<style>
  /* ---------- Kenapa Memilih Kami ---------- */
  .why-grid{ display:grid; grid-template-columns: repeat(4,1fr); gap:24px; }
  @media (max-width:900px){ .why-grid{ grid-template-columns:1fr 1fr; } }
  @media (max-width:560px){ .why-grid{ grid-template-columns:1fr; } }
  .why-card{
    background: var(--white); border:1px solid var(--line); border-radius:20px;
    padding: 28px 24px; transition: transform .4s var(--ease), box-shadow .4s var(--ease);
  }
  .why-card:hover{ transform: translateY(-6px); box-shadow: 0 30px 50px -32px rgba(38,36,32,.35); }
  .why-icon{
    width:48px; height:48px; border-radius:14px; background: var(--sage-pale);
    display:flex; align-items:center; justify-content:center; margin-bottom:18px;
  }
  .why-card h3{ font-size:17.5px; margin-top:0; }
  .why-card p{ font-size:14px; margin-top:8px; }

  /* ---------- Artikel Terbaru (home) ---------- */
  .home-article-grid{ display:grid; grid-template-columns:repeat(3,1fr); gap:26px; }
  @media (max-width:860px){ .home-article-grid{ grid-template-columns:1fr; } }
  .home-article-card{
    background:var(--white); border:1px solid var(--line); border-radius:20px; overflow:hidden;
    transition: transform .4s var(--ease), box-shadow .4s var(--ease); display:block;
  }
  .home-article-card:hover{ transform: translateY(-6px); box-shadow: 0 30px 50px -32px rgba(38,36,32,.35); }
  .ha-photo{ aspect-ratio:16/11; background:linear-gradient(160deg,var(--sage-pale),var(--cream-2)); overflow:hidden; }
  .ha-photo img{ width:100%; height:100%; object-fit:cover; }
  .ha-body{ padding:20px 20px 24px; }
  .ha-body h3{ font-size:17.5px; margin-top:10px; line-height:1.3; }
  .ha-link{ margin-top:14px; display:inline-flex; align-items:center; gap:8px; font-size:13px; font-weight:700; color:var(--sage-dark); }
  .ha-link svg{ transition: transform .3s var(--ease); }
  .home-article-card:hover .ha-link svg{ transform: translateX(4px); }

  /* ---------- Testimoni (auto-slide) ---------- */
  .testi-track-wrap{
    overflow:hidden;
    -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 48px, #000 calc(100% - 48px), transparent 100%);
    mask-image: linear-gradient(90deg, transparent 0, #000 48px, #000 calc(100% - 48px), transparent 100%);
  }
  .testi-track{
    display:flex; gap:22px; width:max-content;
    animation: testi-slide 32s linear infinite;
  }
  .testi-track:hover{ animation-play-state: paused; }
  @keyframes testi-slide{
    from{ transform: translateX(0); }
    to{ transform: translateX(-50%); }
  }
  .testi-card{
    flex: 0 0 320px;
    background: var(--sage-pale); border-radius:20px; padding:26px 24px;
    display:flex; flex-direction:column; gap:14px;
  }
  .testi-stars{ display:flex; gap:3px; color:var(--gold); }
  .testi-card p{ font-size:14.5px; color:var(--sage-ink); line-height:1.65; font-style:italic; }
  .testi-name{ font-size:13.5px; font-weight:700; color:var(--sage-dark); margin-top:auto; }
  @media (prefers-reduced-motion: reduce){
    .testi-track{ animation: none; }
  }
</style>
@endpush

@section('content')

<!-- ================= HERO ================= -->
<section class="hero">
  <div class="container hero-grid">
    <div class="hero-copy reveal">
      <span class="eyebrow">Sains &times; Alam</span>
      <h1>Perawatan kulit yang <em>nyata</em>, aman, dan terbukti hasilnya.</h1>
      <p>{{ \App\Models\Setting::get('brand_name', 'Mejavi Skin+') }} meracik setiap formula dari perpaduan riset dermatologi dan bahan aktif alami — hadir untuk kulit yang lebih sehat, hari demi hari.</p>
      <div class="hero-actions">
        <a href="{{ route('products.index') }}" class="btn btn-primary">Lihat Produk Kami <span class="btn-arrow">&rarr;</span></a>
        <a href="{{ route('about') }}" class="btn btn-outline">Kenali Kami</a>
      </div>
      <div class="hero-trust">
        <div><strong>{{ max(\App\Models\Product::where('is_active', true)->count(), 1) }}+</strong><span>Lini produk aktif</span></div>
        <div><strong>2</strong><span>Domestik &amp; internasional</span></div>
        <div><strong>100%</strong><span>Diformulasikan &amp; diuji aman</span></div>
      </div>
    </div>
    <div class="hero-visual reveal reveal-delay-2">
      <video src="{{ asset('assets/vids/hero_bg.mp4') }}" autoplay muted loop playsinline></video>
      <div class="hero-badge">
        <svg viewBox="0 0 24 24" fill="none"><path d="M12 21C12 21 4 16.5 4 9.8C4 6.6 6.6 4 9.8 4C11.2 4 12 4.6 12 4.6C12 4.6 12.8 4 14.2 4C17.4 4 20 6.6 20 9.8C20 16.5 12 21 12 21Z" stroke="#3F4F36" stroke-width="1.4"/></svg>
        <div><strong>Diformulasikan dengan hati-hati</strong><span>Niacinamide &middot; Kolagen &middot; Licorice</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ================= HIGHLIGHT STRIP ================= -->
<div class="strip stagger">
  <div>
    <h3>Berbasis Riset</h3>
    <p class="label">Formula disusun bersama ahli dermatologi, memadukan bahan aktif teruji secara klinis.</p>
  </div>
  <div>
    <h3>Aman Digunakan</h3>
    <p class="label">Setiap batch melalui uji keamanan sebelum sampai ke tangan pengguna dan mitra.</p>
  </div>
  <div>
    <h3>Siap Ekspansi Global</h3>
    <p class="label">Dibangun untuk melayani klien domestik sekaligus membuka peluang pasar internasional.</p>
  </div>
</div>

<!-- ================= ABOUT TEASER ================= -->
<section class="bg-white">
  <div class="container">
    <div class="grid-2" style="align-items:center; gap:64px;">
      <div class="reveal">
        <span class="eyebrow">Cerita Kami</span>
        <h2 style="font-size:clamp(28px,3.6vw,40px); margin-top:16px;">Ditumbuhkan dari niat sederhana: kulit sehat untuk semua orang.</h2>
        <svg class="divider-fern fern-line" viewBox="0 0 340 34"><path d="M2 30C40 6 90 30 130 10C170 -6 210 24 250 8C280 -3 310 14 338 4"/></svg>
        <p style="font-size:16px;">{{ \App\Models\Setting::get('brand_name', 'Mejavi Skin+') }} lahir dari keyakinan bahwa perawatan kulit terbaik adalah yang jujur — jujur pada kandungan, jujur pada hasil, dan jujur pada penggunanya. Setiap produk kami dikembangkan bersama {{ \App\Models\Setting::get('company_name', 'PT Satu Satunya') }} untuk memberi pengalaman skincare yang nyata, bukan sekadar janji.</p>
        <a href="{{ route('about') }}" class="btn btn-outline" style="margin-top:28px;">Visi &amp; Misi Kami &rarr;</a>
      </div>
      <div class="reveal reveal-delay-2">
        <div class="card" style="background:var(--sage-pale); border:none;">
          <span class="eyebrow">Visi Perusahaan</span>
          <h3 style="margin-top:14px; font-size:22px; line-height:1.35;">Menjadi penyedia solusi gaya hidup sehat dan cantik yang tepercaya secara global.</h3>
          <p style="margin-top:14px;">Menghadirkan pengalaman perawatan kulit yang nyata, aman, dan efektif melalui kekuatan sains dan alam, sambil terus berkembang ke sektor kesehatan dan kecantikan yang lebih luas.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= PRODUCT PREVIEW ================= -->
<section class="bg-sage-pale">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Lini Produk</span>
      <h2>Empat langkah menuju kulit yang lebih sehat.</h2>
    </div>
    <div class="grid-3 stagger">
      @php
        $icons = [
          '<path d="M7 9V6a5 5 0 0110 0v3M5 9h14l-1 11H6L5 9z" stroke="#3F4F36" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>',
          '<path d="M9 2h6v4l3 3v11a2 2 0 01-2 2H8a2 2 0 01-2-2V9l3-3V2z" stroke="#3F4F36" stroke-width="1.4" stroke-linejoin="round"/>',
          '<circle cx="12" cy="12" r="9" stroke="#3F4F36" stroke-width="1.4"/><path d="M12 7v5l3 3" stroke="#3F4F36" stroke-width="1.4" stroke-linecap="round"/>',
        ];
      @endphp
      @forelse ($products as $i => $product)
        <div class="card">
          <div class="card-icon"><svg viewBox="0 0 24 24" fill="none">{!! $icons[$i] ?? $icons[0] !!}</svg></div>
          <span class="num">{{ $product->step_label }}</span>
          <h3>{{ $product->name }}</h3>
          <p>{{ \Illuminate\Support\Str::limit($product->description, 90) }}</p>
        </div>
      @empty
        <p>Belum ada produk yang ditambahkan.</p>
      @endforelse
    </div>
    <div class="reveal" style="margin-top:40px; text-align:center;">
      <a href="{{ route('products.index') }}" class="btn btn-primary">Jelajahi Semua Produk &rarr;</a>
    </div>
  </div>
</section>

<!-- ================= WHY CHOOSE US ================= -->
<section class="bg-white">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Kenapa Memilih Kami</span>
      <h2>Bukan sekadar klaim di label.</h2>
    </div>
    <div class="why-grid stagger">
      <div class="why-card">
        <div class="why-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M9 12l2 2 4-4M12 3l8 4v5c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V7l8-4z" stroke="#3F4F36" stroke-width="1.4" stroke-linejoin="round"/></svg></div>
        <h3>Teruji Aman</h3>
        <p>Setiap batch melewati uji keamanan sebelum didistribusikan ke pelanggan maupun mitra.</p>
      </div>
      <div class="why-card">
        <div class="why-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M12 3l2.5 5.5L20 9l-4 4 1 6-5-3-5 3 1-6-4-4 5.5-.5L12 3z" stroke="#3F4F36" stroke-width="1.3" stroke-linejoin="round"/></svg></div>
        <h3>Formula Berbasis Riset</h3>
        <p>Disusun bersama ahli dermatologi, memadukan bahan aktif yang teruji secara klinis.</p>
      </div>
      <div class="why-card">
        <div class="why-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M20 7l-8-4-8 4m16 0v10l-8 4m8-14l-8 4m0 10l-8-4V7m8 14V11m-8-4l8 4" stroke="#3F4F36" stroke-width="1.3" stroke-linejoin="round"/></svg></div>
        <h3>Transparan Soal Bahan</h3>
        <p>Kandungan aktif dicantumkan apa adanya di setiap kemasan — tanpa klaim berlebihan.</p>
      </div>
      <div class="why-card">
        <div class="why-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="#3F4F36" stroke-width="1.4"/><path d="M8 12l2.5 2.5L16 9" stroke="#3F4F36" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
        <h3>Dipercaya Berbagai Mitra</h3>
        <p>Melayani klien domestik maupun internasional dengan standar kualitas yang konsisten.</p>
      </div>
    </div>
  </div>
</section>

@if ($latestArticles->isNotEmpty())
<!-- ================= LATEST ARTICLES ================= -->
<section class="bg-sage-pale">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Jurnal Kami</span>
      <h2>Bacaan seputar sains kulit &amp; rutinitas perawatan.</h2>
    </div>
    <div class="home-article-grid stagger">
      @foreach ($latestArticles as $article)
        <a class="home-article-card" href="{{ route('articles.show', $article) }}">
          <div class="ha-photo"><img src="{{ $article->cover_url ?? asset('assets/produk-lineup.png') }}" alt="{{ $article->title }}"></div>
          <div class="ha-body">
            <span class="pill">{{ $article->category }}</span>
            <h3>{{ \Illuminate\Support\Str::limit($article->title, 60) }}</h3>
            <span class="ha-link">Baca artikel <svg width="13" height="13" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
          </div>
        </a>
      @endforeach
    </div>
    <div class="reveal" style="margin-top:36px; text-align:center;">
      <a href="{{ route('articles.index') }}" class="btn btn-outline">Lihat Semua Artikel &rarr;</a>
    </div>
  </div>
</section>
@endif

<!-- ================= TESTIMONIALS ================= -->
<section class="bg-white">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Apa Kata Mereka</span>
      <h2>Cerita nyata dari yang sudah mencoba.</h2>
    </div>
  </div>
  @php
    $testimonials = [
      ['text' => 'Kulit terasa jauh lebih lembap sejak rutin pakai Fresh Hydra Crème. Teksturnya ringan, nggak bikin lengket meski dipakai siang hari.', 'name' => 'Rani A.'],
      ['text' => 'Saya suka karena kandungannya jelas dan nggak berlebihan klaimnya. Brightening Gentle Cleanser jadi andalan pagi dan malam.', 'name' => 'Dimas P.'],
      ['text' => 'Sebagai pemilik klinik kecantikan, saya cukup selektif soal produk yang direkomendasikan. Mejavi Skin+ konsisten dari segi kualitas.', 'name' => 'dr. Sinta N.'],
      ['text' => 'Plump + Bright Serumizer bikin kulit terasa lebih kenyal dalam beberapa minggu. Wanginya juga nggak menyengat.', 'name' => 'Alya K.'],
      ['text' => 'Radiance Treatment Body Serum jadi rutinitas favorit setelah mandi. Kulit tangan dan kaki terasa lebih halus.', 'name' => 'Bagas W.'],
    ];
  @endphp
  <div class="testi-track-wrap">
    <div class="testi-track">
      @for ($r = 0; $r < 2; $r++)
        @foreach ($testimonials as $t)
          <div class="testi-card">
            <div class="testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <p>"{{ $t['text'] }}"</p>
            <div class="testi-name">{{ $t['name'] }}</div>
          </div>
        @endforeach
      @endfor
    </div>
  </div>
</section>

<!-- ================= CTA BANNER ================= -->
<section class="bg-white">
  <div class="container">
    <div class="cta-banner reveal">
      <div>
        <span class="eyebrow" style="color:var(--gold);">Mari Berkolaborasi</span>
        <h2 style="margin-top:14px;">Tertarik menjadi mitra atau distributor {{ \App\Models\Setting::get('brand_name', 'Mejavi Skin+') }}?</h2>
      </div>
      <a href="{{ route('contact.create') }}" class="btn btn-primary">Hubungi Tim Kami &rarr;</a>
    </div>
  </div>
</section>

@endsection