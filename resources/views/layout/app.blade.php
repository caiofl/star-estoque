<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        <title> Controle de Estoque </title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
            body{
                padding:50px;
            }
            .navbar {
                margin-bottom: 20px;
            }
        </style>
    </head>

    <body>
        <div class="container">
        @component('componente_navbar',  ["current" => $current])
            @endcomponent
            <main role="main">
                @hasSection('body') 
                    @yield('body') 
                @endif    
            </main>
        </div>

        <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>

            @hasSection('javascript') 
                @yield('javascript') 
            @endif  
    </body>

</html>