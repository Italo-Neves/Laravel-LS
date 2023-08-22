<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CidadeController extends Controller
{// Criada apartir do comando: php artisan make:controller Admin\CidadeController

    public function cidades(){
        $subtitulo = 'Lista de Cidades';
        $cidades= ['Belo Horizonte', 'Recife', 'Florianopolis', 'Manaus'];

        return view('Admin.cidades.index', compact('subtitulo', 'cidades'));
    }

}
