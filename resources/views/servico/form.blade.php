@extends('base')
@section('conteudo')
@section('titulo', 'Formulário de Serviço')
@php
    if (!empty($dado->id)) {
        $route = route('servico.update', $dado->id);
    } else {
        $route = route('servico.store');
    }
@endphp

<h3>Formulário de Serviço</h3>
<form action="{{ $route }}" method="post">

    @csrf

    @if (!empty($dado->id))
        @method('put')
    @endif

    <input type="hidden" name="id"
        value="@if (!empty($dado->id)) {{ $dado->id }}@else{{ '' }} @endif"><br>

    <label for="">Nome Completo</label><br>
    <input type="text" name="nome" class="form-control"
        value="@if (!empty($dado->nome)) {{ $dado->nome }}@elseif (!empty(old('nome'))){{ old('nome') }}@else{{ '' }} @endif"><br>

    <label for="">Telefone</label><br>
    <input type="text" name="contato" class="form-control"
        value="@if (!empty($dado->contato)) {{ $dado->contato }}@elseif (!empty(old('contato'))){{ old('contato') }}@else{{ '' }} @endif"><br>

    <label for="">Email</label><br>
    <input type="text" name="email" class="form-control"
        value="@if (!empty($dado->email)) {{ $dado->email }}@elseif (!empty(old('email'))){{ old('email') }}@else{{ '' }} @endif"><br>

    <label for="">Descrição do serviço</label><br>
    <input type="text" name="detalhamento" class="form-control"
        value="@if (!empty($dado->detalhamento)) {{ $dado->detalhamento }}@elseif (!empty(old('detalhamento'))){{ old('detalhamento') }}@else{{ '' }} @endif"><br>

    <label for="">Valor Estimado</label><br>
    <input type="text" name="valor_estimado" class="form-control"
        value="@if (!empty($dado->valor_estimado)) {{ $dado->valor_estimado }}@elseif (!empty(old('valor_estimado'))){{ old('valor_estimado') }}@else{{ '' }} @endif"><br>

    <button type="submit" class="btn btn-success" style="background-color: #853609; color: #deac6a;">Salvar</button>
    <a href="{{ url('servico') }}" class="btn btn-primary" style="background-color: #853609; color: #deac6a;">Voltar</a>
</form>

@stop
