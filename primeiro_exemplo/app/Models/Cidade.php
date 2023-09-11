<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];

    public function imoveis(){

        return $this->hasMany(Imovel::class);

    }
}


// Chave estrangeira da tabela associada (modelo) deve ser o nome modelo (snake_case) com o sufixo _id