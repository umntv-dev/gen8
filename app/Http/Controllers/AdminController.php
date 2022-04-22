<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Program;

class AdminController extends Controller
{
    public function showProgram(){
       $params = Program::with(['divisi','episode'])->get();

       return view('admin.program',[
           'programs' => $params
       ]);
    }
}
