<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index()
    {
        $ingredients = Ingredient::orderBy('sort_order')->paginate(20);

        return view('admin.ingredients.index', compact('ingredients'));
    }

    public function create()
    {
        return view('admin.ingredients.create');
    }

    public function store(Request $request)
    {
        $data = $this->validateData($request);
        $data['is_active'] = $request->boolean('is_active');

        Ingredient::create($data);

        return redirect()->route('admin.ingredients.index')->with('status', 'Kandungan aktif berhasil ditambahkan.');
    }

    public function edit(Ingredient $ingredient)
    {
        return view('admin.ingredients.edit', compact('ingredient'));
    }

    public function update(Request $request, Ingredient $ingredient)
    {
        $data = $this->validateData($request);
        $data['is_active'] = $request->boolean('is_active');

        $ingredient->update($data);

        return redirect()->route('admin.ingredients.index')->with('status', 'Kandungan aktif berhasil diperbarui.');
    }

    public function destroy(Ingredient $ingredient)
    {
        $ingredient->delete();

        return redirect()->route('admin.ingredients.index')->with('status', 'Kandungan aktif berhasil dihapus.');
    }

    private function validateData(Request $request): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'description' => ['required', 'string', 'max:500'],
            'icon' => ['required', 'in:'.implode(',', \App\Models\Ingredient::ICONS)],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);
    }
}