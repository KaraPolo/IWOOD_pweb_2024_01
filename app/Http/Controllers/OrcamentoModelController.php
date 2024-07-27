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
        //app/http/Controller

        $request->validate([
            'cliente' => "required|max:100",
            'descricao' => "required|max:300",
            'valor' => "nullable",
            'prazo_entrega' => "nullable",
            'arquivos' => "required|max:200",           
            
        ], [
            'cliente.required' => "O :attribute é obrigatório",
            'cliente.max' => "Só é permitido 100 caracteres",
            'materiais.max' => "Só é permitido 200 caracteres",
            'descricao.required' => "O :attribute é obrigatório",
            'descricao.max' => "Só é permitido 300 caracteres",
        ]);

        Orcamento::create(
            [
                'cliente' => "required|max:100",
                'descricao' => "required|max:300",
                'valor' => "nullable",
                'prazo_entrega' => "nullable",
                'arquivos' => "required|max:200", 
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
        //app/http/Controller

        $request->validate([
            'cliente' => "required|max:100",
            'descricao' => "required|max:300",
            'valor' => "nullable",
            'prazo_entrega' => "nullable",
            'arquivos' => "required|max:200", 
            
        ], [
            'cliente.required' => "O :attribute é obrigatório",
            'cliente.max' => "Só é permitido 100 caracteres",
            'materiais.max' => "Só é permitido 200 caracteres",
            'descricao.required' => "O :attribute é obrigatório",
            'descricao.max' => "Só é permitido 300 caracteres",
        ]);

        Orcamento::updateOrCreate(
            ['id' => $request->id],
            [
                'cliente' => $request->nome,
                'descricao' => $request->descricao,
                'valor' => $request->valor,
                'prazo_entrega' => $request->detalhamento,
                'valor_estimado'=> $request->valor_estimado,
                'arquivos'=> $request->arquivos,
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
        // dd($dado);
        $dado->delete();

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
        // dd($dados);

        return view("orcamento.list", ["dados" => $dados]);
    }
}
