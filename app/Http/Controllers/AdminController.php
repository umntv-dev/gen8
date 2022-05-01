<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use App\Models\Program;
use App\Models\Divisi;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }
    
    public function showProgram(){
       $params = Program::with(['divisi','episode'])->get();

       return view('admin.program',[
           'programs' => $params
       ]);
    }

    public function addProgram(){
        $divisi = Divisi::all();

        return view('admin.addprogram',[
            'divisi' => $divisi
        ]);
    }

    public function createProgram(Request $request){
        $validate = Validator::make($request->all(),[
            'nama' => 'required',
            'desc_highlight' => 'required',
            'description' => 'required',
            'divisi' => 'required',
            'day' => 'required',
            'time' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png|max:2048'
        ]);

        if($validate->fails()){
            return back()->withErrors($validate);
        }

        if($request->hasFile('image')){
            $description_path = 'public/Images/Program';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $image->storeAs($description_path,$image_name);
        }

        Program::create([
            'nama' => $request->nama,
            'desc_highlight' => $request->desc_highlight,
            'description' => $request->description,
            'id_divisi' => $request->divisi,
            'day' => $request->day,
            'time' => $request->time,
            'image' => $image_name,
        ]);

        return back();
    }

    public function editProgram($id){
        $program = Program::with(['divisi'])->where('id',$id)->first(); 
        $divisi = Divisi::all();

        return view('admin.addprogram',[
            'program' => $program,
            'divisi' => $divisi
        ]);
    }

    public function updateProgram(Request $request){
        $id = $request->id;
        $params = Program::find($id);
        $validate = Validator::make($request->all(),[
            'nama' => 'required',
            'desc_highlight' => 'required',
            'description' => 'required',
            'divisi' => 'required',
            'day' => 'required',
            'time' => 'required',
        ]);

        if($validate->fails()){
            return back()->withErrors($validate);
        }

        if($request->hasFile('image')){
            $description_path = 'public/Images/Program';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $image->storeAs($description_path,$image_name);
        }

        if($request->hasFile('image')){
            $description_path = 'public/Images/Program';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $image->storeAs($description_path,$image_name);

            $params->fill([
                'nama' => $request->nama,
                'desc_highlight' => $request->desc_highlight,
                'description' => $request->description,
                'id_divisi' => $request->divisi,
                'day' => $request->day,
                'time' => $request->time,
                'image' => $image_name,
            ]);
        }else{
            $params->fill([
                'nama' => $request->nama,
                'desc_highlight' => $request->desc_highlight,
                'description' => $request->description,
                'id_divisi' => $request->divisi,
                'day' => $request->day,
                'time' => $request->time,
            ]);
        }

        $params->save();

        return redirect('admin/program');
    }

    public function deleteProgram($id){
        $program = Program::find($id);
        if($program){
            $program->delete();     
            return back();
        }else{
            return response(['message' => 'data tidak ada!']);
        }
    }
}
