@csrf

@if (isset($product) && $product->image)
  <div class="admin-current-image">
    <img src="{{ $product->image_url }}" alt="{{ $product->name }}">
    <span style="font-size:13px; color:var(--adm-text-soft);">Gambar saat ini</span>
  </div>
@endif

<div class="admin-form-group">
  <label for="image">Gambar Produk</label>
  <input type="file" id="image" name="image" accept="image/*">
  <p class="hint">Format JPG/PNG, maksimal 2MB. Kosongkan jika tidak ingin mengubah gambar.</p>
  @error('image') <span class="admin-error">{{ $message }}</span> @enderror
</div>

<div class="admin-form-row">
  <div class="admin-form-group">
    <label for="name">Nama Produk</label>
    <input type="text" id="name" name="name" value="{{ old('name', $product->name ?? '') }}" required>
    @error('name') <span class="admin-error">{{ $message }}</span> @enderror
  </div>
  <div class="admin-form-group">
    <label for="step_label">Label Langkah</label>
    <input type="text" id="step_label" name="step_label" value="{{ old('step_label', $product->step_label ?? '') }}" placeholder="Contoh: Langkah 1 · Pembersih">
    @error('step_label') <span class="admin-error">{{ $message }}</span> @enderror
  </div>
</div>

<div class="admin-form-group">
  <label for="description">Deskripsi</label>
  <textarea id="description" name="description">{{ old('description', $product->description ?? '') }}</textarea>
  @error('description') <span class="admin-error">{{ $message }}</span> @enderror
</div>

<div class="admin-form-group">
  <label for="ingredients">Kandungan / Tag Bahan (ringkas)</label>
  <input type="text" id="ingredients" name="ingredients" value="{{ old('ingredients', $product->ingredients ?? '') }}" placeholder="Pisahkan dengan koma, contoh: Niacinamide, Kolagen, Licorice">
  <p class="hint">Akan ditampilkan sebagai tag bulat singkat di halaman produk.</p>
  @error('ingredients') <span class="admin-error">{{ $message }}</span> @enderror
</div>

<div class="admin-form-group">
  <label for="full_ingredients">Daftar Kandungan Lengkap (INCI, dari label)</label>
  <textarea id="full_ingredients" name="full_ingredients" class="tall" placeholder="Water, Sodium Acrylates Copolymer (and) Lecithin, ...">{{ old('full_ingredients', $product->full_ingredients ?? '') }}</textarea>
  <p class="hint">Salin persis dari label kemasan/BPOM. Ditampilkan lengkap di bagian detail produk.</p>
  @error('full_ingredients') <span class="admin-error">{{ $message }}</span> @enderror
</div>

<div class="admin-form-group">
  <label for="how_to_use">Cara Pemakaian</label>
  <textarea id="how_to_use" name="how_to_use" placeholder="Tuangkan produk secukupnya, kemudian aplikasikan...">{{ old('how_to_use', $product->how_to_use ?? '') }}</textarea>
  @error('how_to_use') <span class="admin-error">{{ $message }}</span> @enderror
</div>

<div class="admin-form-group">
  <label for="benefits">Kegunaan / Manfaat</label>
  <textarea id="benefits" name="benefits" placeholder="Satu manfaat per baris, contoh:&#10;Membantu mencerahkan kulit&#10;Membantu menjaga kelembapan kulit">{{ old('benefits', $product->benefits ?? '') }}</textarea>
  <p class="hint">Tulis satu poin manfaat per baris (Enter) — akan ditampilkan sebagai daftar bercentang.</p>
  @error('benefits') <span class="admin-error">{{ $message }}</span> @enderror
</div>

<div class="admin-form-row">
  <div class="admin-form-group">
    <label for="net_volume">Netto</label>
    <input type="text" id="net_volume" name="net_volume" value="{{ old('net_volume', $product->net_volume ?? '') }}" placeholder="Contoh: 100 ml">
  </div>
  <div class="admin-form-group">
    <label for="usage_note">Pemakaian (ringkas)</label>
    <input type="text" id="usage_note" name="usage_note" value="{{ old('usage_note', $product->usage_note ?? '') }}" placeholder="Contoh: Pagi & Malam">
  </div>
</div>

<div class="admin-form-row">
  <div class="admin-form-group">
    <label for="sort_order">Urutan Tampil</label>
    <input type="number" id="sort_order" name="sort_order" min="0" value="{{ old('sort_order', $product->sort_order ?? 0) }}">
    <p class="hint">Angka lebih kecil tampil lebih dulu.</p>
  </div>
  <div class="admin-form-group">
    <label>Status</label>
    <div class="admin-checkbox" style="margin-top:12px;">
      <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $product->is_active ?? true) ? 'checked' : '' }}>
      <label for="is_active" style="margin:0; font-weight:500;">Tampilkan di website</label>
    </div>
    <div class="admin-checkbox" style="margin-top:10px;">
      <input type="checkbox" id="is_coming_soon" name="is_coming_soon" value="1" {{ old('is_coming_soon', $product->is_coming_soon ?? false) ? 'checked' : '' }}>
      <label for="is_coming_soon" style="margin:0; font-weight:500;">Tandai sebagai "Segera Hadir" (produk draft/belum rilis)</label>
    </div>
  </div>
</div>

<button type="submit" class="admin-btn admin-btn-primary">{{ isset($product) ? 'Simpan Perubahan' : 'Tambah Produk' }}</button>
<a href="{{ route('admin.products.index') }}" class="admin-btn admin-btn-outline">Batal</a>