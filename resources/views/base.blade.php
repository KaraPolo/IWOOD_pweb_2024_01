<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo') IWOOD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-color: #B38A56;
            background-size: cover;
            margin: 0;
            padding: 0;
            height: 100vh;
            /* Definindo a altura da página */
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: #DCCFB1;
        }

        .nav-link {
            color: #853609;
            /* Cor do texto */
            background-color: #DCCFB1;
            /* Cor de fundo */
        }

        .nav-link:hover {
            background-color: #B38A56;
            /* Cor de fundo ao passar o mouse */
            color: #DCCFB1;
            /* Cor do texto ao passar o mouse */
        }

        footer {
            bottom: 0;
            width: 100%;
            background-color: #DCCFB1;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        .content {
            flex: 1;
        }
    </style>
</head>

<body>
    <div class="content">

        <body>
            <nav class="navbar navbar-expand">
                <img src="{{ asset('img/LogoSite.png') }}" alt="Logo" width="140" height="50" class="d-inline-block align-text-top">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url('/') }}">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('estabelecimento') }}">Estabelecimentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('servico') }}">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('orcamento') }}">Orçamento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('sugestao') }}">Sugestões</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="{{ url('blog') }}">Blog</a>
                     </li>
                </ul>
                <!--<ul class="navbar-nav flex-row">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('login') }}">Login</a>
            </li>
        </ul>-->
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60