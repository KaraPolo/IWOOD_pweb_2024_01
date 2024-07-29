<?php

namespace App\Http\Controllers;

use App\Models\Orcamento;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrcamentoController extends Controller
{
    public function index()
    {
        $dados = Orcamento::all();
        return view("orcamento.list", ["dados" => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("orcamento.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => "required|max:100",
            'contato' => "required|max:100",
            'endereco' => "required|max:200",
            'descricao_projeto' => "required|max:300",
            'tipo_madeira' => "required|max:100",
            'dimensoes_projeto' => "required|max:100",
            'quantidade_unidades' => "required|integer",
            'observacao' => "nullable|max:500",
        ], [
            'nome.required' => "O :attribute é obrigatório",
            'nome.max' => "Só é permitido 100 caracteres",
            'contato.required' => "O :attribute é obrigatório",
            'contato.max' => "Só é permitido 100 caracteres",
            'endereco.required' => "O :attribute é obrigatório",
            'endereco.max' => "Só é permitido 200 caracteres",
            'descricao_projeto.required' => "O :attribute é obrigatório",
            'descricao_projeto.max' => "Só é permitido 300 caracteres",
        ]);

        Orcamento::create(
            [
                'nome' => $request->nome,
                'contato' => $request->contato,
                'endereco' => $request->endereco,
                'descricao_projeto' => $request->descricao_projeto,
                'tipo_madeira' => $request->tipo_madeira,
                'dimensoes_projeto' => $request->dimensoes_projeto,
                'quantidade_unidades' => $request->quantidade_unidades,
                'observacao' => $request->observacao,
            ]
        );
        return redirect('Orcamento');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dado = Orcamento::findOrFail($id);

        return view("orcamento.form", [
            'dado' => $dado,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => "required|max:100",
            'contato' => "required|max:100",
            'endereco' => "required|max:200",
            'descricao_projeto' => "required|max:300",
            'tipo_madeira' => "required|max:100",
            'dimensoes_projeto' => "required|max:100",
            'quantidade_unidades' => "required|integer",
            'observacao' => "nullable|max:500",
        ], [
            'nome.required' => "O :attribute é obrigatório",
            'nome.max' => "Só é permitido 100 caracteres",
            'contato.required' => "O :attribute é obrigatório",
            'contato.max' => "Só é permitido 100 caracteres",
            'endereco.required' => "O :attribute é obrigatório",
            'endereco.max' => "Só é permitido 200 caracteres",
            'descricao_projeto.required' => "O :attribute é obrigatório",
            'descricao_projeto.max' => "Só é permitido 300 caracteres",
        ]);

        Orcamento::updateOrCreate(
            ['id' => $request ->id],
            [
                'nome' => $request->nome,
                'contato' => $request->contato,
                'endereco' => $request->endereco,
                'descricao_projeto' => $request->descricao_projeto,
                'tipo_madeira' => $request->tipo_madeira,
                'dimensoes_projeto' => $request->dimensoes_projeto,
                'quantidade_unidades' => $request->quantidade_unidades,
                'observacao' => $request->observacao,
            ]
        );

        return redirect('Orcamento');
    }

    /**
 * Remove the specified resource from storage.
 */
public function destroy($id)
{
    $dado = Orcamento::findOrFail($id);
    $dado->delete();

    return redirect('orcamento');
}

/**
 * Search for resources.
 */
public function search(Request $request)
{
    if (!empty($request->nome)) {
        $dados = Orcamento::where(
            "nome",
            "like",
            "%". $request->nome. "%"
        )->get();
    } else {
        $dados = Orcamento::all();
    }

    return view("orcamento.list", ["dados" => $dados]);
}
}