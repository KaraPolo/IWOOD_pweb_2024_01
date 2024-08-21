<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório Orçamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Adiciona cor de fundo à cabeçalho da tabela */
        thead tr {
            background-color: rgb(192, 146, 78);
        }

        /* Adiciona cor de fundo às linhas pares da tabela */
        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Adiciona cor de fundo às linhas ímpares da tabela */
        tbody tr:nth-child(odd) {
            background-color: #fff;
        }

        /* Adiciona borda inferior às células da tabela */
        th, td {
            border-bottom: 1px solid #ccc;
        }
    </style>
</head>

<body style="font-size:12px">
    <h3>{{ $titulo }}</h3>

    <table class="table table-striped" style="border-collapse: collapse;widht:100%;font-size:11px;">
        <thead>
            <tr>
                <th style="border: 1px solid #ccc">ID</th>
                <th style="border: 1px solid #ccc">Nome</th>
                <th style="border: 1px solid #ccc">Telefone</th>
                <th style="border: 1px solid #ccc">Descrição</th>
                <th style="border: 1px solid #ccc">Imagem</th>
                <th style="border: 1px solid #ccc">Categoria</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($estabelecimentos as $estabelecimento)
                <tr>
                    <th scope="row">{{ $estabelecimento->id }}</th>
                    <td>{{ $estabelecimento->nome }}</td>
                    <td>{{ $estabelecimento->telefone }}</td>
                    <td>{{ $estabelecimento->descricao }}</td>
                    <td>{{ $estabelecimento->imagem }}</td>
                    <td>{{ $estabelecimento->categoria->nome }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" style="background-color: #fff;">Sem registro</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>

</html>