<?php

use App\Http\Controllers\SugestaoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstabelecimentoController;

Route::get('/', function () {
    return view('welcome');
});
/*
//routes/web.php
Route::get('/estabelecimento', [AlunoController::class, "index"]);
//carrega o formulário
Route::get('/estabelecimento/create', [AlunoController::class, "create"]);
//recebe os dados do formulario para ser salvo na função store
Route::post('/estabelecimento', [AlunoController::class, "store"])->name('estabelecimento.store');
//Route::get('/estabelecimento/destroy/{$id}', [AlunoController::class, "destroy"])->name('estabelecimento.destroy');
Route::delete('/estabelecimento/{$estabelecimento}',
 [AlunoController::class, "destroy"])->name('estabelecimento.destroy');*/

Route::resource('estabelecimento', EstabelecimentoController::class);
Route::post('/estabelecimento/search', [EstabelecimentoController::class, "search"])->name('estabelecimento.search');

Route::resource('sugestao', SugestaoController::class);
Route::post('/sugestao/search', [SugestaoController::class, "search"])->name('sugestao.search');
