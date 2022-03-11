<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $table = 'episode';
    protected $fillable = [
        'id_program',
        'episode',
        'judul',
        'id_season',
        'sipnosis',
        'image',
        'link'  
    ];

    public function program(){
        return $this->belongsTo(Program::class,'id_program','id');
    }

    public function season(){
        return $this->belongsTo(Season::class,'id_season','id');
    }
}
