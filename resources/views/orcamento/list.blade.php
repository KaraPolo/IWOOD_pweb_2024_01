@extends('base')
@section('conteudo')
@section('titulo', 'Orcamento -')


<div style="background: linear-gradient(to bottom, #853609, #deac6a); color: white; height: 200px; display: flex; justify-content: center; align-items: center; border-radius: 15px; font-family: Arial, sans-serif;">
    <div>
        <h1 style="margin: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Orçamento</h1>
    </div>
</div>
<div>
    <br>
</div>
<center>


<form action="{{ route('orcamento.search') }}" method="post" style="background-color: #f4f4f4; padding: 20px; border-radius: 15px;">

    <div class="row">
        @csrf
        <div class="col-4">
            <label for="">Fazer um orçamento</label><br>
            <input type="text" name="nome" class="form-control"><br>
        </div>
        <div class="col-4" style="margin-top: 22px;">
            <button type="submit" class="btn btn-primary" style="background-color: #853609;"> <i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
            <a href="{{ url('orcamento/create') }}" class="btn btn-success" style="background-color: #853609;"><i class="fa-solid fa-plus"></i> Novo</a>
        </div>
    </div>
</form>

<hr>

<div class="row">
    @foreach ($dados as $item)
        <div class="col-md-3 mb-3">
            <div class="card" style="height: 270px; background-color: #f4f4f4;">
                <div class="card-body" style="text-align: left;">
                <h5 class="card-title text-center">{{ $item->cliente }}</h5>
                    <p class="card-text">
                        <strong>Descricao:</strong> {{ $item->descricao }}<br>
                        <strong>Valor:</strong> R${{ $item->valor }}<br>
                        <strong>Prazo_entrega:</strong> {{ $item->prazo_entrega }}<br>
                        <strong>Arquivos:</strong>
                        @if($item->arquivos)
                            @foreach(json_decode($item->arquivos) as $arquivo)
                                <a href="{{ asset('storage/'. $arquivo) }}" target="_blank">{{ $arquivo }}</a><br>
                            @endforeach
                        @endif
                    </p>
                </div>
                <div class="card-footer text-center">
                    <div class="btn-group mx-auto" role="group">
                        <a href="{{ route('orcamento.edit', $item->id) }}" class="btn btn-outline-primary" title="Editar" style="background-color: #853609; color: #deac6a;">
                            <i class="fa-solid fa-pen-to-square"></i> Editar
                        </a>
                        <form action="{{ route('orcamento.destroy', $item) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-outline-danger" title="Deletar" style="background-color: #853609; color: #deac6a;"
                                onclick="return confirm('Deseja realmente deletar esse registro?')">
                                <i class="fa-solid fa-trash-can"></i> Deletar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>


@stop