<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::with('divisi')->get();

        $count = Article::count();
        $random = rand(0,$count);
        $highlight = $article[$random];

        return view('page.article', [
            'article' => $article,
            'highlight' => $highlight
        ]);
    }

    public function detail(Article $article)
    {
        $articles = Article::with('divisi')->get();

        $article = Article::with('divisi','crews')->find($article->id);

        return view('page.articledetail', [
            'article' => $article,
            'articles' => $articles,
        ]);
    }

}
