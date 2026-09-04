<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $activeCategory = $request->query('kategori', 'Semua');

        $categories = Article::published()
            ->orderBy('category')
            ->distinct()
            ->pluck('category');

        $featured = Article::published()
            ->orderByDesc('is_featured')
            ->orderByDesc('published_at')
            ->first();

        $query = Article::published()->orderByDesc('published_at');

        if ($featured) {
            $query->where('id', '!=', $featured->id);
        }

        if ($activeCategory && $activeCategory !== 'Semua') {
            $query->where('category', $activeCategory);
        }

        $articles = $query->get();

        return view('pages.artikel', compact('articles', 'featured', 'categories', 'activeCategory'));
    }

    public function show(Article $article)
    {
        $related = Article::published()
            ->where('id', '!=', $article->id)
            ->orderByDesc('published_at')
            ->take(3)
            ->get();

        return view('pages.artikel-detail', compact('article', 'related'));
    }
}
