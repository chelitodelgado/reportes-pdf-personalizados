<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kharma Solutions | @yield('titulo')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .salto-pagina {
            page-break-after: always;
        }

        td {
            white-space: normal;
        }
    </style>
    @yield('css')
</head>

<body>
    @section('portada')
    <img src="{{ public_path('portada01.png') }}" class="img-fluid" alt="Kharma Solutions">
    <div class="container-fluid py-3">
        <hr>
        <h4>KHARMA SOLUTIONS</h4>
        <img src="{{ public_path('logo.png') }}" class="img-fluid float-right" alt="Kharma Solutions">
        <h1>REPORTE</h1>
    </div>
    @show
    <div class="container-fluid">
        @yield('contenido')
    </div>
</body>

</html>