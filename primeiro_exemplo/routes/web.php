<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CidadeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::redirect('/','/Admin/cidades');

Route::prefix('Admin')->group(function(){

    Route::get('cidades',[CidadeController::class, 'cidades']);
    Route::get('cidades/adicionar',[CidadeController::class, 'formAdicionar']);
    
});
