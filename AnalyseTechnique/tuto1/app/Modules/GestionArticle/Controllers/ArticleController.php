<?php
// app/Modules/GestionArticle/Controllers/ArticleController.php
namespace App\Modules\GestionArticle\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\GestionArticle\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('GestionArticle::index', compact('articles'));
    }

    public function create()
    {
        return view('GestionArticle::create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Article::create($request->all());
        return redirect()->route('articles.index');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('GestionArticle::show', compact('article'));
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('GestionArticle::edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect()->route('articles.index');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('articles.index');
    }
}