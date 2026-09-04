@csrf

<div class="admin-form-row">
  <div class="admin-form-group">
    <label for="name">Nama Kandungan</label>
    <input type="text" id="name" name="name" value="{{ old('name', $ingredient->name ?? '') }}" placeholder="Contoh: Niacinamide (Vitamin B3)" required>
    @error('name') <span class="admin-error">{{ $message }}</span> @enderror
  </div>
  <div class="admin-form-group">
    <label for="icon">Ikon</label>
    <select id="icon" name="icon" required>
      @foreach (\App\Models\Ingredient::ICONS as $icon)
        <option value="{{ $icon }}" {{ old('icon', $ingredient->icon ?? 'leaf') === $icon ? 'selected' : '' }}>{{ ucfirst($icon) }}</option>
      @endforeach
    </select>
    @error('icon') <span class="admin-error">{{ $message }}</span> @enderror
  </div>
</div>

<div class="admin-form-group">
  <label for="description">Deskripsi Manfaat</label>
  <textarea id="description" name="description" placeholder="Jelaskan manfaat kandungan ini secara singkat" required>{{ old('description', $ingredient->description ?? '') }}</textarea>
  @error('description') <span class="admin-error">{{ $message }}</span> @enderror
</div>

<div class="admin-form-row">
  <div class="admin-form-group">
    <label for="sort_order">Urutan Tampil</label>
    <input type="number" id="sort_order" name="sort_order" min="0" value="{{ old('sort_order', $ingredient->sort_order ?? 0) }}">
    <p class="hint">Angka lebih kecil tampil lebih dulu.</p>
  </div>
  <div class="admin-form-group">
    <label>Status</label>
    <div class="admin-checkbox" style="margin-top:12px;">
      <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $ingredient->is_active ?? true) ? 'checked' : '' }}>
      <label for="is_active" style="margin:0; font-weight:500;">Tampilkan di website</label>
    </div>
  </div>
</div>

<button type="submit" class="admin-btn admin-btn-primary">{{ isset($ingredient) ? 'Simpan Perubahan' : 'Tambah Kandungan' }}</button>
<a href="{{ route('admin.ingredients.index') }}" class="admin-btn admin-btn-outline">Batal</a>
