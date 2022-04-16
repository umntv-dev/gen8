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
        $more1 = $index + 1;
        //overflow management index
        if($more1 > Article::count()-1){
            $more1 %= Article::count()-1;
        }
        $more2 = $more1 + 1;
        if($more2 > Article::count()-1){
            $more2 %= Article::count()-1;
        }
        $more3 = $more2 + 1;
        if($more3 > Article::count()-1){
            $more3 %= Article::count()-1;
        }

        return view('page.articledetail', [
            'article' => $article,
            'articles' => $articles,
            'more1' => $more1,
            'more2' => $more2,
            'more3' => $more3
        ]);
    }

}
