<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles()
    {
        $articles=Article::all();
        return view('articles')->with('articles', $articles);
    }

    public function addArticles()
    {
        return view('articles.create-article');
    }


    public function storeArticle(Request $request)
    {
        $title = $request->title;
        $lyrics = $request->lyrics;
        $translation = $request->translation;
    

        $news = new Article();
        $news->title = $title;
        $news->lyrics = $lyrics;
        $news->translation = $translation;
        $news->save();
        return back()->with('Lyrics added', 'Lyrics Record has been inserted');
    }

    public function allArticles()
    {
        $articles = Article::all();
        return view('articles.all-articles', compact('articles'));

    }

    public function editArticle($id)
    {
        $article = Article::find($id);
        return view('articles.edit-article', compact('article'));

    }

    public function updateArticle(Request $request)
    {
        $title = $request->title;
        $lyrics = $request->lyrics;
        $translation = $request->translation;
    
        $new = Article::find($request->id);
        $new->title = $title;
        $new->lyrics = $lyrics;
        $new->translation = $translation;
        $new->save();
        return back()->with('Lyrics Updated', 'Lyrics Record has been inserted');

    }

    public function deleteArticle($id)
    {
        $article = Article::find($id);
        $article->delete();
        return back()->with('Lyrics deleted', 'Lyrics Record has been deleted');

    }    
}
