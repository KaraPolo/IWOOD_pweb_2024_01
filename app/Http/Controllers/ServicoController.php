<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index()
    {
        $dados = Servico::all();
        return view("servico.list", ["dados" => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("servico.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //app/http/Controller

        $request->validate([
            'nome' => "required|max:100",
            'contato' => "nullable",
            'email' => "required|max:200",
            'valor_estimado' => "nullable",
            'detalhamento' => "required|max:300",
            
            
        ], [
            'nome.required' => "O :attribute é obrigatório",
            'nome.max' => "Só é permitido 100 caracteres",
            'email.max' => "Só é permitido 200 caracteres",
            'detalhamento.required' => "O :attribute é obrigatório",
            'detalhamento.max' => "Só é permitido 300 caracteres",
        ]);

        Servico::create(
            [
                'nome' => $request->nome,
                'contato' => $request->contato,
                'email' => $request->email,
                'detalhamento' => $request->detalhamento,
                'valor_estimado'=> $request->valor_estimado,
            ]
        );
        return redirect('servico');
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
        $dado = Servico::findOrFail($id);

        return view("servico.form", [
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
            'nome' => "required|max:100",
            'contato' => "nullable",
            'email' => "required|max:200",
            'valor_estimado' => "nullable",
            'detalhamento' => "required|max:300",
            
        ], [
            'nome.required' => "O :attribute é obrigatório",
            'nome.max' => "Só é permitido 100 caracteres",
            'email.max' => "Só é permitido 200 caracteres",
            'detalhamento.required' => "O :attribute é obrigatório",
            'detalhamento.max' => "Só é permitido 300 caracteres",
        ]);

        Servico::updateOrCreate(
            ['id' => $request->id],
            [
                'nome' => $request->nome,
                'contato' => $request->contato,
                'email' => $request->email,
                'detalhamento' => $request->detalhamento,
                'valor_estimado'=> $request->valor_estimado,
            ]
        );

        return redirect('servico');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dado = Servico::findOrFail($id);
        // dd($dado);
        $dado->delete();

        return redirect('servico');
    }

    public function search(Request $request)
    {
        if (!empty($request->nome)) {
            $dados = Servico::where(
                "nome",
                "like",
                "%" . $request->nome . "%"
            )->get();
        } else {
            $dados = Servico::all();
        }
        // dd($dados);

        return view("servico.list", ["dados" => $dados]);
    }
}
