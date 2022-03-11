<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crews extends Model
{
    use HasFactory;

    protected $table = 'crews';
    protected $fillable = [
        'nama',
        'id_divisi',
        'role'  
    ];

    public function divisi(){
        return $this->belongsTo(Divisi::class, 'id_divisi','id');
    }
}
