@extends('admin.layout')

@section('title', 'Pengaturan Situs')

@section('content')

<div class="admin-card">
  <h2>Informasi Perusahaan &amp; Kontak</h2>
  <p class="admin-card-sub">Data ini otomatis dipakai di footer, halaman Kontak, dan tombol WhatsApp seluruh website.</p>

  <form method="POST" action="{{ route('admin.settings.update') }}">
    @csrf
    @method('PUT')

    <div class="admin-form-row">
      <div class="admin-form-group">
        <label for="brand_name">Nama Brand</label>
        <input type="text" id="brand_name" name="brand_name" value="{{ old('brand_name', $settings['brand_name']) }}">
      </div>
      <div class="admin-form-group">
        <label for="company_name">Nama Perusahaan (PT)</label>
        <input type="text" id="company_name" name="company_name" value="{{ old('company_name', $settings['company_name']) }}">
      </div>
    </div>

    <div class="admin-form-group">
      <label for="contact_address">Alamat Kantor</label>
      <textarea id="contact_address" name="contact_address">{{ old('contact_address', $settings['contact_address']) }}</textarea>
    </div>

    <div class="admin-form-row">
      <div class="admin-form-group">
        <label for="contact_email">Email Kontak</label>
        <input type="email" id="contact_email" name="contact_email" value="{{ old('contact_email', $settings['contact_email']) }}">
        @error('contact_email') <span class="admin-error">{{ $message }}</span> @enderror
      </div>
      <div class="admin-form-group">
        <label for="contact_phone_display">Telepon (tampilan)</label>
        <input type="text" id="contact_phone_display" name="contact_phone_display" value="{{ old('contact_phone_display', $settings['contact_phone_display']) }}" placeholder="+62 21 1234 5678">
      </div>
    </div>

    <div class="admin-form-row">
      <div class="admin-form-group">
        <label for="whatsapp_number">Nomor WhatsApp</label>
        <input type="text" id="whatsapp_number" name="whatsapp_number" value="{{ old('whatsapp_number', $settings['whatsapp_number']) }}" placeholder="6281234567890">
        <p class="hint">Angka saja, diawali kode negara (62), tanpa spasi/+/0 di depan. Dipakai untuk tombol WhatsApp otomatis dari form kontak.</p>
      </div>
      <div class="admin-form-group">
        <label for="operational_hours">Jam Operasional</label>
        <input type="text" id="operational_hours" name="operational_hours" value="{{ old('operational_hours', $settings['operational_hours']) }}">
      </div>
    </div>

    <div class="admin-form-group">
      <label for="footer_tagline">Tagline Footer</label>
      <textarea id="footer_tagline" name="footer_tagline">{{ old('footer_tagline', $settings['footer_tagline']) }}</textarea>
    </div>

    <button type="submit" class="admin-btn admin-btn-primary">Simpan Pengaturan</button>
  </form>
</div>

@endsection
