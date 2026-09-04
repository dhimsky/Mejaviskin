<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::where('is_active', true)
            ->where('is_coming_soon', false)
            ->orderBy('sort_order')
            ->take(3)
            ->get();

        $latestArticles = Article::published()
            ->orderByDesc('published_at')
            ->take(3)
            ->get();

        return view('pages.home', compact('products', 'latestArticles'));
    }
}