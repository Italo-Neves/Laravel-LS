<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Best Imóveis</title>
</head>
    <body>
        {{--Menu Topo --}}
        <nav>
            <div class="container">
                <div class="nav-wrapper">
                    <a href="/" class="brand-logo center">Best Imóveis</a>
                </div>
            </div>
        </nav>

        {{-- Slider --}}
        @yield('slider')

        {{--Conteudo Principal--}}
        <div class="container">
            @yield('conteudo-principal')
        </div>

        {{-- Conteudo Secundario --}}

        <div>
            @yield('secundario')
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function(){
                //slider
                var slider = document.querySelectorAll('.slider');
                M.Slider.init(slider, {
                    indicators: false,
                    height: 400,
                    interval: 3000
                });

                //Material box
                var boxes = document.querySelectorAll('.materialboxed');
                M.Materialbox.init(boxes);
            });
        </script>

    </body>
</html>
