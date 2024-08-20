<?php

namespace App\Http\Controllers;

use App\Models\Orcamento;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class OrcamentoController extends Controller
{
    public function index()
    {
        $dados = Orcamento::all();
        return view("orcamento.list", ["dados" => $dados]);
    }

    public function create()
    {
        return view("orcamento.form");
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => "required|max:100",
            'contato' => "required|max:100",
            'endereco' => "required|max:200",
            'descricao_projeto' => "required|max:300",
            'tipo_madeira' => "required|max:100",
            'quantidade_unidades' => "required|max:100",
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

        Orcamento::firstOrCreate([
            'nome' => $request->nome,
            'contato' => $request->contato,
            'endereco' => $request->endereco,
            'descricao_projeto' => $request->descricao_projeto,
            'tipo_madeira' => $request->tipo_madeira,
            'quantidade_unidades' => $request->quantidade_unidades,
            'observacao' => $request->observacao,
        ]);

        return redirect('orcamento');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $dado = Orcamento::findOrFail($id);

        return view("orcamento.form", [
            'dado' => $dado,
        ]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => "required|max:100",
            'contato' => "required|max:100",
            'endereco' => "required|max:200",
            'descricao_projeto' => "required|max:300",
            'tipo_madeira' => "required|max:100",
            'quantidade_unidades' => "required|max:100",
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

        $orcamento = Orcamento::findOrFail($id);
        $orcamento->update([
            'nome' => $request->nome,
            'contato' => $request->contato,
            'endereco' => $request->endereco,
            'descricao_projeto' => $request->descricao_projeto,
            'tipo_madeira' => $request->tipo_madeira,
            'quantidade_unidades' => $request->quantidade_unidades,
            'observacao' => $request->observacao,
        ]);

        return redirect('orcamento');
    }

    public function destroy(string $id)
    {
        $orcamento = Orcamento::findOrFail($id);
        $orcamento->delete();

        return redirect('orcamento');
    }

    public function search(Request $request)
    {
        if (!empty($request->nome)) {
            $dados = Orcamento::where(
                "nome",
                "like",
                "%" . $request->nome . "%"
            )->get();
        } else {
            $dados = Orcamento::all();
        }

        return view("orcamento.list", ["dados" => $dados]);
    }

       
    public function PDFOrcamento()
    {
        $orcamentos = Orcamento::all();
        $titulo = 'Relatório de Orçamentos';
    
        $data = [
            'titulo' => $titulo,
            'orcamentos' => $orcamentos,
        ];
    
        $pdf = PDF::loadView('orcamento.PDFOrcamento', $data);
        return $pdf->download('relatorio_orcamento.pdf');
    }
}
