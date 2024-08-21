@extends('base')
@section('conteudo')
@section('titulo', 'Formulário de Blog')

@php
if (!empty($dado->id)) {
$route = route('blog.update', $dado->id);
} else {
$route = route('blog.store');
}
@endphp

<h3>Formulário de Blog</h3>
<form action="{{ $route }}" method="post">

    @csrf

    @if (!empty($dado->id))
    @method('put')
    @endif

    <input type="hidden" name="id" value="@if (!empty($dado->id)) {{ $dado->id }}@else{{ '' }} @endif"><br>

    <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <input type="text" name="titulo" id="titulo" class="form-control" value="@if (!empty($dado->titulo)) {{ $dado->titulo }}@elseif (!empty(old('titulo'))){{ old('titulo') }}@else{{ '' }} @endif">
    </div>

    <div class="mb-3">
        <label for="conteudo" class="form-label">Conteúdo</label>
        <textarea name="conteudo" id="conteudo" class="form-control">@if (!empty($dado->conteudo)) {{ $dado->conteudo }}@elseif (!empty(old('conteudo'))){{ old('conteudo') }}@else{{ '' }} @endif</textarea>
    </div>

    <div class="mb-3">
        <label for="data_publicacao" class="form-label">Data de Publicação</label>
        <input type="date" name="data_publicacao" id="data_publicacao" class="form-control" value="@if (!empty($dado->data_publicacao)) {{ $dado->data_publicacao }}@elseif (!empty(old('data_publicacao'))){{ old('data_publicacao') }}@else{{ '' }} @endif">
    </div>

    <button type="submit" class="btn btn-success" style="background-color: #853609; color: #deac6a;">Salvar</button>
    <a href="{{ url('blog') }}" class="btn btn-primary" style="background-color: #853609; color: #deac6a;">Voltar</a>
</form>

@stop