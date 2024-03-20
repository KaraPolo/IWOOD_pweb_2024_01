@extends('base')
@section('conteudo')
@section('titulo', 'Formulário de Marceneiro')
@php
    if (!empty($dado->id)) {
        $route = route('estabelecimento.update', $dado->id);
    } else {
        $route = route('estabelecimento.store');
    }
@endphp

<h3>Formulário de Marceneiro</h3>
<form action="{{ $route }}" method="post">

    @csrf

    @if (!empty($dado->id))
        @method('put')
    @endif

    <input type="hidden" name="id"
        value="@if (!empty($dado->id)) {{ $dado->id }}@else{{ '' }} @endif"><br>

    <label for="">Nome do Estabelecimento</label><br>
    <input type="text" name="nome" class="form-control"
        value="@if (!empty($dado->nome)) {{ $dado->nome }}@elseif (!empty(old('nome'))){{ old('nome') }}@else{{ '' }} @endif"><br>

    <label for="">Telefone</label><br>
    <input type="text" name="telefone" class="form-control"
        value="@if (!empty($dado->telefone)) {{ $dado->telefone }}@elseif (!empty(old('telefone'))){{ old('telefone') }}@else{{ '' }} @endif"><br>

    <label for="">Descrição</label><br>
    <input type="text" name="descricao" class="form-control"
        value="@if (!empty($dado->descricao)) {{ $dado->descricao }}@elseif (!empty(old('descricao'))){{ old('descricao') }}@else{{ '' }} @endif"><br>

    <label for="">Imagem (URL)</label><br> <!-- Alteração feita aqui -->
    <input type="text" name="imagem" class="form-control"
        value="@if (!empty($dado->imagem)) {{ $dado->imagem}}@elseif (!empty(old('imagem'))){{ old('imagem') }}@else{{ '' }} @endif"><br>


    <label for="">Categorias</label><br>
    <select name="categoria_id" class="form-select">
        @foreach ($categorias as $item)
            <option value="{{ $item->id }}">{{ $item->nome }}</option>
        @endforeach
    </select><br>

    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ url('estabelecimento') }}" class="btn btn-primary">Voltar</a>
</form>

@stop