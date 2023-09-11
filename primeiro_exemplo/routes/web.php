<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CidadeController;
use App\Http\Controllers\Admin\ImovelContontroller;
use App\Models\Cidade;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/','/Admin/cidades');

Route::prefix('Admin')->name('admin.')->group(function(){

    Route::resource('cidades',CidadeController::class)->except(['show']); // assim não é necessário ficar nomendo as rotas. pois o laravael vai utilizar o padrão
    Route::resource('imoveis',ImovelContontroller::class);
    //except serve para excluir uma rota criada automaticamente com o --resouce
});
