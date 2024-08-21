<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gráfico dos Serviços</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="h-screen bg-gray-100">

    <div class="container px-4 mx-auto">

        <div class="p-6 m-20 bg-white rounded shadow">
            {!! $servicochart->container() !!}
            <button>
                <a href="{{ url('servico') }}" class="btn text-lg px-3 py-1 rounded-full bg-black hover:bg-gray-500 text-white" title="Voltar à página de Estabelecimentos">Voltar</a>
            </button>
        </div>

    </div>

    <script src="{{ $servicochart->cdn() }}"></script>

    {{ $servicochart->script() }}
</body>

</html>
