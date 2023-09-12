<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Imovel extends Model
{
    use HasFactory;
    
    protected $table = "imoveis";

    protected $fillable = [
        'titulo',
        'terreno',
        'salas',
        'banheiros',
        'dormitorios',
        'garagens',
        'descricao',
        'preco',
        'cidade_id',
        'tipo_id',
        'finalidade_id',
    ];

    public function endereco(){

        return $this->hasOne(Endereco::class);

    }


    public function cidade(){

        return $this->belongsTo(Cidade::class);
    
    }

    public function finalidade(){

        return $this->belongsTo(Finalidade::class);
    
    }

    public function tipo(){

        return $this->belongsTo(Tipo::class);
    
    }

    public function proximidades(){

        return $this->belongsToMany(Proximidade::class)->withTimestamps();

    }
}
// Como a chafe estrangeira de imoveis fica em endereço logo imoveis é mais importante na relação e logo utilizamos "hasOne"
// O laravel espera que na tabela associada exista uma chave estrangeira em snake_case

//Nome da tabela intermediária
//Pega o nome dos dois modelos em snake_case singular em ordem alfabetica
//imovel_proximidade