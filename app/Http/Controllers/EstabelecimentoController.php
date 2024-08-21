<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Estabelecimento;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Charts\EstabelecimentoChart;
use Barryvdh\DomPDF\Facade\Pdf;

class EstabelecimentoController extends Controller
{
    public function index()
    {
        //app/http/Controller
        $dados = Estabelecimento::all();

        // dd($dados);

        return view("estabelecimento.list", ["dados" => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();

        return view("estabelecimento.form",['categorias'=>$categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //app/http/Controller

        $request->validate([
            'nome' => "required|max:100",
            'descricao' => "required|max:300",
            'imagem' => "required|max:300",
            'categoria_id' => "required",
            'telefone' => "nullable"
        ], [
            'nome.required' => "O :attribute é obrigatório",
            'nome.max' => "Só é permitido 100 caracteres",
            'descricao.required' => "O :attribute é obrigatório",
            'descricao.max' => "Só é permitido 300 caracteres",
            'imagem.required' => "O :attribute é obrigatório",
            'imagem.max' => "Só é permitido 300 caracteres",
            'categoria_id.required' => "O :attribute é obrigatório",
        ]);

        Estabelecimento::create(
            [
                'nome' => $request->nome,
                'telefone' => $request->telefone,
                'descricao' => $request->descricao,
                'imagem' => $request->imagem,
                'categoria_id' => $request->categoria_id,
            ]
        );
        return redirect('estabelecimento');
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
        $dado = Estabelecimento::findOrFail($id);

        $categorias = Categoria::all();

        return view("estabelecimento.form", [
            'dado' => $dado,
            'categorias'=> $categorias
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
            'descricao' => "required|max:300",
            'imagem' => "required|max:300",
            'categoria_id' => "required",
            'telefone' => "nullable"
        ], [
            'nome.required' => "O :attribute é obrigatório",
            'nome.max' => "Só é permitido 100 caracteres",
            'descricao.required' => "O :attribute é obrigatório",
            'descricao.max' => "Só é permitido 300 caracteres",
            'imagem.required' => "O :attribute é obrigatório",
            'imagem.max' => "Só é permitido 300 caracteres",
            'categoria_id.required' => "O :attribute é obrigatório",
        ]);

        Estabelecimento::updateOrCreate(
            ['id' => $request->id],
            [
                'nome' => $request->nome,
                'telefone' => $request->telefone,
                'descricao' => $request->descricao,
                'imagem' => $request->imagem,
                'categoria_id' => $request->categoria_id,
            ]
        );

        return redirect('estabelecimento');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dado = Estabelecimento::findOrFail($id);
        // dd($dado);
        $dado->delete();

        return redirect('estabelecimento');
    }

    public function chart(EstabelecimentoChart $estabelecimentochart)
    {
        return view("estabelecimento.chart", ["estabelecimentochart" => $estabelecimentochart->build()]);
    }

    public function PDFEstabelecimento()
    {
        $estabelecimentos = Estabelecimento::all();
        $titulo = 'Relatório de Estabelecimentos';
    
        $data = [
            'titulo' => $titulo,
            'estabelecimentos' => $estabelecimentos,
        ];
    
        $pdf = PDF::loadView('estabelecimento.PDFEstabelecimento', $data);
        return $pdf->download('estabelecimento.pdf');
    }

    public function search(Request $request)
    {
        if (!empty($request->nome)) {
            $dados = Estabelecimento::where(
                "nome",
                "like",
                "%" . $request->nome . "%"
            )->get();
        } else {
            $dados = Estabelecimento::all();
        }
        // dd($dados);

        return view("estabelecimento.list", ["dados" => $dados]);
    }

}
