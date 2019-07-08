<!DOCTYPE html>
<html lang="en">
<head>
    <!--Bootstrap CSS-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--CSRF-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <!-- Menu com dropdown e hover -->
    <div>
        <nav class="navbar navbar-expand-sm" id="PI_menu_navbar">
            <ul class="navbar-nav">
                <!-- PUSH -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="PI_menu_navbardrop" data-toggle="dropdown">PUSH</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Incluir Processos</a>
                        <a class="dropdown-item" href="#">Consultar/Excluir Processos</a>
                        <a class="dropdown-item" href="#">Enviar Lista Completa</a>
                        <a class="dropdown-item" href="#">E-mails Enviados</a>
                    </div>
                </li>
                <!-- Petição Eletrônica - Lei 11.419/2006 -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="PI_menu_navbardrop" data-toggle="dropdown">Petição Eletrônica - Lei 11.419/2006</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Protocolizar</a>
                        <a class="dropdown-item" href="/distribuicaoeletronica" target="popup">Distribuição Eletronica</a>
                        <a class="dropdown-item" href="#">Petição Inicial Eletrônica 2ª Instância</a>
                    </div>
                </li>
                <!-- Consultas -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="PI_menu_navbardrop" data-toggle="dropdown">Consultas</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Consultas Processuais</a>
                        <a class="dropdown-item" href="#">Consulta Aviso Eletrônico</a>
                    </div>
                </li>
                <!-- Indisponibilidades -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="PI_menu_navbardrop" data-toggle="dropdown">Indisponibilidades</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Consulta Indisponibilidades</a>
                    </div>
                </li>
            </ul>
        </nav>
        <br>
    </div>
    <style type="text/css">
        #PI_banner {
            background-color: #1D4DAE;
        }
        #PI_imagem{
            margin: 15px;
        }
        .dropdown:hover>.dropdown-menu {
        display: block;
        }
        .dropdown>.dropdown-toggle:active {
            pointer-events: none;
        }
        .dropdown>.dropdown-menu>.dropdown-item:hover {
            background-color: #15377A;
            color: white;
        }
        #PI_menu_navbar {
            background-color: #15377A;
        }
        #PI_menu_navbardrop {
            color: #FFFFFF;
        }
    </style>
    <!--Conteúdo das páginas-->
    @yield('conteudo')
    <!--Bootstrap JS-->
    <script type="text/javascript" src="{{ asset('js/app.js') }} "></script>
</body>
</html>
