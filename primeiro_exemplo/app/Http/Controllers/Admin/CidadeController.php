<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Cidade;
use Illuminate\Support\Facades\Redis;

class CidadeController extends Controller
{// Criada apartir do comando: php artisan make:controller Admin\CidadeController

    public function cidades(){
        $subtitulo = 'Lista de Cidades';
        //$cidades= ['Belo Horizonte', 'Recife', 'Florianopolis', 'Manaus'];

        $cidades =  Cidade::all();


        return view('Admin.cidades.index', compact('subtitulo', 'cidades'));
    }

    public function formAdicionar(){

        return view('admin.cidades.form');

    }

    public function adicionar(Request $request){
        //Criar um objeto do modelo (classe) cidade
        //$cidade = new Cidade();
        //$cidade->nome = $request->nome;

        //$cidade->save(); //Salva no banco de dados

        Cidade::create($request->all());

        return redirect()->route('admin.cidades.listar');

    }
}
