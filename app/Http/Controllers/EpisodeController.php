<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use App\Models\Program;
use App\Models\Episode;
use App\Models\Season;

class EpisodeController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }
    
    public function index($id){
        $program = Program::with(['episode'])->where('id',$id)->first();
        return view('admin.episode',[
            'program' => $program,
            'id' => $id
        ]);
    }

    public function addEpisode($id){
        $season = Season::all();
        return view('admin.addepisode',[
            'season' => $season,
            'id' => $id
        ]);
    }

    public function editEpisode($id,$idepisode){
        $season = Season::all();
        $episode = Episode::where('id',$idepisode)->first();

        return view('admin.addepisode',[
            'season' => $season,
            'id' => $id,
            'episode' => $episode
        ]);
    }

    public function createEpisode(Request $request){
        $programs = Program::where('id',$request->id_program)->first();
        $validate = Validator::make($request->all(),[
            'judul' => 'required',
            'episode' => 'required|unique:episode',   
            'season' => 'required',
            'link' => 'required',
            'sinopsis' => 'required',
            'id_program' => 'required',
            'thumbnail' => 'required|mimes:jpeg,jpg,png|max:2048'
        ]);

        if($validate->fails()){
            return back()->withErrors($validate);
        }

        if($request->hasFile('thumbnail')){
            $description_path = 'public/Images/Thumbnail';
            $image = $request->file('thumbnail');
            $image_name = $image->getClientOriginalName();
            $path = $image->storeAs($description_path,$image_name);
        }

        Episode::create([
            'judul' => $request->judul,
            'episode' => $request->episode,
            'id_program' => $request->id_program,
            'sinopsis' => $request->sinopsis,
            'link' => $request->link,
            'id_season' => $request->season,
            'image' => $image_name,
        ]);

        return redirect('admin/program/episode/' . $request->id_program);
    }

    public function updateEpisode(Request $request){
        $id = $request->id;
        $params = Episode::find($id);
        $validate = Validator::make($request->all(),[
            'judul' => 'required',
            'sinopsis' => 'required',
            'episode' => 'required',
            'id_program' => 'required',
            'season' => 'required',
            'link' => 'required',
        ]);

        if($validate->fails()){
            return back()->withErrors($validate);
        }

        if($request->hasFile('thumbnail')){
            $description_path = 'public/Images/Thumbnail';
            $image = $request->file('thumbnail');
            $image_name = $image->getClientOriginalName();
            $path = $image->storeAs($description_path,$image_name);
        }

        if($request->hasFile('thumbnail')){
            $description_path = 'public/Images/Thumbnail';
            $image = $request->file('thumbnail');
            $image_name = $image->getClientOriginalName();
            $path = $image->storeAs($description_path,$image_name);

            $params->fill([
                'judul' => $request->judul,
                'sinopsis' => $request->sinopsis,
                'id_season' => $request->season,
                'id_program' => $request->id_program,
                'episode' => $request->episode,
                'link' => $request->link,
                'image' => $image_name,
            ]);
        }else{
            $params->fill([
                'judul' => $request->judul,
                'sinopsis' => $request->sinopsis,
                'id_season' => $request->season,
                'id_program' => $request->id_program,
                'episode' => $request->episode,
                'link' => $request->link,
            ]);
        }

        $params->save();

        return redirect('admin/program/episode/' . $request->id_program);
    }

    public function deleteEpisode($idProgram, $id){
        $episode = Episode::find($id);
        if($episode){
            $episode->delete();     
            return back();
        }else{
            return response(['message' => 'data tidak ada!']);
        }
    }
}
