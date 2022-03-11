<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    protected $table = 'article';
    protected $fillable = [
        'judul',
        'id_crews',
        'id_divisi',
        'waktu',
        'image',
        'description'  
    ];

    public function divisi(){
        return $this->belongsTo(Divisi::class, 'id_divisi','id');
    }

    public function crews(){
        return $this->belongsTo(Crews::class, 'id_crews','id');
    }
}
