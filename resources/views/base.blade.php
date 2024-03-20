<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo') IWOOD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-color: #e8c597   ;
            background-size: cover;
            margin: 0;
            padding: 0;
            height: 100vh; /* Definindo a altura da página */
            display: flex;
            flex-direction: column;
        }

        .nav-link {
            color: #853609; /* Cor do texto */
            background-color: #deac6a; /* Cor de fundo */
        }

        .nav-link:hover {
            background-color: #853609; /* Cor de fundo ao passar o mouse */
            color: #deac6a; /* Cor do texto ao passar o mouse */
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            width: 100%;
            position: fixed;
            bottom: 0;
        }

        .content {
            flex: 1;
        }
    </style>
</head>

<body>

    <div class="content">
        <nav class="nav nav-pills nav-fill">
            <a class="nav-item nav-link" href="{{ url('http://127.0.0.1:8000') }}">Início</a>
            <a class="nav-item nav-link" href="{{ url('estabelecimento') }}">Estabelecimentos</a>
            <a class="nav-item nav-link" href="{{ url('sugestao') }}">Sugestões</a>
        </nav>
        <div>
            @if ($errors->any())
            <b>Por favor, verifique os erros abaixo:</b>
            <ul>
                @foreach ($errors->all() as $error)
                <li> {{ $error }}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <div class="container mt-4">
            <div class="row">
                @yield('conteudo')
            </div>
        </div>
    </div>
    <div>
    <br>

    <br>
    <footer>
        &copy; 2024 IWOOD. Todos os direitos reservados.
    </footer>
     </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60