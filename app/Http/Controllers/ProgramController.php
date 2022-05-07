<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Program;
use App\Models\Episode;
use App\Models\Season;

class ProgramController extends Controller
{
    public function index(){
        $now = Carbon::now();
        $data = explode('T', $now);
        $datetime = $data[0];
        $data1 = explode(' ',$datetime);
        $date = $data1[0];
        $day = Carbon::createFromFormat('Y-m-d', $date)->format('l');


        $highlight = Program::where('day',$day)->get();
        $count = count($highlight);

        $all = Program::get();
        $program = Program::get();

        return view('page.home',[
            'highlights' => $highlight,
            'programs' => $program,
            'count' => $count,
            'all' => $all
        ]);
    }

    public function detail($slug){
        $program = Program::with(['divisi','episode'])->where('slug',$slug)->first();
        $episode = Episode::with(['program','season'])->where('id_program' , $program->id)->get();
        $season = Season::get();

        return view('page.program',[
            'program' => $program,
            'episodes' => $episode,
            'season' => $season,
        ]);
    }

    public function playvideo($slug, $embed){
        $program = Program::with(['divisi','episode'])->where('slug',$slug)->first();
        $episode = Episode::where('link', $embed)->first();
        $episodes = Episode::with(['program','season'])->where('id_program' , $program->id)->get();
        $season = Season::get();
        // return response()->json($episode);

        return view('page.playvideo',[
            'episode' => $episode,
            'episodes' => $episodes,
            'program' => $program,
            'season' => $season
        ]);
    }
}
