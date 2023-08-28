<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CidadeRequest;
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
        $action = route('admin.cidades.adicionar');
        return view('admin.cidades.form', compact('action'));

    }

    public function adicionar(CidadeRequest $request){

        Cidade::create($request->all());

        $request->session()->flash('sucesso',"Cidade $request->nome incluída com sucesso!");//gravar dados flash na sessão

        return redirect()->route('admin.cidades.listar');
      
    }
    
    public function deletar($id, Request $request){
        Cidade::destroy($id);
        $request->session()->flash('sucesso',"Cidade $request->nome excluída com suscesso!");
        return redirect()->route('admin.cidades.listar');
    }

    public function formEditar($id){
        $cidade = Cidade::find($id); // cria uma variavel que identifica uma cidade pelo id
        $action = route('admin.cidades.editar', $cidade->id); 

        return view('admin.cidades.form', compact('cidade','action')); //passando as váriaveis para a view
    }

    public function editar(CidadeRequest $request, $id){
        $cidade = Cidade::find($id);
        // metodo convencional
        //$cidade->nome = $request->nome;
        //$cidade->save();
        //enxuto:
        $cidade->update($request->all());

        $request->session()->flash('sucesso',"Cidade $request->nome atualizada com sucesso!");
        return redirect()->route('admin.cidades.listar');
    }
}
