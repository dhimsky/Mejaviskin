@extends('layouts.app')

@section('title', $article->title.' — Jurnal '.\App\Models\Setting::get('brand_name', 'Mejavi Skin+'))
@section('meta_description', $article->excerpt)

@push('styles')
<style>
  .article-hero{ padding: 60px 0 0; }
  .article-title{ max-width: 760px; }
  .article-title h1{ font-size: clamp(30px,4.4vw,48px); margin-top:16px; }
  .article-cover{
    margin-top: 40px; border-radius: 24px; overflow:hidden; aspect-ratio: 21/9;
    background: linear-gradient(160deg, var(--sage-pale), var(--cream-2));
  }
  .article-cover img{ width:100%; height:100%; object-fit:cover; object-position:center 32%; }

  .article-body-wrap{ display:grid; grid-template-columns: 220px 1fr; gap:56px; }
  @media (max-width:900px){ .article-body-wrap{ grid-template-columns:1fr; } }

  .article-sidebar{ position:sticky; top: 100px; align-self:start; }
  .share-label{ font-size:12px; letter-spacing:.14em; text-transform:uppercase; color:var(--ink-soft); font-weight:700; margin-bottom:14px; }
  .share-row{ display:flex; flex-direction:column; gap:10px; }
  .share-row a{
    display:flex; align-items:center; gap:10px; font-size:14px; font-weight:600; color:var(--sage-ink);
    padding:10px 14px; border-radius:12px; border:1px solid var(--line); transition: all .25s ease;
  }
  .share-row a:hover{ background:var(--sage-pale); border-color:var(--sage); }

  .article-content{ max-width: 700px; font-size: 17px; color: var(--ink); }
  .article-content p{ color: var(--ink); margin-top: 22px; font-size: 17px; line-height: 1.75; }
  .article-content h2{ font-size: 26px; margin-top: 46px; }
  .article-content h3{ font-size: 21px; margin-top: 34px; }
  .article-content ul{ margin-top:20px; display:flex; flex-direction:column; gap:12px; }
  .article-content ul li{ padding-left:26px; position:relative; color:var(--ink); font-size:16.5px; }
  .article-content ul li::before{ content:""; position:absolute; left:0; top:9px; width:8px; height:8px; border-radius:50%; background:var(--sage); }

  .pull-quote{
    margin: 40px 0; padding: 30px 32px; border-left: 3px solid var(--gold);
    background: var(--sage-pale); border-radius: 0 16px 16px 0;
  }
  .pull-quote p{ font-family: var(--font-display); font-style: italic; font-size: 21px; color: var(--sage-ink); margin:0; line-height:1.5; }

  .author-box{
    margin-top: 56px; padding: 26px; border-radius: 18px; background: var(--white);
    border: 1px solid var(--line); display:flex; gap:16px; align-items:center; max-width:700px;
  }
  .author-avatar{
    width:52px; height:52px; border-radius:50%; background: var(--sage-dark);
    display:flex; align-items:center; justify-content:center; color:var(--cream);
    font-family: var(--font-display); font-size:19px; flex-shrink:0;
  }
  .author-box strong{ display:block; font-size:15px; color:var(--sage-ink); }
  .author-box span{ font-size:13.5px; color:var(--ink-soft); }

  .related-grid{ display:grid; grid-template-columns:repeat(3,1fr); gap:26px; }
  @media (max-width:820px){ .related-grid{ grid-template-columns:1fr; } }
</style>
@endpush

@section('content')

<!-- ================= ARTICLE HERO ================= -->
<section class="article-hero">
  <div class="container reveal">
    <div class="breadcrumb"><a href="{{ route('home') }}">Beranda</a><span>/</span><a href="{{ route('articles.index') }}">Artikel</a><span>/</span>{{ \Illuminate\Support\Str::limit($article->title, 40) }}</div>
    <div class="article-title">
      <span class="pill">{{ $article->category }}</span>
      <h1>{{ $article->title }}</h1>
      <div class="article-meta"><span>{{ $article->author_name }}</span><span class="dot"></span><span>{{ optional($article->published_at)->translatedFormat('d F Y') }}</span></div>
    </div>
    <div class="article-cover">
      <img src="{{ $article->cover_url ?? asset('assets/produk-lineup.png') }}" alt="{{ $article->title }}">
    </div>
  </div>
</section>

<!-- ================= ARTICLE BODY ================= -->
<section class="bg-white">
  <div class="container article-body-wrap">

    <aside class="article-sidebar reveal">
      <div class="share-label">Bagikan Artikel</div>
      <div class="share-row">
        <a href="{{ url()->current() }}" onclick="navigator.clipboard.writeText(this.href); return false;">&#8599; Salin Tautan</a>
        <a href="https://wa.me/?text={{ urlencode($article->title.' - '.url()->current()) }}" target="_blank" rel="noopener">WhatsApp</a>
        <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($article->title) }}" target="_blank" rel="noopener">Twitter / X</a>
      </div>
    </aside>

    <article class="article-content reveal reveal-delay-2">
      {!! $article->content !!}

      <div class="author-box">
        <div class="author-avatar">{{ \Illuminate\Support\Str::of($article->author_name)->explode(' ')->map(fn($w) => mb_substr($w,0,1))->take(2)->implode('') }}</div>
        <div><strong>{{ $article->author_name }}</strong><span>Divisi Riset &amp; Pengembangan Produk, {{ \App\Models\Setting::get('company_name', 'PT Satu Satunya') }}</span></div>
      </div>
    </article>

  </div>
</section>

@if ($related->isNotEmpty())
<!-- ================= RELATED ================= -->
<section class="bg-sage-pale">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Baca Juga</span>
      <h2>Artikel terkait lainnya.</h2>
    </div>
    <div class="related-grid stagger">
      @foreach ($related as $r)
        <a class="article-card" href="{{ route('articles.show', $r) }}">
          <div class="ac-photo"><img src="{{ $r->cover_url ?? asset('assets/produk-lineup.png') }}" alt="{{ $r->title }}"></div>
          <div class="ac-body">
            <span class="pill">{{ $r->category }}</span>
            <h3>{{ $r->title }}</h3>
            <span class="ac-link">Baca artikel <svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
          </div>
        </a>
      @endforeach
    </div>
  </div>
</section>
@endif

@endsection
