@extends('viajes.viajes')
@section('contenido_viajes')
    <div class="grid-container">
        @foreach ($viajes as $viaje)
            <div class="__tarjeta grid-item
                @if ($viaje->estatus == "Activo") __activoBorde @endif
                @if ($viaje->estatus == "Advertencia") __advertenciaBorde @endif
                @if ($viaje->estatus == "Lleno") __llenoBorde @endif">
                <div class="__img">
                    <img src="{{$viaje->foto}}"
                        alt="Foto del vehiculo" title="Foto del vehiculo">
                </div>
                <div class="__descripcion">
                    <div title="Estatus del viaje"><i class="fa-solid fa-circle
                        @if ($viaje->estatus == "Activo") __activoEstatus @endif
                        @if ($viaje->estatus == "Advertencia") __PendienteEstatus @endif
                        @if ($viaje->estatus == "Lleno") __RechazadoEstatus @endif"></i>
                        <p>Estatus: {{$viaje->estatus}}</p>
                    </div>
                    <div title="Conductor"><i class="fa-sharp fa-solid fa-face-smile"></i>
                        <p>{{$viaje->name}} {{$viaje->apellido_p}}</p>
                    </div>
                    <div title="Tipo de viaje"><i class="fa-solid fa-list"></i>
                        <p>Tipo de viaje: {{$viaje->tipo}}</p>
                    </div>
                    <div title="Punto de encuentro"><i class="fa-solid fa-location-dot"></i>
                        <p>{{$viaje->encuentro}}</p>
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
                        <p>Hora: {{$viaje->ida}} - {{$viaje->vuelta}}</p>
                    </div>
                    <div title="Cantidad de pasajeros disponibles"><i class="fa-solid fa-user-plus"></i>
                        <p>Pasajeros: {{$viaje->capacidad}} / {{$viaje->capAuto}}</p>
                    </div>
                    <div title="Fecha de publicación del viaje"><i class="fa-solid fa-calendar"></i>
                        <p>Publicacion: {{date("d-m-Y", strtotime($viaje->created_at))}}</p>
                    </div>
                </div>
                <div class="__botones">
                    <a class="__mensaje" title="Ir al char del conductor" href="https://wa.me/{{$viaje->telefono}}" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                    <a class="__solicitar __activoBoton" onclick="solicitarViaje({{$viaje->id}})"><i class="fa-solid fa-car"></i> Solicitar</a>
                </div>
                @include('viajes.modal-solicitarViaje')
            </div>
        @endforeach
    </div>
@endsection
