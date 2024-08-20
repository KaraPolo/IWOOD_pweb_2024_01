<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SugestaoController;
use App\Http\Controllers\EstabelecimentoController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrcamentoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('estabelecimento', EstabelecimentoController::class);
Route::post('/estabelecimento/search', [EstabelecimentoController::class, "search"])->name('estabelecimento.search');

Route::get('/estabelecimento/chart', [EstabelecimentoController::class, 'chart'])->name('estabelecimento.chart');

Route::resource('servico', ServicoController::class);
Route::post('/servico/search', [ServicoController::class, "search"])->name('servico.search');

Route::get('/servico/chart', [ServicoController::class, 'chart'])->name('servico.chart');

Route::resource('orcamento', OrcamentoController::class);
Route::post('/orcamento/search', [OrcamentoController::class, "search"])->name('orcamento.search');
Route::get('/orcamento/PDFOrcamento/',[OrcamentoController::class, "PDFOrcamento"])->name('orcamento.PDFOrcamento');

Route::resource('sugestao', SugestaoController::class);
Route::post('/sugestao/search', [SugestaoController::class, "search"])->name('sugestao.search');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__ . '/auth.php';
