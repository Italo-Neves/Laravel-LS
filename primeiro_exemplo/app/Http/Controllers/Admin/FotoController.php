<?php

namespace App\Http\Controllers\Admin;
use App\Models\Foto;
use App\Http\Controllers\Controller;
use App\Models\Imovel;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idImovel)
    {
        $imovel = Imovel::find($idImovel);

        $fotos = Foto::where('imovel_id',$idImovel)->get(); // nesse acaso o operador de igualdade poderia ser omitido, pois ele é o defaut

        return view('admin.imoveis.fotos.index', compact('imovel', 'fotos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idImovel)
    {
        $imovel = Imovel::find($idImovel);

        return view('admin.imoveis.fotos.form', compact('imovel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $idImovel)
    {   //checa se o arquivo da requisição é uma imagem
        if($request->hasFile('foto')){
            //Checar se não houver erro no upload da imagem
            if($request->foto->isValid()){
                //armazena o arquivo no disco e retorna o caminho do arquivo
                $fotoURL = $request->foto->store("imoveis/$idImovel",'public');

                //Armazenando a url da foto no banco de dados
                $foto = new Foto();
                $foto->url =$fotoURL;
                $foto->imovel_id = $idImovel;
                $foto->save();

            }
        }

        $request->session()->flash('sucesso', 'foto incluida com sucesso!');
        return redirect()->route('admin.imoveis.fotos.index', $idImovel);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
