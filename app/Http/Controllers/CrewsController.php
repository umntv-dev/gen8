<?php

namespace App\Http\Controllers;

use App\Models\Crews;
use App\Models\Divisi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CrewsController extends Controller
{

    public function showCrews(){
        $params = Crews::with(['divisi'])->get();
 
        return view('admin.crews',[
            'crews' => $params
        ]);
     }
 
     public function addCrews(){
         $divisi = Divisi::all();
 
         return view('admin.addcrews',[
             'divisi' => $divisi
         ]);
     }

    public function createCrews(Request $request){
        $validate = Validator::make($request->all(),[
            'nama' => 'required',
            'divisi' => 'required',
            'role' => 'required',
        ]);

        if($validate->fails()){
            return back()->withErrors($validate);
        }

        Crews::create([
            'nama' => $request->nama,
            'id_divisi' => $request->divisi,
            'role' => $request->role,
        ]);

        return back();
    }

    public function editCrews($id){
        $crews = Crews::with('divisi')->where('id',$id)->first();
        $divisi = Divisi::all();

        return view('admin.addcrews',[
            'crews' => $crews,
            'divisi' => $divisi
        ]);
    }

    public function updateCrews(Request $request){
        $id = $request->id;
        $params = Crews::find($id);
        $validate = Validator::make($request->all(),[
            'nama' => 'required',
            'divisi' => 'required',
            'role' => 'required',
        ]);

        if($validate->fails()){
            return back()->withErrors($validate);
        }

            $params->fill([
                'nama' => $request->nama,
                'id_divisi' => $request->divisi,
                'role' => $request->role,
            ]);

        $params->save();

        return redirect('admin/crews');
    }

    public function deleteCrews($id){
        $crews = Crews::find($id);
        if($crews){
            $crews->delete();     
            return back();
        }else{
            return response(['message' => 'data tidak ada!']);
        }
    }
}