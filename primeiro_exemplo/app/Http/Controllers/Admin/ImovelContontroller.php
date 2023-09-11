<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImovelRequest;
use App\Models\Cidade;
use App\Models\Finalidade;
use App\Models\Imovel;
use App\Models\Proximidade;
use App\Models\Tipo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImovelContontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imoveis = Imovel::with(['cidade','endereco'])->orderBy('titulo','asc')->get();
        return view('admin.imoveis.index',compact('imoveis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $cidades = Cidade::all();
       $tipos = Tipo::all();
       $finalidades = Finalidade::all();
       $proximidades = Proximidade::all();
       $action = route('admin.imoveis.store');
       return view('admin.imoveis.form', compact('action', 'cidades', 'tipos', 'finalidades','proximidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImovelRequest $request)
    {
      
        try{

            $dados = $request->validated();

            if($dados){
                $imovel = Imovel::create($dados);
                $imovel->endereco()->create($dados);
            }

            if($request->has('proximidades')) {

                $imovel->proximidades()->sync($request->proximidades);
            }
        }catch(Exception $e){
            return $e;
        }
    

        $request->session()->flash('sucesso',"Imóvel incluído com sucesso!");
        return redirect()->route('admin.imoveis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imovel = Imovel::find($id);
        $action = route('admin.imoveis.update', $imovel->id);
        return view('admin.imoveis.form', compact('imovel','action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ImovelRequest $request, $id)
    {
        $imovel = Imovel::find($id);
        $imovel->update($request->all());

        $request->session()->flash('sucesso', "Imóvel $request->nome alterado com sucesso!");

        return redirect()->route('admin.imoveis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id){
        $imovel = Imovel::find($id);
        try{
            $imovel->endereco->delete();
            $imovel->delete();
        }catch(Exception $e){
            return $e;
        }
        $request->session()->flash('sucesso','Imóvel excluido com sucesso!');
        return redirect()->route('admin.imoveis.index'); 
    }
}
