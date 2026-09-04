@extends('layouts.app')

@section('title', 'Kontak | '.\App\Models\Setting::get('brand_name', 'Mejavi Skin+'))
@section('meta_description', 'Hubungi tim '.\App\Models\Setting::get('brand_name', 'Mejavi Skin+').' untuk pertanyaan produk, kerja sama distribusi, atau kemitraan bisnis.')

@push('styles')
<style>
  .contact-wrap{ display:grid; grid-template-columns: 0.9fr 1.1fr; gap:56px; }
  @media (max-width:900px){ .contact-wrap{ grid-template-columns:1fr; } }
  .contact-info-card{
    background: var(--sage-dark); color: var(--cream);
    border-radius: 24px; padding: 40px 34px;
  }
  .contact-info-card .eyebrow{ color: var(--gold); }
  .contact-info-card h3{ color: var(--cream); font-size:22px; margin-top:12px; }
  .contact-list{ margin-top: 30px; display:flex; flex-direction:column; gap:22px; }
  .contact-list div{ display:flex; gap:14px; align-items:flex-start; }
  .contact-list svg{ flex-shrink:0; margin-top:2px; }
  .contact-list strong{ display:block; font-size:14.5px; color:var(--cream); }
  .contact-list span{ font-size:14px; color: rgba(246,243,234,0.72); }

  form.contact-form{
    background: var(--white); border:1px solid var(--line); border-radius: 24px;
    padding: 40px 36px; display:grid; gap: 20px;
  }
  .form-row{ display:grid; grid-template-columns:1fr 1fr; gap:20px; }
  @media (max-width:560px){ .form-row{ grid-template-columns:1fr; } }
  .field label{ display:block; font-size:13px; font-weight:700; color:var(--sage-ink); margin-bottom:8px; letter-spacing:.02em; }
  .field input, .field select, .field textarea{
    width:100%; padding:13px 16px; border-radius: 12px;
    border:1px solid var(--line); background: var(--cream); font-family: var(--font-body);
    font-size:14.5px; color: var(--ink); transition: border-color .25s ease, background .25s ease;
  }
  .field input:focus, .field select:focus, .field textarea:focus{
    outline:none; border-color: var(--sage); background: var(--white);
  }
  .field textarea{ resize: vertical; min-height: 120px; }
  .form-note{ font-size: 12.5px; color: var(--ink-soft); }
  .field .error{ color:#b3432f; font-size:12.5px; margin-top:6px; display:block; }
</style>
@endpush

@section('content')

<!-- ================= PAGE HERO ================= -->
<section class="page-hero">
  <div class="container reveal">
    <div class="breadcrumb"><a href="{{ route('home') }}">Beranda</a><span>/</span>Kontak</div>
    <span class="eyebrow">Hubungi Kami</span>
    <h1>Mari bicarakan kolaborasi, distribusi, atau sekadar bertanya.</h1>
    <p>Tim kami siap membantu — baik untuk pertanyaan produk, kerja sama mitra, maupun peluang distribusi domestik dan internasional.</p>
  </div>
</section>

<!-- ================= CONTACT SECTION ================= -->
<section class="bg-white">
  <div class="container">
    <div class="contact-wrap">

      <div class="reveal contact-info-card">
        <span class="eyebrow">Informasi Kontak</span>
        <h3>{{ \App\Models\Setting::get('company_name', 'PT Satu Satunya') }} — {{ \App\Models\Setting::get('brand_name', 'Mejavi Skin+') }}</h3>
        <div class="contact-list">
          <div>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M12 21C12 21 4 16.5 4 9.8C4 6.6 6.6 4 9.8 4C11.2 4 12 4.6 12 4.6C12 4.6 12.8 4 14.2 4C17.4 4 20 6.6 20 9.8C20 16.5 12 21 12 21Z" stroke="#B4935C" stroke-width="1.4"/></svg>
            <div><strong>Alamat Kantor</strong><span>{{ \App\Models\Setting::get('contact_address') }}</span></div>
          </div>
          <div>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M4 5h16v14H4V5z" stroke="#B4935C" stroke-width="1.4"/><path d="M4 6l8 7 8-7" stroke="#B4935C" stroke-width="1.4"/></svg>
            <div><strong>Email</strong><span>{{ \App\Models\Setting::get('contact_email') }}</span></div>
          </div>
          <div>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M6 3h4l2 5-2.5 1.5a12 12 0 006 6L17 13l5 2v4a2 2 0 01-2 2C10.5 21 3 13.5 3 5a2 2 0 012-2z" stroke="#B4935C" stroke-width="1.4"/></svg>
            <div><strong>Telepon / WhatsApp</strong><span>{{ \App\Models\Setting::get('contact_phone_display') }}</span></div>
          </div>
          <div>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="#B4935C" stroke-width="1.4"/><path d="M12 7v5l3 3" stroke="#B4935C" stroke-width="1.4"/></svg>
            <div><strong>Jam Operasional</strong><span>{{ \App\Models\Setting::get('operational_hours') }}</span></div>
          </div>
        </div>
      </div>

      <form class="contact-form reveal reveal-delay-2" method="POST" action="{{ route('contact.store') }}">
        @csrf
        <div class="form-row">
          <div class="field">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" placeholder="Nama Anda" value="{{ old('nama') }}" required>
            @error('nama') <span class="error">{{ $message }}</span> @enderror
          </div>
          <div class="field">
            <label for="email">Alamat Email</label>
            <input type="email" id="email" name="email" placeholder="nama@email.com" value="{{ old('email') }}" required>
            @error('email') <span class="error">{{ $message }}</span> @enderror
          </div>
        </div>
        <div class="form-row">
          <div class="field">
            <label for="perusahaan">Perusahaan / Instansi</label>
            <input type="text" id="perusahaan" name="perusahaan" placeholder="Opsional" value="{{ old('perusahaan') }}">
          </div>
          <div class="field">
            <label for="topik">Topik</label>
            <select id="topik" name="topik">
              @foreach (['Pertanyaan Produk', 'Kerja Sama Mitra / Distributor', 'Media & Kolaborasi', 'Lainnya'] as $topik)
                <option {{ old('topik') === $topik ? 'selected' : '' }}>{{ $topik }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="field">
          <label for="pesan">Pesan</label>
          <textarea id="pesan" name="pesan" placeholder="Ceritakan kebutuhan Anda..." required>{{ old('pesan') }}</textarea>
          @error('pesan') <span class="error">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary" style="justify-self:start;">Kirim Pesan <span class="btn-arrow">&rarr;</span></button>
        <p class="form-note">Pesan Anda akan tersimpan, dan Anda akan diarahkan ke WhatsApp untuk melanjutkan percakapan dengan tim kami.</p>
      </form>

    </div>
  </div>
</section>

@endsection
