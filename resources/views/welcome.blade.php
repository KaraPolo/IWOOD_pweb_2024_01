<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IWOOD</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-image {
            height: 400px;
            /* Defina a altura desejada */
            object-fit: cover;
        }

        /* Estilos do footer */
        footer {
            bottom: 0;
            width: 100%;
            background-color: #DCCFB1;
            color: white;
            text-align: center;
            padding: 10px 0;
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
    </style>
</head>

<body>
    <nav class="navbar navbar-expand">
        <img src="{{ asset('img/LogoSite.png') }}" alt="Logo" width="135" height="50" class="d-inline-block align-text-top">
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
                <a class="nav-link" href="{{ url('sugestao') }}">Sugestões</a>
            </li>
        </ul>
        <!--<ul class="navbar-nav flex-row">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('login') }}">Login</a>
            </li>
        </ul>-->
    </nav>

    <header class="text-light p-4" style="background-color: #B38A56;">
        <h1 class="text-center">Bem-vindo ao Site Iwood</h1>
    </header>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/bem-vindo.png') }}" class="d-block w-100 carousel-image" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://emobile.com.br/site/wp-content/uploads/2022/03/Dia-do-Marceneiro-Marcenaria-formao.jpg" class="d-block w-100 carousel-image" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Conheça e Explore nosso Site:</h5>
                    <p>Aqui, talento encontra demanda, e juntos criamos obras de arte.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.quadrilatero.ind.br/img/gco-images/87-pt-br.jpg" class="d-block w-100 carousel-image" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Conheça e Explore nosso Site:</h5>
                    <p>Do projeto à realização, conectamos talento com oportunidade.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2018/04/22/04/28/wood-3340125_1280.jpg" class="d-block w-100 carousel-image" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Conheça e Explore nosso Site:</h5>
                    <p>Juntos, construímos mais do que apenas casas - construímos lares.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <p class="lead" style="text-align: justify;">
                    Bem-vindo ao Iwood, sua plataforma dedicada a conectar prestadores de serviço de marcenaria, carpintaria e afins aos clientes em busca de trabalhos artesanais de alta qualidade. Somos a ponte entre artesãos talentosos e clientes exigentes, facilitando a realização de projetos personalizados e garantindo resultados excepcionais.
                </p>
                <p class="lead" style="text-align: justify;">
                    Explore uma variedade de serviços sob medida, desde móveis rústicos encantadores até peças de design contemporâneo, tudo criado com habilidade artesanal e atenção aos detalhes. Encontre profissionais experientes e apaixonados prontos para transformar suas ideias em realidade.
                </p>
                <p class="lead" style="text-align: justify;">
                    Simplesmente navegue, conecte-se e transforme seus espaços com o talento dos nossos artesãos. Seja bem-vindo à sua nova fonte de inspiração e qualidade em marcenaria e carpintaria.
                </p>
            </div>

        </div>

    </div>
    <!-- Footer -->
    <footer>
        &copy; 2024 IWOOD. Todos os direitos reservados.
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>