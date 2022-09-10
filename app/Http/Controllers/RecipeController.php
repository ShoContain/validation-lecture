<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipe.index', compact('recipes'));
    }

    public function create()
    {
        return view('recipe.create');
    }

    public function store(Request $request)
    {
        // Validationをする
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'kcal' => ['required', 'integer', 'between:20,100']
        ]);

        // 登録
        $recipe = new Recipe();
        $recipe->fill($request->all())->save();

        return redirect()->route('recipe.index');
    }
}
