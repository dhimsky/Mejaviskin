@extends('layouts.app')

@section('title', 'Artikel | '.\App\Models\Setting::get('brand_name', 'Mejavi Skin+'))
@section('meta_description', 'Edukasi seputar kandungan aktif, rutinitas, dan sains di balik perawatan kulit — dari tim '.\App\Models\Setting::get('brand_name', 'Mejavi Skin+').'.')

@push('styles')
<style>
  .filter-row{ display:flex; gap:10px; flex-wrap:wrap; margin-top:30px; }
  .filter-pill{
    padding:9px 16px; border-radius:999px; font-size:13px; font-weight:700;
    border:1px solid var(--line); color:var(--ink-soft); background:var(--white);
    cursor:pointer; transition: all .25s ease; text-decoration:none; display:inline-block;
  }
  .filter-pill.is-active, .filter-pill:hover{ background:var(--sage-dark); color:var(--cream); border-color:var(--sage-dark); }

  .featured-article{
    display:grid; grid-template-columns: 1fr 1fr; gap:48px; align-items:center;
    background: var(--white); border:1px solid var(--line); border-radius:28px; padding:20px;
  }
  .featured-article .fa-photo{
    border-radius:20px; overflow:hidden; aspect-ratio:4/3;
    background: linear-gradient(160deg, var(--sage-pale), var(--cream-2));
  }
  .featured-article .fa-photo img{ width:100%; height:100%; object-fit:cover; }
  .featured-article .fa-copy{ padding: 20px 28px 20px 4px; }
  @media (max-width:860px){
    .featured-article{ grid-template-columns:1fr; }
    .featured-article .fa-copy{ padding: 8px 20px 24px; }
  }

  .article-meta{ display:flex; gap:14px; align-items:center; font-size:12.5px; color:var(--ink-soft); margin-top:14px; }
  .article-meta .dot{ width:3px; height:3px; border-radius:50%; background:var(--ink-soft); }

  .article-grid{ display:grid; grid-template-columns: repeat(3,1fr); gap:28px; }
  @media (max-width:900px){ .article-grid{ grid-template-columns: 1fr 1fr; } }
  @media (max-width:600px){ .article-grid{ grid-template-columns: 1fr; } }

  .article-card{
    background:var(--white); border:1px solid var(--line); border-radius:20px; overflow:hidden;
    transition: transform .4s var(--ease), box-shadow .4s var(--ease);
  }
  .article-card:hover{ transform: translateY(-6px); box-shadow: 0 30px 50px -32px rgba(38,36,32,.35); }
  .ac-photo{ aspect-ratio: 16/11; background: linear-gradient(160deg, var(--sage-pale), var(--cream-2)); overflow:hidden; }
  .ac-photo img{ width:100%; height:100%; object-fit:cover; }
  .ac-body{ padding: 22px 22px 26px; }
  .ac-body h3{ font-size:18.5px; margin-top:10px; line-height:1.3; }
  .ac-body p{ font-size:14px; margin-top:10px; }
  .ac-link{ margin-top:16px; display:inline-flex; align-items:center; gap:8px; font-size:13.5px; font-weight:700; color:var(--sage-dark); }
  .ac-link svg{ transition: transform .3s var(--ease); }
  .article-card:hover .ac-link svg{ transform: translateX(4px); }
</style>
@endpush

@section('content')

<!-- ================= PAGE HERO ================= -->
<section class="page-hero">
  <div class="container reveal">
    <div class="breadcrumb"><a href="{{ route('home') }}">Beranda</a><span>/</span>Artikel</div>
    <span class="eyebrow">Jurnal {{ \App\Models\Setting::get('brand_name', 'Mejavi Skin+') }}</span>
    <h1>Bacaan seputar sains kulit, kandungan aktif, dan rutinitas perawatan.</h1>
    <p>Kami menulis apa yang benar-benar berguna — bukan sekadar tren. Ditulis bersama tim riset kami.</p>
    <div class="filter-row">
      <a href="{{ route('articles.index') }}" class="filter-pill {{ $activeCategory === 'Semua' ? 'is-active' : '' }}">Semua</a>
      @foreach ($categories as $cat)
        <a href="{{ route('articles.index', ['kategori' => $cat]) }}" class="filter-pill {{ $activeCategory === $cat ? 'is-active' : '' }}">{{ $cat }}</a>
      @endforeach
    </div>
  </div>
</section>

@if ($featured)
<!-- ================= FEATURED ================= -->
<section class="bg-white tight">
  <div class="container">
    <div class="featured-article reveal">
      <div class="fa-photo">
        <img src="{{ $featured->cover_url ?? asset('assets/produk-lineup.png') }}" alt="{{ $featured->title }}">
      </div>
      <div class="fa-copy">
        <span class="pill">{{ $featured->category }}</span>
        <h2 style="margin-top:16px; font-size:clamp(24px,3.2vw,34px);">{{ $featured->title }}</h2>
        <p style="margin-top:14px; font-size:16px;">{{ $featured->excerpt }}</p>
        <div class="article-meta"><span>{{ $featured->author_name }}</span><span class="dot"></span><span>{{ optional($featured->published_at)->translatedFormat('d F Y') }}</span></div>
        <a href="{{ route('articles.show', $featured) }}" class="btn btn-outline" style="margin-top:24px;">Baca Selengkapnya &rarr;</a>
      </div>
    </div>
  </div>
</section>
@endif

<!-- ================= ARTICLE GRID ================= -->
<section class="bg-sage-pale">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Artikel Terbaru</span>
      <h2>Semua tulisan kami.</h2>
    </div>

    <div class="article-grid stagger">
      @forelse ($articles as $article)
        <a class="article-card" href="{{ route('articles.show', $article) }}">
          <div class="ac-photo"><img src="{{ $article->cover_url ?? asset('assets/produk-lineup.png') }}" alt="{{ $article->title }}"></div>
          <div class="ac-body">
            <span class="pill">{{ $article->category }}</span>
            <h3>{{ $article->title }}</h3>
            <p>{{ $article->excerpt }}</p>
            <span class="ac-link">Baca artikel <svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
          </div>
        </a>
      @empty
        <p>Belum ada artikel untuk kategori ini.</p>
      @endforelse
    </div>

    @if ($articles->isNotEmpty() === false && ! $featured)
      <p>Belum ada artikel yang dipublikasikan.</p>
    @endif
  </div>
</section>

<!-- ================= CTA ================= -->
<section class="bg-white">
  <div class="container">
    <div class="cta-banner reveal">
      <div>
        <span class="eyebrow" style="color:var(--gold);">Jangan Lewatkan Artikel Baru</span>
        <h2 style="margin-top:14px;">Simak rangkaian produk yang dibahas di artikel kami.</h2>
      </div>
      <a href="{{ route('products.index') }}" class="btn btn-primary">Lihat Produk &rarr;</a>
    </div>
  </div>
</section>

@endsection
