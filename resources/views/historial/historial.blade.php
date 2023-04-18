@extends('plantilla.plantilla')
@section('Titulo', 'Historial')

@section('contenido')

    <section class="historial">
        <p class="__bienvenida">Hola {{Auth::user()->name}} {{Auth::user()->apellido_p}} {{Auth::user()->apellido_m}}. Se muestran los detalles de los viajes que ofreces, en los que formas parte como condutor</p>

        @foreach ($viajes as $viaje)
            <div class="__contenedor">
                <div class="__tarjeta  __historial
                    @if ($viaje->estatus == "Activo") __activoBorde @endif
                    @if ($viaje->estatus == "Advertencia") __advertenciaBorde @endif
                    @if ($viaje->estatus == "Lleno") __llenoBorde @endif">

                    <div class="__img">
                        <img src="{{ $viaje->auto->foto }}" alt="Foto del vehiculo" title="Foto del vehiculo">
                    </div>
                    <div class="__descripcion">
                        <div title="Estatus del viaje"><i class="fa-solid fa-circle
                            @if ($viaje->estatus == "Activo") __activoEstatus @endif
                            @if ($viaje->estatus == "Advertencia") __PendienteEstatus @endif
                            @if ($viaje->estatus == "Lleno") __RechazadoEstatus @endif"></i>
                            <p>Estatus: {{ $viaje->estatus }}</p>
                        </div>
                        <div title="Conductor"><i class="fa-sharp fa-solid fa-face-smile"></i>
                            <p>{{Auth::user()->name}} {{Auth::user()->apellido_p}} {{Auth::user()->apellido_m}}</p>
                        </div>
                        <div title="Tipo de viaje"><i class="fa-solid fa-list"></i>
                            <p>Tipo de viaje: {{ $viaje->tipo }}</p>
                        </div>
                        <div title="Punto de encuentro"><i class="fa-solid fa-location-dot"></i>
                            <p>{{ $viaje->encuentro }}</p>
                        </div>
                        <div title="Dias de viaje"><i class="fa-solid fa-calendar-days"></i>
                            <p>
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
                            </p>
                        </div>
                        <div title="Horario del viaje"><i class="fa-solid fa-clock"></i>
                            <p>Hora: {{ $viaje->ida }} - {{ $viaje->vuelta }}</p>
                        </div>
                        <div title="Cantidad de pasajeros disponibles"><i class="fa-solid fa-user-plus"></i>
                            <p>Pasajeros: {{ $viaje->capacidad }} / {{ $viaje->auto->capacidad }}</p>
                        </div>
                        <div title="Fecha de publicación del viaje"><i class="fa-solid fa-calendar"></i>
                            <p>Publicacion: {{ date('d-m-Y', strtotime($viaje->created_at)) }}</p>
                        </div>
                    </div>
                    <div class="__botones">
                        <a class="__mensaje __pdf" title="Reporte de Viaje" href="{{route('historial.reporte', $viaje->id)}}" target="_blank"><i class="fa-solid fa-file-pdf"></i></a>
                    </div>
                </div>

                <div class="__cuerpo
                    @if ($viaje->estatus == "Activo") __activoBorde @endif
                    @if ($viaje->estatus == "Advertencia") __advertenciaBorde @endif
                    @if ($viaje->estatus == "Lleno") __llenoBorde @endif">
                    <div class="__encabezado">
                        <div>
                            <i class="fa-solid fa-circle
                            @if ($viaje->estatus == "Activo") __activoEstatus @endif
                            @if ($viaje->estatus == "Advertencia") __PendienteEstatus @endif
                            @if ($viaje->estatus == "Lleno") __RechazadoEstatus @endif"></i>
                            <p>{{$viaje->estatus    }}</p>
                        </div>
                        <p>Codigo de viaje: {{$viaje->id}}</p>
                    </div>
                    <div class="__datos">
                        <div>
                            <div class="__titulo">
                                <i class="fa-solid fa-user"></i>
                                <p>Datos del conductor</p>
                            </div>
                            <div class="__contenido">
                                <p class="__campo">Nombre:</p>
                                <p>{{Auth::user()->name}} {{Auth::user()->apellido_p}} {{Auth::user()->apellido_m}}</p>
                            </div>
                            <div class="__contenido">
                                <p class="__campo">Matricula:</p>
                                <p>{{Auth::user()->matricula}}</p>
                            </div>
                            <div class="__contenido">
                                <p class="__campo">Correo:</p>
                                <p>{{Auth::user()->email}}</p>
                            </div>
                            <div class="__contenido">
                                <p class="__campo">Telefono:</p>
                                <p>{{Auth::user()->telefono}}</p>
                            </div>
                        </div>
                        <div>
                            <div class="__titulo">
                                <i class="fa-sharp fa-solid fa-car-side"></i>
                                <p>Datos del vehiculo</p>
                            </div>
                            <div class="__contenido">
                                <p class="__campo">Placa:</p>
                                <p>{{ $viaje->auto->placa }}</p>
                            </div>
                            <div class="__contenido">
                                <p class="__campo">Modelo:</p>
                                <p>{{ $viaje->auto->marca }} {{ $viaje->auto->modelo }}</p>
                            </div>
                            <div class="__contenido">
                                <p class="__campo">Version:</p>
                                <p>{{ $viaje->auto->version }}</p>
                            </div>
                            <div class="__contenido">
                                <p class="__campo">Capacidad:</p>
                                <p>{{ $viaje->auto->capacidad }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="__datos">

                        <div>
                            <div class="__titulo">
                                <i class="fa-solid fa-user-group"></i>
                                <p>Datos de pasajeros</p>
                            </div>
                            @foreach ($viaje->pasajeros as $pasajero)
                                <div class="__contenido">
                                    <p>{{$pasajero->matricula}} - {{$pasajero->name}} {{$pasajero->apellido_p}} {{$pasajero->apellido_m}} - {{$pasajero->telefono}} - {{$pasajero->email}}</p>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </section>

@endsection
