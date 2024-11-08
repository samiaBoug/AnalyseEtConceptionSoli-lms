<?php 
// app/Modules/GestionCategories/Controllers/CategoryController.php
namespace App\Modules\GestionCategories\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\GestionCategories\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('GestionCategories::index', compact('categories'));
    }

    public function create()
    {
        return view('GestionCategories::create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create($request->all());
        return redirect()->route('categories.index');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('GestionCategories::show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('GestionCategories::edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::findOrFail($id);
        $category->update($request->all());
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('categories.index');
    }
}