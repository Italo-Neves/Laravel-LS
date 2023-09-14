<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'imovel_id'
    ];

    public function imoveis(){

        return $this->belongsTo(Imovel::class);
    
    }
    
}
