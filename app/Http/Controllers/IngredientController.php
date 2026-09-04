<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;

class IngredientController extends Controller
{
    public function index()
    {
        $ingredients = Ingredient::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('pages.kandungan-aktif', compact('ingredients'));
    }
}