@extends('solicitudes.solicitudes')
@section('contenido_solicitudes')
    <p class="__bienvenida">Hola {{ Auth::user()->name }} {{ Auth::user()->apellido_p }} {{ Auth::user()->apellido_m }}. Se
        muestran los resultados de los viajes/raites que te has
        postulado como pasajero.</p>

    @foreach ($solicitudes as $solicitud)
        <div class="__contenedor">
            <div
                class="__tarjeta __uno
                @if ($solicitud->estatus == 'Aceptado') __activoBorde @endif
                @if ($solicitud->estatus == 'Pendiente') __advertenciaBorde @endif
                @if ($solicitud->estatus == 'Rechazado') __llenoBorde @endif">
                <div class="__img">
                    <img src="{{ $solicitud->auto->foto }}" alt="Foto del vehiculo" title="Foto del vehiculo">
                </div>
                <div class="__descripcion">
                    <div title="Estatus del viaje"><i class="fa-solid fa-circle
                        @if ($solicitud->viaje->estatus == "Activo") __activoEstatus @endif
                        @if ($solicitud->viaje->estatus == "Advertencia") __PendienteEstatus @endif
                        @if ($solicitud->viaje->estatus == "Lleno") __RechazadoEstatus @endif"></i>
                        <p>Estatus: {{ $solicitud->viaje->estatus }}</p>
                    </div>
                    <div title="Conductor"><i class="fa-sharp fa-solid fa-face-smile"></i>
                        <p>{{ $solicitud->conductor->name }} {{ $solicitud->conductor->apellido_p }}</p>
                    </div>
                    <div title="Tipo de viaje"><i class="fa-solid fa-list"></i>
                        <p>Tipo de viaje: {{ $solicitud->viaje->tipo }}</p>
                    </div>
                    <div title="Punto de encuentro"><i class="fa-solid fa-location-dot"></i>
                        <p>{{ $solicitud->viaje->encuentro }}</p>
                    </div>
                    <div title="Dias de viaje"><i class="fa-solid fa-calendar-days"></i>
                        <p>
                            @if ($solicitud->viaje->lunes != null)
                                Lu
                            @endif

                            @if ($solicitud->viaje->Martes != null)
                                Ma
                            @endif

                            @if ($solicitud->viaje->Miercoles != null)
                                Mi
                            @endif

                            @if ($solicitud->viaje->Jueves != null)
                                Ju
                            @endif

                            @if ($solicitud->viaje->Viernes != null)
                                Vi
                            @endif

                            @if ($solicitud->viaje->sabado != null)
                                Sa
                            @endif
                        </p>
                    </div>
                    <div title="Horario del viaje"><i class="fa-solid fa-clock"></i>
                        <p>Hora: {{ $solicitud->viaje->ida }} - {{ $solicitud->viaje->vuelta }}</p>
                    </div>
                    <div title="Cantidad de pasajeros disponibles"><i class="fa-solid fa-user-plus"></i>
                        <p>Pasajeros: {{ $solicitud->viaje->capacidad }} / {{ $solicitud->auto->capacidad }}</p>
                    </div>
                    <div title="Fecha de publicación del viaje"><i class="fa-solid fa-calendar"></i>
                        <p>Publicacion: {{ date('d-m-Y', strtotime($solicitud->viaje->created_at)) }}</p>
                    </div>
                </div>
                <div class="__botones">
                    <a class="__mensaje" title="Ir a Whatsapp" href="https://wa.me/{{ $solicitud->conductor->telefono }}"
                        target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>

            <div
                class="__cuerpo
                @if ($solicitud->estatus == 'Aceptado') __activoBorde @endif
                @if ($solicitud->estatus == 'Pendiente') __advertenciaBorde @endif
                @if ($solicitud->estatus == 'Rechazado') __llenoBorde @endif">
                <div class="__encabezado">
                    <div>
                        <i
                            class="fa-solid fa-circle
                            @if ($solicitud->estatus == 'Aceptado') __activoEstatus @endif
                            @if ($solicitud->estatus == 'Pendiente') __PendienteEstatus @endif
                            @if ($solicitud->estatus == 'Rechazado') __RechazadoEstatus @endif"></i>
                        <p>Estatus: <b>{{ $solicitud->estatus }}</b></p>
                    </div>
                    <p>Codigo de viaje: <b>{{ $solicitud->viaje->id }}</b></p>
                </div>
                <div class="__datos">
                    <div>
                        <div class="__titulo">
                            <i class="fa-solid fa-user"></i>
                            <p>Datos del conductor</p>
                        </div>
                        <div class="__contenido">
                            <p class="__campo">Nombre:</p>
                            <p>{{ $solicitud->conductor->name }} {{ $solicitud->conductor->apellido_p }}
                                {{ $solicitud->conductor->apellido_m }}</p>
                        </div>
                        <div class="__contenido">
                            <p class="__campo">Matricula:</p>
                            <p>{{ $solicitud->conductor->matricula }}</p>
                        </div>
                        <div class="__contenido">
                            <p class="__campo">Correo:</p>
                            <p>{{ $solicitud->conductor->email }}</p>
                        </div>

                        <div class="__contenido">
                            <p class="__campo">Telefono:</p>
                            <p>{{ $solicitud->conductor->telefono }}</p>
                        </div>
                    </div>
                    <div>
                        <div class="__titulo">
                            <i class="fa-sharp fa-solid fa-car-side"></i>
                            <p>Datos del vehiculo</p>
                        </div>
                        <div class="__contenido">
                            <p class="__campo">Placa:</p>
                            <p>{{ $solicitud->auto->placa }}</p>
                        </div>
                        <div class="__contenido">
                            <p class="__campo">Modelo:</p>
                            <p>{{ $solicitud->auto->marca }} {{ $solicitud->auto->modelo }}</p>
                        </div>
                        <div class="__contenido">
                            <p class="__campo">Version:</p>
                            <p>{{ $solicitud->auto->version }}</p>
                        </div>
                        <div class="__contenido">
                            <p class="__campo">Capacidad:</p>
                            <p>{{ $solicitud->auto->capacidad }}</p>
                        </div>
                    </div>
                </div>
                <div class="__datos">
                    <div>
                        <div class="__titulo">
                            <i class="fa-solid fa-user"></i>
                            <p>Tus datos</p>
                        </div>
                        <div class="__contenido">
                            <p class="__campo">Nombre:</p>
                            <p>{{ Auth::user()->name }} {{ Auth::user()->apellido_p }} {{ Auth::user()->apellido_m }}</p>
                        </div>
                        <div class="__contenido">
                            <p class="__campo">Matricula:</p>
                            <p>{{ Auth::user()->matricula }}</p>
                        </div>
                        <div class="__contenido">
                            <p class="__campo">Correo:</p>
                            <p>{{ Auth::user()->email }}</p>
                        </div>
                        <div class="__contenido">
                            <p class="__campo">Telefono:</p>
                            <p>{{ Auth::user()->telefono }}</p>
                        </div>
                        <div class="__contenido">
                            <i class="__mensaje"> * Tus datos son visibles para el conductor *</i>
                        </div>
                    </div>
                    <div>
                        <div class="__titulo">
                            <i class="fa-solid fa-user-group"></i>
                            <p>Datos de pasajeros</p>
                        </div>
                        @foreach ($solicitud->pasajeros as $pasajero)
                            <div class="__contenido">
                                <p class="__campo">{{$pasajero->name}}</p>
                                <p>{{$pasajero->matricula}}</p>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="__botones">
                    <a onclick="cancelarSolicitud({{ $solicitud->id }})"><i class="fa-solid fa-xmark"></i> Cancelar</a>
                </div>
                @include('solicitudes.modal-cancelarSolicitud')

            </div>
        </div>
    @endforeach
@endsection
