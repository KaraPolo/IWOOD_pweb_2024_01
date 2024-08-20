@extends('base')
@section('conteudo')
@section('titulo', 'Listagem de Sugestão')

<div style="background: linear-gradient(to bottom, #853609, #deac6a); color: white; height: 200px; display: flex; justify-content: center; align-items: center; border-radius: 15px; font-family: Arial, sans-serif;">
    <div>
        <h1 style="margin: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Deixe sua sugestão, crítica ou comentário:</h1>
    </div>
</div>
<div>
<br>
<br>
</div>
<form action="{{ route('sugestao.search') }}" method="post">
    <div class="row mb-3">
        @csrf
        <div class="col-md-8">
            <input type="text" name="nome" class="form-control" placeholder="Pesquisar por nome">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary rounded-pill" style="background-color: #853609; color: #ffffff; border-color: #853609; padding: 10px 20px;">
                <i class="fa-solid fa-magnifying-glass"></i> Buscar
            </button>
            <a href="{{ url('sugestao/create') }}" class="btn btn-success rounded-pill" style="background-color: #853609; color: #ffffff; border-color: #853609; padding: 10px 20px; margin-left: 10px;">
                <i class="fa-solid fa-plus"></i> Novo
            </a>
        </div>
    </div>
</form>

<hr>

<div class="row">
    @foreach ($dados as $item)
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->nome }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Tipo: {{ $item->tiposugestao->nome ?? '' }}</h6>
                    <p class="card-text">
                        <strong>Avaliação:</strong> {{ $item->avaliacao }}
                    </p>
                    <p class="card-text">{{ $item->sugestao }}</p>
                    <div class="btn-group" role="group" aria-label="Ações">
                        <a href="{{ route('sugestao.edit', $item->id) }}" class="btn btn-outline-primary rounded-pill" style="background-color: #f4f4f4; color: #853609; border-color: #853609; padding: 10px 20px;" title="Editar">
                            <i class="fa-solid fa-pen-to-square"></i> Editar
                        </a>
                        <form action="{{ route('sugestao.destroy', $item) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-outline-danger rounded-pill" style="background-color: #f4f4f4; color: #853609; border-color: #853609; padding: 10px 20px; margin-left: 10px;" title="Deletar" onclick="return confirm('Deseja realmente deletar esse registro?')">
                                <i class="fa-solid fa-trash-can"></i> Excluir
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@stop