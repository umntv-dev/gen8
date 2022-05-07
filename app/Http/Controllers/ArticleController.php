<?php

namespace App\Http\Controllers;

use App\Models\Crews;
use App\Models\Divisi;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

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

        return view('page.articledetail', [
            'article' => $article,
            'articles' => $articles,
            'jumlah' => $jumlah,
            'index' => $index
        ]);
    }

    public function create(){
        return view('page.articlecreate');
    }

    public function showArticle(){
        $params = Article::with('divisi','crews')->get();

        return view('admin.article', [
            'article' => $params
        ]);
    }

    public function addArticle(){
        $divisi = Divisi::all();
        $crews = Crews::all();

        return view('admin.addarticle',[
            'divisi' => $divisi,
            'crews' => $crews
        ]);
    }

    public function createArticle(Request $request){
        $validate = Validator::make($request->all(),[
            'judul' => 'required',
            'crews' => 'required',
            'divisi' => 'required',
            'description' => 'required',
            'divisi' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png|max:2048'
        ]);

        if($validate->fails()){
            return back()->withErrors($validate);
        }

        if($request->hasFile('image')){
            $description_path = 'public/Images/Article';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $image->storeAs($description_path,$image_name);
        }

        Article::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'id_crews' => $request->crews,
            'id_divisi' => $request->divisi,
            'waktu' => date('Y-m-d H:i:s'),
            'image' => $image_name,
            'description' => $request->description,
        ]);

        return back();
    }

    public function editArticle($id){
        $article = Article::with(['divisi','crews'])->where('id',$id)->first(); 
        $divisi = Divisi::all();
        $crews = Crews::all();

        return view('admin.addarticle',[
            'article' => $article,
            'divisi' => $divisi,
            'crews' => $crews
        ]);
    }

    public function updateArticle(Request $request){
        $id = $request->id;
        $params = Article::find($id);
        $validate = Validator::make($request->all(),[
            'judul' => 'required',
            'crews' => 'required',
            'divisi' => 'required',
            'description' => 'required',
            'divisi' => 'required',
        ]);

        if($validate->fails()){
            return back()->withErrors($validate);
        }

        if($request->hasFile('image')){
            $description_path = 'public/Images/Article';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $image->storeAs($description_path,$image_name);
        }

        if($request->hasFile('image')){
            $description_path = 'public/Images/Article';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $image->storeAs($description_path,$image_name);

            $params->fill([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul),
                'id_crews' => $request->crews,
                'id_divisi' => $request->divisi,
                'description' => $request->description,
                'image' => $image_name,
            ]);
        }else{
            $params->fill([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul),
                'id_crews' => $request->crews,
                'id_divisi' => $request->divisi,
                'description' => $request->description,
            ]);
        }

        $params->save();

        return redirect('admin/article');
    }

    public function deleteArticle($id){
        $article = Article::find($id);
        if($article){
            $article->delete();     
            return back();
        }else{
            return response(['message' => 'data tidak ada!']);
        }
    }
}