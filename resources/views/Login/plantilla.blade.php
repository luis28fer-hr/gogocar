<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gogocar @yield('Titulo', 'GGC')</title>
    <link href="{{ URL::asset('css/login/style.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

    <div class="{{request()->routeIs('registrate') ? 'contenedor-registrar':'contenedor'}}">
        <div class="header">
            <span><i class="fa-solid fa-car-side"></i> GoGocar</span>
            <ul>
                <li class="{{request()->routeIs('login') ? 'activo':''}}"><a class="{{request()->routeIs('login') ? 'activo_link':''}}" href="/">Iniciar Sesion</a></li>
                <li class="{{request()->routeIs('registrate') ? 'activo':''}}"><a class="{{request()->routeIs('registrate') ? 'activo_link':''}}" href="{{route('registrate')}}">Registrate</a></li>
            </ul>
        </div>
        @yield('contenidoLogin')
    </div>
    <div class="{{request()->routeIs('registrate') ? 'logotipo-registrar':'logotipo'}}">
        <img src="{{ URL::asset('css/login/Imagen1.png') }}" alt="Logotipo">
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#229954" fill-opacity="1" d="M0,64L34.3,64C68.6,64,137,64,206,101.3C274.3,139,343,213,411,213.3C480,213,549,139,617,112C685.7,85,754,107,823,144C891.4,181,960,235,1029,256C1097.1,277,1166,267,1234,234.7C1302.9,203,1371,149,1406,122.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>

</body>
</html>
