<?php

namespace App\Http\Controllers;

use App\Models\Sugestao;
use App\Models\Tiposugestao;
use Illuminate\Http\Request;

class SugestaoController extends Controller
{
    public function index()
    {
        //app/http/Controller
        $dados = Sugestao::all();

        // dd($dados);

        return view("sugestao.list", ["dados" => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tiposugestaos = Tiposugestao::all();

        return view("sugestao.form",['tiposugestaos'=>$tiposugestaos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //app/http/Controller

        $request->validate([
            'nome' => "required|max:100",
            'sugestao' => "required|max:300",
            'tiposugestao_id' => "required",
            'avaliacao' => "nullable"
        ], [
            'nome.required' => "O :attribute é obrigatório",
            'nome.max' => "Só é permitido 100 caracteres",
            'sugestao.required' => "O :attribute é obrigatório",
            'sugestao.max' => "Só é permitido 300 caracteres",
            'tiposugestao_id.required' => "O :attribute é obrigatório",
        ]);

        Sugestao::create(
            [
                'nome' => $request->nome,
                'avaliacao' => $request->avaliacao,
                'sugestao' => $request->sugestao,
                'tiposugestao_id' => $request->tiposugestao_id,
            ]
        );
        return redirect('sugestao');
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
        $dado = Sugestao::findOrFail($id);

        $tiposugestaos = Tiposugestao::all();

        return view("sugestao.form", [
            'dado' => $dado,
            'tiposugestaos'=> $tiposugestaos
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
            'sugestao' => "required|max:300",
            'tiposugestao_id' => "required",
            'avaliacao' => "nullable"
        ], [
            'nome.required' => "O :attribute é obrigatório",
            'nome.max' => "Só é permitido 100 caracteres",
            'sugestao.required' => "O :attribute é obrigatório",
            'sugestao.max' => "Só é permitido 300 caracteres",
            'tiposugestao_id.required' => "O :attribute é obrigatório",
        ]);

        Sugestao::updateOrCreate(
            ['id' => $request->id],
            [
                'nome' => $request->nome,
                'avaliacao' => $request->avaliacao,
                'sugestao' => $request->sugestao,
                'tiposugestao_id' => $request->tiposugestao_id,
            ]
        );

        return redirect('sugestao');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dado = Sugestao::findOrFail($id);
        // dd($dado);
        $dado->delete();

        return redirect('sugestao');
    }

    public function search(Request $request)
    {
        if (!empty($request->nome)) {
            $dados = Sugestao::where(
                "nome",
                "like",
                "%" . $request->nome . "%"
            )->get();
        } else {
            $dados = Sugestao::all();
        }
        // dd($dados);

        return view("sugestao.list", ["dados" => $dados]);
    }
}
