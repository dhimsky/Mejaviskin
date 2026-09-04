@extends('layouts.app')

@section('title', 'Tentang Kami | '.\App\Models\Setting::get('brand_name', 'Mejavi Skin+'))
@section('meta_description', 'Kenali visi, misi, dan nilai '.\App\Models\Setting::get('company_name', 'PT Satu Satunya').' di balik '.\App\Models\Setting::get('brand_name', 'Mejavi Skin+').' — perawatan kulit berbasis sains dan alam.')

@section('content')

@push('styles')
<style>
  .story-stack{ display:flex; flex-direction:column; gap:36px; }
  .story-visual{
    border-radius: 28px;
    overflow: hidden;
    aspect-ratio: 16/9;
    background: linear-gradient(160deg, var(--sage-pale), var(--cream-2));
  }
  .story-visual video{
    width:100%; height:100%; object-fit:cover; display:block;
  }
</style>
@endpush

<!-- ================= PAGE HERO ================= -->
<section class="page-hero">
  <div class="container reveal">
    <div class="breadcrumb"><a href="{{ route('home') }}">Beranda</a><span>/</span>Tentang Kami</div>
    <span class="eyebrow">Tentang {{ \App\Models\Setting::get('brand_name', 'Mejavi Skin+') }}</span>
    <h1>Di balik setiap formula, ada niat untuk kulit yang lebih jujur dan sehat.</h1>
    <p>{{ \App\Models\Setting::get('company_name', 'PT Satu Satunya') }} membangun {{ \App\Models\Setting::get('brand_name', 'Mejavi Skin+') }} sebagai jawaban atas kebutuhan perawatan kulit yang benar-benar bekerja — didukung sains, ditumbuhkan dari alam.</p>
  </div>
</section>

<!-- ================= VISI ================= -->
<section class="bg-white">
  <div class="container">
    <div class="story-stack">
      <div class="story-visual reveal" style="position: relative;">
        <video id="aboutVideo" src="{{ asset('assets/vids/vid-about.mp4') }}" autoplay muted loop playsinline></video>
        <button id="unmuteBtn" class="unmute-btn">
          🔇
        </button>
      </div>

      <style>
        .unmute-btn {
          position: absolute;
          bottom: 16px;
          right: 16px;
          z-index: 2;

          display: flex;
          align-items: center;
          gap: 6px;

          padding: 10px 16px;
          background: rgba(0, 0, 0, 0.65);
          color: #fff;
          font-size: 14px;
          font-weight: 500;
          border: 1px solid rgba(255, 255, 255, 0.3);
          border-radius: 30px;

          cursor: pointer;
          backdrop-filter: blur(4px);
          -webkit-backdrop-filter: blur(4px);
          transition: background 0.25s ease, transform 0.2s ease;
        }

        .unmute-btn:hover {
          background: rgba(0, 0, 0, 0.85);
          transform: scale(1.05);
        }

        .unmute-btn:active {
          transform: scale(0.96);
        }

        /* Responsive: sedikit lebih kecil di layar mobile */
        @media (max-width: 576px) {
          .unmute-btn {
            padding: 8px 12px;
            font-size: 13px;
            bottom: 10px;
            right: 10px;
          }
        }
      </style>

      <script>
        const video = document.getElementById('aboutVideo');
        const btn = document.getElementById('unmuteBtn');

        btn.addEventListener('click', () => {
          video.muted = !video.muted;
          btn.textContent = video.muted ? '🔇' : '🔊';
        });
      </script>
      <div class="reveal reveal-delay-2">
        <span class="eyebrow">Visi Perusahaan</span>
        <h2 style="font-size:clamp(28px,3.6vw,42px); margin-top:16px;">Menjadi penyedia solusi gaya hidup sehat dan cantik yang tepercaya secara global.</h2>
        <svg class="divider-fern fern-line" viewBox="0 0 340 34"><path d="M2 30C40 6 90 30 130 10C170 -6 210 24 250 8C280 -3 310 14 338 4"/></svg>
        <p style="font-size:16.5px;">Kami menghadirkan pengalaman perawatan kulit yang nyata, aman, dan efektif melalui kekuatan sains dan alam — sambil terus berkembang ke sektor kesehatan dan kecantikan yang lebih luas, untuk lebih banyak orang di lebih banyak tempat.</p>
      </div>
    </div>
  </div>
</section>

<!-- ================= MISI ================= -->
<section class="bg-sage-pale">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Misi Perusahaan</span>
      <h2>Tiga komitmen yang kami pegang setiap hari.</h2>
    </div>
    <div class="grid-3 stagger">
      <div class="card">
        <span class="num">01</span>
        <h3>Kualitas &amp; Keamanan</h3>
        <p>Mengembangkan dan memproduksi produk perawatan kulit berkualitas tinggi dan efektif yang memberikan hasil terlihat dan aman bagi pengguna.</p>
      </div>
      <div class="card">
        <span class="num">02</span>
        <h3>Jangkauan &amp; Kemitraan</h3>
        <p>Menyediakan produk berkualitas kepada klien domestik dan internasional, serta mendukung pertumbuhan mitra bisnis kami.</p>
      </div>
      <div class="card">
        <span class="num">03</span>
        <h3>Inovasi Berkelanjutan</h3>
        <p>Memperluas lini produk inovatif untuk memenuhi beragam kebutuhan kesehatan dan kecantikan yang terus berkembang.</p>
      </div>
    </div>
  </div>
</section>

<!-- ================= NILAI ================= -->
<section class="bg-white">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow">Nilai Kami</span>
      <h2>Prinsip yang membentuk setiap keputusan.</h2>
    </div>
    <div class="grid-3 stagger">
      <div class="card" style="border:none; background:var(--sage-pale);">
        <div class="card-icon" style="background:var(--white);"><svg viewBox="0 0 24 24" fill="none"><path d="M12 3l2.5 5.5L20 9l-4 4 1 6-5-3-5 3 1-6-4-4 5.5-.5L12 3z" stroke="#3F4F36" stroke-width="1.3" stroke-linejoin="round"/></svg></div>
        <h3>Jujur pada Bahan</h3>
        <p>Setiap kandungan aktif dicantumkan apa adanya — tidak ada klaim berlebihan.</p>
      </div>
      <div class="card" style="border:none; background:var(--sage-pale);">
        <div class="card-icon" style="background:var(--white);"><svg viewBox="0 0 24 24" fill="none"><path d="M9 12l2 2 4-4M12 3l8 4v5c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V7l8-4z" stroke="#3F4F36" stroke-width="1.3" stroke-linejoin="round"/></svg></div>
        <h3>Aman Lebih Dulu</h3>
        <p>Uji keamanan menjadi syarat mutlak sebelum produk meninggalkan pabrik.</p>
      </div>
      <div class="card" style="border:none; background:var(--sage-pale);">
        <div class="card-icon" style="background:var(--white);"><svg viewBox="0 0 24 24" fill="none"><path d="M3 12h4l3 8 4-16 3 8h4" stroke="#3F4F36" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
        <h3>Hasil yang Terukur</h3>
        <p>Kami percaya pada perubahan yang terlihat dan terasa, bukan sekadar janji.</p>
      </div>
    </div>
  </div>
</section>

<!-- ================= CTA ================= -->
<section class="bg-sage-pale">
  <div class="container">
    <div class="cta-banner reveal">
      <div>
        <span class="eyebrow" style="color:var(--gold);">Kenali Lebih Jauh</span>
        <h2 style="margin-top:14px;">Lihat rangkaian produk yang mewujudkan visi kami.</h2>
      </div>
      <a href="{{ route('products.index') }}" class="btn btn-primary">Jelajahi Produk &rarr;</a>
    </div>
  </div>
</section>

@endsection
