<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gogocar @yield('Titulo', 'GGC')</title>
    <link href="{{ URL::asset('css/plantilla/plantilla.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/plantilla/header.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/plantilla/footer.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/viajes/viajes.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/viajes/tarjeta.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/viajes/opciones.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/solicitudes/solicitudes.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/historial/historial.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    @include('plantilla.header')
    <main>
        @yield('contenido')
    </main>
    @include('plantilla.footer')

</body>
</html>
