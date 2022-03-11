<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heads extends Model
{
    use HasFactory;

    protected $table = 'heads';
    protected $fillable = [
        'nama',
        'id_divisi',
        'image'  
    ];

    public function divisi(){
        return $this->belongsTo(Divisi::class, 'id_divisi','id');
    }
}
