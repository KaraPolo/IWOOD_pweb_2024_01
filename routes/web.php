<?php

use App\Http\Controllers\SugestaoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstabelecimentoController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('estabelecimento', EstabelecimentoController::class);
Route::post('/estabelecimento/search', [EstabelecimentoController::class, "search"])->name('estabelecimento.search');

Route::resource('servico', ServicoController::class);
Route::post('/servico/search', [ServicoController::class, "search"])->name('servico.search');

Route::resource('servico', ServicoController::class);
Route::post('/servico/search', [ServicoController::class, "search"])->name('servico.search');

Route::resource('sugestao', SugestaoController::class);
Route::post('/sugestao/search', [SugestaoController::class, "search"])->name('sugestao.search');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/login', function () {
    return redirect()->route('welcome');
})->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
