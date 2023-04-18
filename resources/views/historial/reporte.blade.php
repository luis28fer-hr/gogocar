<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>
    <hr>
    <table class="striped">
        <thead>
            <tr>
                <th colspan="7" style="text-align: center">Detalles del viaje</th>
            </tr>
            <tr>
                <th>CODV</th>
                <th>Estatus</th>
                <th>Tipo</th>
                <th>Encuentro</th>
                <th>Dias</th>
                <th>Hora</th>
                <th>Capacidad</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{ $viaje->id }}</td>
                <td>{{ $viaje->estatus }}</td>
                <td>{{ $viaje->tipo }}</td>
                <td>{{ $viaje->encuentro }}</td>
                <td>
                    @if ($viaje->lunes != null)
                        Lu
                    @endif

                    @if ($viaje->Martes != null)
                        Ma
                    @endif

                    @if ($viaje->Miercoles != null)
                        Mi
                    @endif

                    @if ($viaje->Jueves != null)
                        Ju
                    @endif

                    @if ($viaje->Viernes != null)
                        Vi
                    @endif

                    @if ($viaje->sabado != null)
                        Sa
                    @endif
                </td>
                <td>{{ $viaje->ida }} - {{$viaje->vuelta}}</td>
                <td>{{ $viaje->capacidad }}</td>

            </tr>
        </tbody>

        <thead>
            <tr>
                <th colspan="7" style="text-align: center">Detalles del auto</th>
            </tr>
            <tr>
                <th>Placa</th>
                <th colspan="5">Auto</th>
                <th>Capacidad</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $viaje->auto->placa }}</td>
                <td colspan="5">{{ $viaje->auto->marca }} {{ $viaje->auto->modelo }} {{ $viaje->auto->version }}</td>
                <td>{{ $viaje->auto->capacidad }}</td>
            </tr>
        </tbody>

        <thead>
            <tr>
                <th colspan="7" style="text-align: center">Detalles del pasajeros</th>
            </tr>
            <tr>
                <th>Matricula</th>
                <th colspan="3">Nombre</th>
                <th>Telefono</th>
                <th colspan="2">Correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($viaje->pasajeros as $pasajero)
            <tr>
                <td>{{ $pasajero->matricula }}</td>
                <td colspan="3">{{ $pasajero->name }} {{ $pasajero->apellido_p }} {{ $pasajero->apellido_m }}</td>
                <td>{{ $pasajero->telefono }}</td>
                <td colspan="2">{{ $pasajero->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <hr>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
