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

        $count = Article::count()-1;
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

        //$index buat cari index dari article yang dipilih
        $index = array_search($article->id, $articles->pluck('id')->toArray());
        $jumlah = Article::count()-1;
        $cobain = $index;

        return view('page.articledetail', [
            'article' => $article,
            'articles' => $articles,
            'jumlah' => $jumlah,
            'index' => $index,
            'cobain' => $cobain
        ]);
    }

}
