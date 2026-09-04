<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public const CATEGORIES = ['Kandungan Aktif', 'Rutinitas', 'Sains Kulit', 'Berita Perusahaan'];

    public function index()
    {
        $articles = Article::orderByDesc('published_at')->paginate(15);

        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        $categories = self::CATEGORIES;

        return view('admin.articles.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $this->validateData($request);

        $data['slug'] = Article::makeUniqueSlug($data['title']);
        $data['is_featured'] = $request->boolean('is_featured');
        $data['published_at'] = $request->filled('published_at')
            ? $request->date('published_at')
            : now();

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('articles', 'public');
        }

        Article::create($data);

        return redirect()->route('admin.articles.index')->with('status', 'Artikel berhasil ditambahkan.');
    }

    public function edit(Article $article)
    {
        $categories = self::CATEGORIES;

        return view('admin.articles.edit', compact('article', 'categories'));
    }

    public function update(Request $request, Article $article)
    {
        $data = $this->validateData($request);

        if ($data['title'] !== $article->title) {
            $data['slug'] = Article::makeUniqueSlug($data['title'], $article->id);
        }

        $data['is_featured'] = $request->boolean('is_featured');
        $data['published_at'] = $request->filled('published_at')
            ? $request->date('published_at')
            : $article->published_at;

        if ($request->hasFile('cover_image')) {
            if ($article->cover_image) {
                Storage::disk('public')->delete($article->cover_image);
            }
            $data['cover_image'] = $request->file('cover_image')->store('articles', 'public');
        }

        $article->update($data);

        return redirect()->route('admin.articles.index')->with('status', 'Artikel berhasil diperbarui.');
    }

    public function destroy(Article $article)
    {
        if ($article->cover_image) {
            Storage::disk('public')->delete($article->cover_image);
        }

        $article->delete();

        return redirect()->route('admin.articles.index')->with('status', 'Artikel berhasil dihapus.');
    }

    private function validateData(Request $request): array
    {
        return $request->validate([
            'category' => ['required', 'string', 'max:100'],
            'title' => ['required', 'string', 'max:200'],
            'excerpt' => ['nullable', 'string', 'max:300'],
            'content' => ['nullable', 'string'],
            'author_name' => ['nullable', 'string', 'max:150'],
            'published_at' => ['nullable', 'date'],
            'cover_image' => ['nullable', 'image', 'max:2048'],
        ]);
    }
}
