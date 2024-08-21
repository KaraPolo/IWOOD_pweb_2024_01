<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Blog::all();
        return view("blog.list", ["dados" => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => "required|max:100",
            'conteudo' => "required",
            'data_publicacao' => "required"
        ], [
            'titulo.required' => "O título é obrigatório",
            'titulo.max' => "Só é permitido 100 caracteres",
            'conteudo.required' => "O conteúdo é obrigatório",
            'data_publicacao.required' => "A data de publicação é obrigatória"
        ]);

        Blog::create([
            'titulo' => $request->titulo,
            'conteudo' => $request->conteudo,
            'data_publicacao' => $request->data_publicacao
        ]);

        return redirect('blog');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dado = Blog::findOrFail($id);
        return view("blog.show", ['dado' => $dado]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dado = Blog::findOrFail($id);
        return view("blog.form", ['dado' => $dado]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titulo' => "required|max:100",
            'conteudo' => "required",
            'data_publicacao' => "required"
        ], [
            'titulo.required' => "O título é obrigatório",
            'titulo.max' => "Só é permitido 100 caracteres",
            'conteudo.required' => "O conteúdo é obrigatório",
            'data_publicacao.required' => "A data de publicação é obrigatória"
        ]);

        Blog::updateOrCreate(['id' => $id], [
            'titulo' => $request->titulo,
            'conteudo' => $request->conteudo,
            'data_publicacao' => $request->data_publicacao
        ]);

        return redirect('blog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dado = Blog::findOrFail($id);
        $dado->delete();
        return redirect('blog');
    }
    public function lermais()
    {
        $blog = Blog::find();
        return view('lermais', compact('blog'));
    }
    public function search(Request $request)
    {
        if (!empty($request->titulo)) {
            $dados = Blog::where(
                "titulo",
                "like",
                "%" . $request->titulo . "%"
            )->get();
        } else {
            $dados = Blog::all();
        }
        return view("blog.list", ["dados" => $dados]);
    }
}
