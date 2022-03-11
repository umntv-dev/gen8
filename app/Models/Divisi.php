<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $table = 'divisi';
    protected $fillable = [
        'nama'  
    ];

    public function crews(){
        return $this->hasMany(Crews::class,'id_divisi','id');
    }

    public function heads(){
        return $this->hasMany(Heads::class,'id_divisi','id');
    }

    public function article(){
        return $this->hasMany(Article::class,'id_divisi','id');
    }

    public function program(){
        return $this->hasMany(Program::class,'id_divisi','id');
    }
}
