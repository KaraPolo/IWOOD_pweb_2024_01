@extends('base')
@section('conteudo')
@section('titulo', 'Listagem de Sugestão')

<h3>Listagem de Sugestão</h3>

<form action="{{ route('sugestao.search') }}" method="post">
    <div class="row mb-3">
        @csrf
        <div class="col-md-8">
            <input type="text" name="nome" class="form-control" placeholder="Pesquisar por nome">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
            <a href="{{ url('sugestao/create') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i> Novo</a>
        </div>
    </div>
</form>

<hr>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Avaliação</th>
                                <th>Sugestão</th>
                                <th>Tipo de Sugestão</th>
                                <th>Ação</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dados as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nome }}</td>
                                    <td>{{ $item->avaliacao }}</td>
                                    <td>{{ $item->sugestao }}</td>
                                    <td>{{ $item->tiposugestao->nome ?? '' }}</td>
                                    <td>
                                        <a href="{{ route('sugestao.edit', $item->id) }}" class="btn btn-outline-primary" title="Editar">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('sugestao.destroy', $item) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger" title="Deletar" onclick="return confirm('Deseja realmente deletar esse registro?')">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
