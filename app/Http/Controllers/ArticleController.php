<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('tags')->get();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        $tags = Tag::all();
        return view('articles.create', compact('tags'));
    }

    public function store(Request $request)
    {
        $article = Article::create($request->only(['title', 'content']));
        $article->tags()->attach($request->input('tag_ids'));
        return redirect()->route('articles.index');
    }

    public function show($id)
    {
        $article = Article::with('tags')->findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function edit($id)
    {
        $article = Article::with('tags')->findOrFail($id);
        $tags = Tag::all();
        return view('articles.edit', compact('article', 'tags'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->only(['title', 'content']));
        $article->tags()->sync($request->input('tag_ids'));
        return redirect()->route('articles.index');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->tags()->detach();
        $article->delete();
        return redirect()->route('articles.index');
    }
}
