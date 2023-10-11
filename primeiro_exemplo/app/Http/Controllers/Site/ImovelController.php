<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cidade;
use App\Models\Imovel;


class ImovelController extends Controller
{
    public function index($idCidade){

        $cidade = Cidade::find($idCidade);

        $imoveis = Imovel::with(['finalidade','fotos'])
            ->where('cidade_id',$idCidade)
            ->paginate(env(3));

        return view('site.cidades.imoveis.index', compact('cidade','imoveis'));
    }
}
