<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório Orçamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="font-size:12px">
    <h3>{{ $titulo }}</h3>

    <table class="table table-striped" style="border-collapse; widht:100%;font-size:11px;">
        <thead>
            <tr style="background-color:rgb(192, 146, 78) ">
                <th style="border: 1px solid #ccc">ID</th>
                <th style="border: 1px solid #ccc">Nome</th>
                <th style="border: 1px solid #ccc">Contato</th>
                <th style="border: 1px solid #ccc">Endereço</th>
                <th style="border: 1px solid #ccc">Descrição do Projeto</th>
                <th style="border: 1px solid #ccc">Tipo de Madeira</th>
                <th style="border: 1px solid #ccc">Quantidade de madeira</th>
                <th style="border: 1px solid #ccc">Observação</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orcamentos as $orcamento)
                <tr>
                    <th scope="row">{{ $orcamento->id }}</th>
                    <td>{{ $orcamento->nome }}</td>
                    <td>{{ $orcamento->contato }}</td>
                    <td>{{ $orcamento->endereco }}</td>
                    <td>{{ $orcamento->descricao_projeto }}</td>
                    <td>{{ $orcamento->tipo_madeira }}</td>
                    <td>{{ $orcamento->quantidade_unidades }}</td>
                    <td>{{ $orcamento->observacao }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">Sem registro</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>

</html>
