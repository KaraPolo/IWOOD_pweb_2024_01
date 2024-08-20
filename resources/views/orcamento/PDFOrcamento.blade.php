<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <p>gerar pdf</p>
    <h3>{{ $titulo }}</h3>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Contato</th>
                <th scope="col">Endereço</th>
                <th scope="col">Descrição do Projeto</th>
                <th scope="col">Tipo de Madeira</th>
                <th scope="col">Quantidade de madeira</th>
                <th scope="col">Observação</th>
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
