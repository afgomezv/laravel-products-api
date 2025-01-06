<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--favico-->
    <!--estilos-->
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>

</head>
<body>
    <!--header-->
    <!--nav-->
    @include('layout.partials.header')
    @yield('content')
    <!--footer-->
    @include('layout.partials.footer')
    <!--scripts-->
</body>
</html>