@extends('layouts.app')

@section('title', 'Kandungan Aktif Kami | '.\App\Models\Setting::get('brand_name', 'Mejavi Skin+'))
@section('meta_description', 'Kenali bahan-bahan aktif di balik formula '.\App\Models\Setting::get('brand_name', 'Mejavi Skin+').' dan manfaatnya masing-masing untuk kulit.')

@push('styles')
<style>
  .ing-grid{ display:grid; grid-template-columns: repeat(3,1fr); gap:22px; }
  @media (max-width:900px){ .ing-grid{ grid-template-columns:1fr 1fr; } }
  @media (max-width:560px){ .ing-grid{ grid-template-columns:1fr; } }
  .ing-card{
    background: var(--white); border:1px solid var(--line); border-radius:18px;
    padding: 24px 22px; transition: transform .4s var(--ease), box-shadow .4s var(--ease);
  }
  .ing-card:hover{ transform: translateY(-5px); box-shadow: 0 26px 46px -30px rgba(38,36,32,.32); }
  .ing-icon{
    width:44px; height:44px; border-radius:12px; background: var(--sage-pale);
    display:flex; align-items:center; justify-content:center; margin-bottom:16px;
  }
  .ing-card h3{ font-size:16.5px; margin:0; line-height:1.35; }
  .ing-card p{ font-size:13.5px; margin-top:8px; }
</style>
@endpush

@section('content')

<!-- ================= PAGE HERO ================= -->
<section class="page-hero">
  <div class="container reveal">
    <div class="breadcrumb"><a href="{{ route('home') }}">Beranda</a><span>/</span>Kandungan Aktif</div>
    <span class="eyebrow">Transparansi Bahan</span>
    <h1>Bahan aktif di balik setiap formula {{ \App\Models\Setting::get('brand_name', 'Mejavi Skin+') }}.</h1>
    <p>Kami percaya kamu berhak tahu persis apa yang kamu aplikasikan ke kulit. Berikut bahan-bahan aktif utama yang kami gunakan, beserta manfaatnya masing-masing.</p>
  </div>
</section>

<!-- ================= INGREDIENT GRID ================= -->
<section class="bg-white">
  <div class="container">
    @php
      $icons = [
        'leaf' => '<path d="M12 21C12 21 4 16.5 4 9.8C4 6.6 6.6 4 9.8 4C11.2 4 12 4.6 12 4.6C12 4.6 12.8 4 14.2 4C17.4 4 20 6.6 20 9.8C20 16.5 12 21 12 21Z" stroke="#3F4F36" stroke-width="1.4"/><path d="M12 21V9" stroke="#B4935C" stroke-width="1.4" stroke-linecap="round"/>',
        'droplet' => '<path d="M12 2c4 5 7 9 7 13a7 7 0 11-14 0c0-4 3-8 7-13z" stroke="#3F4F36" stroke-width="1.4" stroke-linejoin="round"/>',
        'shield' => '<path d="M12 3l8 4v5c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V7l8-4z" stroke="#3F4F36" stroke-width="1.4" stroke-linejoin="round"/><path d="M9 12l2 2 4-4" stroke="#3F4F36" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>',
        'sparkle' => '<path d="M12 3l2.5 5.5L20 9l-4 4 1 6-5-3-5 3 1-6-4-4 5.5-.5L12 3z" stroke="#3F4F36" stroke-width="1.3" stroke-linejoin="round"/>',
        'molecule' => '<circle cx="6" cy="6" r="2.2" stroke="#3F4F36" stroke-width="1.4"/><circle cx="18" cy="6" r="2.2" stroke="#3F4F36" stroke-width="1.4"/><circle cx="12" cy="18" r="2.2" stroke="#3F4F36" stroke-width="1.4"/><path d="M7.8 7.2L11 16.2M16.2 7.2L13 16.2M8.2 6H15.8" stroke="#3F4F36" stroke-width="1.2"/>',
      ];
    @endphp
    <div class="ing-grid stagger">
      @forelse ($ingredients as $ingredient)
        <div class="ing-card">
          <div class="ing-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none">{!! $icons[$ingredient->icon] ?? $icons['leaf'] !!}</svg></div>
          <h3>{{ $ingredient->name }}</h3>
          <p>{{ $ingredient->description }}</p>
        </div>
      @empty
        <p>Informasi kandungan aktif akan segera ditambahkan.</p>
      @endforelse
    </div>
  </div>
</section>

<!-- ================= CTA ================= -->
<section class="bg-sage-pale">
  <div class="container">
    <div class="cta-banner reveal">
      <div>
        <span class="eyebrow" style="color:var(--gold);">Lihat Kandungan di Tiap Produk</span>
        <h2 style="margin-top:14px;">Cek kombinasi bahan aktif di masing-masing produk kami.</h2>
      </div>
      <a href="{{ route('products.index') }}" class="btn btn-primary">Jelajahi Produk &rarr;</a>
    </div>
  </div>
</section>

@endsection