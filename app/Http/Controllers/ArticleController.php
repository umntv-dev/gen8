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
        return view('page.article', [
            'article' => $article
        ]);
    }

    public function highlight()
    {
        $highlight = Article::with('divisi')->get();
        return view('page.article', [
            'highlight' => $highlight
        ]);
    }
}
