@extends('layouts.app')

@section('title', 'Produk | '.\App\Models\Setting::get('brand_name', 'Mejavi Skin+'))
@section('meta_description', 'Jelajahi rangkaian produk '.\App\Models\Setting::get('brand_name', 'Mejavi Skin+').'.')

@push('styles')
<style>
 .product-row{
    display:grid; grid-template-columns: 0.8fr 1.2fr;
    gap: 56px; align-items:center;
    padding: 64px 0;
    border-bottom: 1px solid var(--line);
  }
  .product-row:last-child{ border-bottom:none; }
  .product-row:nth-child(even) .product-photo{ order:2; }
  .product-photo{
    border-radius: 24px; overflow:hidden; aspect-ratio: 1/1;
    background: linear-gradient(160deg, var(--sage-pale), var(--cream-2));
    position:relative;
  }
  .product-photo img{ width:100%; height:100%; object-fit:cover; }
  .ingredient-tags{ display:flex; flex-wrap:wrap; gap:10px; margin-top:22px; }
  .ingredient-tags span{
    background: var(--sage-pale); color:var(--sage-ink);
    font-size:12.5px; font-weight:700; letter-spacing:.02em;
    padding:7px 14px; border-radius:999px;
  }
  .product-meta{ display:flex; gap:26px; margin-top:22px; }
  .product-meta div strong{ display:block; font-family:var(--font-display); font-size:19px; color:var(--sage-ink); }
  .product-meta div span{ font-size:12.5px; color:var(--ink-soft); letter-spacing:.03em; text-transform:uppercase; }
  .benefit-list{ margin-top:22px; display:flex; flex-direction:column; gap:10px; }
  .benefit-list div{ display:flex; align-items:flex-start; gap:10px; font-size:15px; color:var(--ink); }
  .benefit-list svg{ flex-shrink:0; margin-top:3px; }
  .how-to-use{
    margin-top:22px; padding:16px 18px; background:var(--sage-pale); border-radius:14px;
  }
  .how-to-use strong{ display:block; font-size:12.5px; letter-spacing:.05em; text-transform:uppercase; color:var(--sage-dark); margin-bottom:6px; }
  .how-to-use p{ font-size:14.5px; margin:0; }
  .full-inci{ margin-top:18px; }
  .full-inci summary{ cursor:pointer; font-size:13.5px; font-weight:700; color:var(--sage-dark); }
  .full-inci p{ margin-top:10px; font-size:12.5px; color:var(--ink-soft); line-height:1.7; }
  .coming-soon-badge{
    position:absolute; top:16px; left:16px; background:var(--gold); color:var(--white);
    font-size:11.5px; font-weight:700; letter-spacing:.05em; text-transform:uppercase;
    padding:6px 14px; border-radius:999px; z-index:2;
  }
  .product-row.is-coming-soon .product-photo{ filter: grayscale(0.3); opacity:.85; }
  @media (max-width: 820px){
    .product-row, .product-row:nth-child(even){ grid-template-columns: 1fr; }
    .product-row:nth-child(even) .product-photo{ order:0; }
  }
</style>
@endpush

@section('content')

<!-- ================= PAGE HERO ================= -->
<section class="page-hero">
  <div class="container reveal">
    <div class="breadcrumb"><a href="{{ route('home') }}">Beranda</a><span>/</span>Produk</div>
    <span class="eyebrow">Rangkaian Produk</span>
    <h1>{{ $products->count() }} produk, satu rutinitas menuju kulit yang lebih baik.</h1>
    <p>Setiap produk {{ \App\Models\Setting::get('brand_name', 'Mejavi Skin+') }} dirancang untuk saling melengkapi — dari membersihkan, merawat, hingga mengunci kelembapan kulit.</p>
  </div>
</section>

<!-- ================= PRODUCT LIST ================= -->
<section class="bg-white tight">
  <div class="container">

    @forelse ($products as $product)
      <div class="product-row reveal {{ $product->is_coming_soon ? 'is-coming-soon' : '' }}">
        <div class="product-photo">
          @if ($product->is_coming_soon)
            <span class="coming-soon-badge">Segera Hadir</span>
          @endif
          <img src="{{ $product->image_url ?? asset('assets/produk-lineup.png') }}" alt="{{ \App\Models\Setting::get('brand_name', 'Mejavi Skin+') }} {{ $product->name }}">
        </div>
        <div>
          @if ($product->step_label)
            <span class="pill">{{ $product->step_label }}</span>
          @endif
          <h2 style="margin-top:16px; font-size:clamp(24px,3vw,32px);">{{ $product->name }}</h2>
          @if ($product->description)
            <p style="margin-top:14px; font-size:16px;">{{ $product->description }}</p>
          @endif
          @if (count($product->ingredient_list))
            <div class="ingredient-tags">
              @foreach ($product->ingredient_list as $ing)
                <span>{{ $ing }}</span>
              @endforeach
            </div>
          @endif
          @if ($product->net_volume || $product->usage_note)
            <div class="product-meta">
              @if ($product->net_volume)
                <div><strong>{{ $product->net_volume }}</strong><span>Netto</span></div>
              @endif
              @if ($product->usage_note)
                <div><strong>{{ $product->usage_note }}</strong><span>Pemakaian</span></div>
              @endif
            </div>
          @endif
          @if (count($product->benefit_list))
            <div class="benefit-list">
              @foreach ($product->benefit_list as $benefit)
                <div>
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="#7C8E6C" stroke-width="1.5"/><path d="M8 12l2.5 2.5L16 9" stroke="#7C8E6C" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                  <span>{{ $benefit }}</span>
                </div>
              @endforeach
            </div>
          @endif
          @if ($product->how_to_use)
            <div class="how-to-use">
              <strong>Cara Pemakaian</strong>
              <p>{{ $product->how_to_use }}</p>
            </div>
          @endif
          @if ($product->full_ingredients)
            <details class="full-inci">
              <summary>Lihat Daftar Kandungan Lengkap</summary>
              <p>{{ $product->full_ingredients }}</p>
            </details>
          @endif
        </div>
      </div>
    @empty
      <p style="padding:40px 0;">Belum ada produk yang ditambahkan. Silakan tambahkan produk melalui dashboard admin.</p>
    @endforelse

  </div>
</section>

<!-- ================= CTA ================= -->
<section class="bg-sage-pale">
  <div class="container">
    <div class="cta-banner reveal">
      <div>
        <span class="eyebrow" style="color:var(--gold);">Tertarik Menjadi Mitra?</span>
        <h2 style="margin-top:14px;">Bawa rangkaian {{ \App\Models\Setting::get('brand_name', 'Mejavi Skin+') }} ke toko atau klinik Anda.</h2>
      </div>
      <a href="{{ route('contact.create') }}" class="btn btn-primary">Diskusikan Kerja Sama &rarr;</a>
    </div>
  </div>
</section>

@endsection
