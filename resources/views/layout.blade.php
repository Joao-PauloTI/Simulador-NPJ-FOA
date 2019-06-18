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
    <br>
    @yield('conteudo')
    <!--Bootstrap JS-->
    <script type="text/javascript" src="{{ asset('js/app.js') }} "></script>
</body>
</html>
