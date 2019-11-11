<!DOCTYPE html>
<html lang="en">

<head>
    <!--Bootstrap CSS-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--Font Awesome Icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!--CSRF-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.4">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>

<body>
    <!-- Banner -->
    <div id="PI_banner">
        <a href="/">
            <img class="img-fluid" id="PI_imagem" src="{{ asset('images/PI_banner.png') }}">
        </a>
    </div>
    <!--Conteudo-->
    <div id="PI_div_pos_banner">
        @yield('conteudo')
    </div>
    <!--Bootstrap JS-->
    <script type="text/javascript" src="{{ asset('js/app.js') }} "></script>
    <!--Style para todas as páginas-->
    <style type="text/css">
        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        #PI_banner {
            background-color: #1D4DAE;
        }

        #PI_imagem {
            margin: 15px;
        }

        /*div de toda a página abaixo do banner*/
        #PI_div_pos_banner {
            margin-top: 5px;
            margin-left: 4px;
        }

        /*código para fazer a página se reposicionar quando o menu é aberto/fechado */
        #PI_mostrarEsconderMenu {
            margin-right: 1%;
            float: left;
        }
    </style>
</body>

</html>
