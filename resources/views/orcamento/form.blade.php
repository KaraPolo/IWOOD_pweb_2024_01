@extends('base')
@section('conteudo')
@section('titulo', 'Formulário de Serviço')
@php
    if (!empty($dado->id)) {
        $route = route('orcamento.update', $dado->id);
    } else {
        $route = route('orcamento.store');
    }
@endphp

<h3>Faça seu Orçamento</h3>
<form action="{{ $route }}" method="post">

    @csrf

    @if (!empty($dado->id))
        @method('put')
    @endif

    <input type="hidden" name="id"
        value="@if (!empty($dado->id)) {{ $dado->id }}@else{{ '' }} @endif"><br>

    <label for="">Cliente</label><br>
    <input type="text" name="nome" class="form-control"
        value="@if (!empty($dado->cliente)) {{ $dado->cliente }}@elseif (!empty(old('cliente'))){{ old('cliente') }}@else{{ '' }} @endif"><br>
    
    <label for="">Descrição</label><br>
    <input type="text" name="descricao" class="form-control"
        value="@if (!empty($dado->descricao)) {{ $dado->descricao }}@elseif (!empty(old('descricao'))){{ old('descricao') }}@else{{ '' }} @endif"><br>
    
    <label for="">Prazo para Entrega</label><br>
    <input type="text" name="email" class="form-control"
        value="@if (!empty($dado->prazo_entrega)) {{ $dado->prazo_entrega }}@elseif (!empty(old('prazo_entrega'))){{ old('prazo_entrega') }}@else{{ '' }} @endif"><br>

   <label for="">Valor</label><br>
    <input type="text" name="valor" class="form-control"
        value="@if (!empty($dado->valor)) {{ $dado->valor }}@elseif (!empty(old('valor'))){{ old('valor') }}@else{{ '' }} @endif"><br>

    <label for="">Arquivos</label><br>
    <input type="text" name="arquivos" class="form-control"
        value="@if (!empty($dado->arquivos)) {{ $dado->arquivos }}@elseif (!empty(old('arquivos'))){{ old('arquivos') }}@else{{ '' }} @endif"><br>
        <button type="submit" class="btn btn-success" style="background-color: #853609; color: #deac6a;">Salvar</button>
    <a href="{{ url('servico') }}" class="btn btn-primary" style="background-color: #853609; color: #deac6a;">Voltar</a>
</form>

@stop