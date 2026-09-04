@csrf

@if (isset($article) && $article->cover_image)
  <div class="admin-current-image">
    <img src="{{ $article->cover_url }}" alt="{{ $article->title }}">
    <span style="font-size:13px; color:var(--adm-text-soft);">Sampul saat ini</span>
  </div>
@endif

<div class="admin-form-group">
  <label for="cover_image">Gambar Sampul</label>
  <input type="file" id="cover_image" name="cover_image" accept="image/*">
  <p class="hint">Format JPG/PNG, maksimal 2MB. Kosongkan jika tidak ingin mengubah gambar.</p>
  @error('cover_image') <span class="admin-error">{{ $message }}</span> @enderror
</div>

<div class="admin-form-row">
  <div class="admin-form-group">
    <label for="title">Judul Artikel</label>
    <input type="text" id="title" name="title" value="{{ old('title', $article->title ?? '') }}" required>
    @error('title') <span class="admin-error">{{ $message }}</span> @enderror
  </div>
  <div class="admin-form-group">
    <label for="category">Kategori</label>
    <select id="category" name="category" required>
      @foreach ($categories as $cat)
        <option value="{{ $cat }}" {{ old('category', $article->category ?? '') === $cat ? 'selected' : '' }}>{{ $cat }}</option>
      @endforeach
    </select>
    @error('category') <span class="admin-error">{{ $message }}</span> @enderror
  </div>
</div>

<div class="admin-form-group">
  <label for="excerpt">Ringkasan Singkat</label>
  <textarea id="excerpt" name="excerpt" placeholder="Ditampilkan di kartu daftar artikel">{{ old('excerpt', $article->excerpt ?? '') }}</textarea>
  @error('excerpt') <span class="admin-error">{{ $message }}</span> @enderror
</div>

<div class="admin-form-group">
  <label for="content">Isi Artikel (HTML diperbolehkan: &lt;p&gt;, &lt;h2&gt;, &lt;h3&gt;, &lt;ul&gt;&lt;li&gt;)</label>
  <textarea id="content" name="content" class="tall">{{ old('content', $article->content ?? '') }}</textarea>
  <p class="hint">Gunakan tag &lt;p&gt;paragraf&lt;/p&gt;, &lt;h2&gt;Judul Bagian&lt;/h2&gt; untuk mengikuti gaya tampilan situs.</p>
  @error('content') <span class="admin-error">{{ $message }}</span> @enderror
</div>

<div class="admin-form-row">
  <div class="admin-form-group">
    <label for="author_name">Nama Penulis</label>
    <input type="text" id="author_name" name="author_name" value="{{ old('author_name', $article->author_name ?? 'Tim Riset Mejavi') }}">
  </div>
  <div class="admin-form-group">
    <label for="published_at">Tanggal Terbit</label>
    <input type="date" id="published_at" name="published_at" value="{{ old('published_at', isset($article) && $article->published_at ? $article->published_at->format('Y-m-d') : now()->format('Y-m-d')) }}">
  </div>
</div>

<div class="admin-checkbox admin-form-group">
  <input type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured', $article->is_featured ?? false) ? 'checked' : '' }}>
  <label for="is_featured" style="margin:0; font-weight:500;">Jadikan artikel unggulan (tampil besar di atas)</label>
</div>

<button type="submit" class="admin-btn admin-btn-primary">{{ isset($article) ? 'Simpan Perubahan' : 'Terbitkan Artikel' }}</button>
<a href="{{ route('admin.articles.index') }}" class="admin-btn admin-btn-outline">Batal</a>
