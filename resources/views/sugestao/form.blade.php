@extends('base')
@section('conteudo')
@section('titulo', 'Formulário de Sugestão')

@php
    if (!empty($dado->id)) {
        $route = route('sugestao.update', $dado->id);
    } else {
        $route = route('sugestao.store');
    }
@endphp

<h3>Formulário de Sugestão</h3>
<form action="{{ $route }}" method="post">

    @csrf

    @if (!empty($dado->id))
        @method('put')
    @endif

    <input type="hidden" name="id" value="@if (!empty($dado->id)) {{ $dado->id }}@else{{ '' }} @endif"><br>

    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" value="@if (!empty($dado->nome)) {{ $dado->nome }}@elseif (!empty(old('nome'))){{ old('nome') }}@else{{ '' }} @endif">
    </div>

    <div class="mb-3">
        <label for="avaliacao" class="form-label">Avaliação (1 a 10)</label>
        <input type="number" name="avaliacao" id="avaliacao" class="form-control" min="1" max="10" value="@if (!empty($dado->avaliacao)) {{ $dado->avaliacao }}@elseif (!empty(old('avaliacao'))){{ old('avaliacao') }}@else{{ '' }} @endif">
    </div>

    <div class="mb-3">
        <label for="sugestao" class="form-label">Sugestão</label>
        <input type="text" name="sugestao" id="sugestao" class="form-control" value="@if (!empty($dado->sugestao)) {{ $dado->sugestao }}@elseif (!empty(old('sugestao'))){{ old('sugestao') }}@else{{ '' }} @endif">
    </div>

    <div class="mb-3">
        <label for="tiposugestao_id" class="form-label">Tipo de Sugestão</label>
        <select name="tiposugestao_id" id="tiposugestao_id" class="form-select">
            @foreach ($tiposugestaos as $item)
                <option value="{{ $item->id }}">{{ $item->nome }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ url('sugestao') }}" class="btn btn-primary">Voltar</a>
</form>

@stop
