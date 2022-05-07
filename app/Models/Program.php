<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $table = 'program';
    protected $fillable = [
        'nama',
        'slug',
        'desc_highlight',
        'id_divisi',
        'description',
        'image',
        'day',
        'time'  
    ];

    public function divisi(){
        return $this->belongsTo(Divisi::class, 'id_divisi','id');
    }

    public function episode(){
        return $this->hasMany(Episode::class, 'id_program','id');
    }
}
