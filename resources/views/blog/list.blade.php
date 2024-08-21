@extends('base')
@section('conteudo')
@section('titulo', 'Listagem de Blogs')

<div style="background: linear-gradient(to bottom, #853609, #deac6a); color: white; height: 200px; display: flex; justify-content: center; align-items: center; border-radius: 15px; font-family: Arial, sans-serif;">
    <div>
        <h1 style="margin: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Nossos Blogs:</h1>
    </div>
</div>
<div>
    <br>
    <br>
</div>
<form action="{{ route('blog.search') }}" method="post">
    <div class="row mb-3">
        @csrf
        <div class="col-md-8">
            <input type="text" name="titulo" class="form-control" placeholder="Pesquisar por título">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary rounded-pill" style="background-color: #853609; color: #ffffff; border-color: #853609; padding: 10px 20px;">
                <i class="fa-solid fa-magnifying-glass"></i> Buscar
            </button>
            <a href="{{ url('blog/create') }}" class="btn btn-success rounded-pill" style="background-color: #853609; color: #ffffff; border-color: #853609; padding: 10px 20px; margin-left: 10px;">
                <i class="fa-solid fa-plus"></i> Novo
            </a>
        </div>
    </div>
</form>

<hr>

<div class="row">
    @foreach ($dados as $item)
    <div class="col-md-6 mb-3">
        <div class="card horizontal">
            <div class="card-body">
                <h5 class="card-title">{{ $item->titulo }}</h5>
                <p class="card-text">{{ Str::limit($item->conteudo, 100) }}</p>
                <p class="card-text">Data de Publicação: {{ $item->data_publicacao }}</p> <br>
                <div class="btn-group" role="group" aria-label="Ações">
                    <a href="{{ route('blog.lermais', $item->id) }}" class="btn btn-outline-primary rounded-pill" style="background-color: #f4f4f4; color: #853609; border-color: #853609; padding: 10px 20px;" title="Ler mais">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a href="{{ route('blog.edit', $item->id) }}" class="btn btn-outline-primary rounded-pill" style="background-color: #f4f4f4; color: #853609; border-color: #853609; padding: 10px 20px;" title="Editar">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <form action="{{ route('blog.destroy', $item) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-outline-danger rounded-pill" style="background-color: #f4f4f4; color: #853609; border-color: #853609; padding: 10px 20px; margin-left: 10px;" title="Deletar" onclick="return confirm('Deseja realmente deletar esse registro?')">
                            <i class="fa-solid fa-trash-can"></i> 
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@stop