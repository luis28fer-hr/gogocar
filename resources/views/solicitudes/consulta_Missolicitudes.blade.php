@extends('solicitudes.solicitudes')
@section('contenido_solicitudes')
    <p class="__bienvenida">Hola {{ Auth::user()->name }} {{ Auth::user()->apellido_p }} {{ Auth::user()->apellido_m }}. Se
        muestran las solicitudes que tus viajes han recibido por parte de los usuarios.</p>


    @foreach ($Missolicitudes as $solicitud)
        <table class="tabla_solicitudes">
            <tr>
                <th class="titulo" colspan="4">VIAJE</th>
            </tr>

            <tr class="encabezado">
                <td>ID Viaje</td>
                <td>Tipo</td>
                <td colspan="2">Encuentro</td>
            </tr>

            @foreach ($solicitud->viaje as $viaje)
            <tr class="datos">
                <td>{{$viaje->id}}</td>
                <td>{{$viaje->tipo}}</td>
                <td colspan="2">{{$viaje->encuentro}}</td>
            </tr>
            @endforeach


            <tr>
                <th class="titulo" colspan="4">Usuario</th>
            </tr>
            <tr class="encabezado">
                <td>Matricula</td>
                <td>Nombre</td>
                <td>Correo</td>
                <td>Telefono</td>
            </tr>

            @foreach ($solicitud->usuario as $usuario)
            <tr class="datos">
                <td>{{$usuario->matricula}}</td>
                <td>{{$usuario->name}} {{$usuario->apellido_p}} {{$usuario->apellido_m}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->telefono}}</td>
            </tr>
            @endforeach

            <tr>
                <th class="titulo" colspan="4">OPCIONES</th>
            </tr>

            <tr class="opciones">
                <td colspan="4">
                    <a href="{{route('solicitudes.personal.rechazar', [$solicitud->id])}}" class="btn_rechazar">Rechazar</a>
                    <a href="{{route('solicitudes.personal.aceptar', [$solicitud->id])}}"  class="btn_aceptar">Aceptar</a>
                </td>
            </tr>

        </table>

    @endforeach
@endsection
