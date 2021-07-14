<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        </style
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
</body>

</html>