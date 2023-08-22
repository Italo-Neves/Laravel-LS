<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best Imóveis</title>
</head>
<body>
    {{--Menu Topo --}}
    <nav>Menu Topo</nav>

    {{--Conteudo Principal--}}
    <div class="container">
        @yield('conteudo-principal')
    </div>

    {{-- Conteudo Secundario --}}

    <div>
        @yield('secundario')
    </div>
</body>
</html>
