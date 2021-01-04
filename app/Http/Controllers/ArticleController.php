<?php

namespace App\Http\Controllers;

use App\Article;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('Article.index', compact('articles'));
    }

    public function create()
    {
        return view('Article.create');
    }

    public function store(Request $request)
    {
        Article::create($request->all());

        Toastr::success('Elément bien ajouté');

        return redirect()->route('article.create');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('Article.show', compact('article'));
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('Article.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        Toastr::success('Elément bien mis à jour');

        return redirect()->route('article.index');
    }

    public function destroy()
    {
        $articleNom = Article::findOrFail(request('id'))->nom;
        Article::destroy(request('id'));

        return response($articleNom);
    }

    public function destroyAll()
    {
        $elements = request('ids');

        foreach ($elements as $element) {
            Article::destroy($element);
        }

        return $elements;
    }
}
