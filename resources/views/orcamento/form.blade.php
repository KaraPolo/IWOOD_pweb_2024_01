@extends('base')
@section('conteudo')
@section('titulo', 'Formulário de Orcamento')

@php
    if (!empty($dado->id)) {
        $route = route('orcamento.update', $dado->id);
    } else {
        $route = route('orcamento.store');
    }
@endphp


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="margin-top: 50px; margin-bottom: 50px;">
                <div class="card-body" style="padding: 30px;">
                    <h3 style="text-align: center;">Faça seu Orçamento</h3>

                    <form action="{{ $route }}" method="post">
                        @csrf
                        @if (!empty($dado->id))
                            @method('put')
                        @endif
                        <input type="hidden" name="id" value="@if (!empty($dado->id)) {{ $dado->id }}@else{{ '' }} @endif">

                        <h4>Dados do Cliente</h4>
                        <div class="form-group" style="margin-bottom: 20px;">
                            <label for="">Nome</label>
                            <input type="text" name="nome" class="form-control" value="@if (!empty($dado->nome)) {{ $dado->nome }}@elseif (!empty(old('nome'))){{ old('nome') }}@else{{ '' }} @endif">
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                            <label for="">Contato</label>
                            <input type="text" name="contato" class="form-control" value="@if (!empty($dado->contato)) {{ $dado->contato }}@elseif (!empty(old('contato'))){{ old('contato') }}@else{{ '' }} @endif">
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                            <label for="">Endereço</label>
                            <input type="text" name="endereco" class="form-control" value="@if (!empty($dado->endereco)) {{ $dado->endereco }}@elseif (!empty(old('endereco'))){{ old('endereco') }}@else{{ '' }} @endif">
                        </div>

                        <h4>Dados do Projeto</h4>
                        <div class="form-group" style="margin-bottom: 20px;">
                            <label for="">Descrição do projeto</label>
                            <input type="text" name="descricao_projeto" class="form-control" value="@if (!empty($dado->descricao_projeto)) {{ $dado->descricao_projeto }}@elseif (!empty(old('descricao_projeto'))){{ old('descricao_projeto') }}@else{{ '' }} @endif">
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                            <label for="">Tipo de madeira</label>
                            <input type="text" name="tipo_madeira" class="form-control" value="@if (!empty($dado->tipo_madeira)) {{ $dado->tipo_madeira }}@elseif (!empty(old('tipo_madeira'))){{ old('tipo_madeira') }}@else{{ '' }} @endif">
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                            <label for="">Quantidade de unidades</label>
                            <input type="number" name="quantidade_unidades" class="form-control" value="@if (!empty($dado->quantidade_unidades)) {{ $dado->quantidade_unidades }}@elseif (!empty(old('quantidade_unidades'))){{ old('quantidade_unidades') }}@else{{ '' }} @endif">
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                            <label for="">Observação</label>
                            <textarea name="observacao" class="form-control" rows="5">@if (!empty($dado->observacao)) {{ $dado->observacao }} @elseif (!empty(old('observacao'))){{ old('observacao') }} @else {{ '' }} @endif </textarea>
                        </div>

                        <div class="form-group" style="margin-bottom: 20px;">
                            <label for="">Imagem do Projeto</label>
                            <input type="file" name="imagem_projeto" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success" style="background-color: #853609; color: #deac6a;">Salvar</button>
                            <a href="{{ url('orcamento') }}" class="btn btn-primary" style="background-color: #853609; color: #deac6a;">Voltar</a>
                        <button type="button" class="btn btn-primary" style="background-color: #853609; color: #deac6a;" onclick="downloadPdf()">Download em PDF</button>
                    </form>      
                </div>
            </div>
        </div>
    </div>
</div>

@stop