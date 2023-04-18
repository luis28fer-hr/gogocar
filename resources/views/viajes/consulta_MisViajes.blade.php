@extends('viajes.viajes')
@section('contenido_viajes')
    <div class="grid-container">

        @foreach ($misviajes as $miviaje)
            <div class="__tarjeta grid-item
                @if ($miviaje->estatus == "Activo") __activoBorde @endif
                @if ($miviaje->estatus == "Advertencia") __advertenciaBorde @endif
                @if ($miviaje->estatus == "Lleno") __llenoBorde @endif">
                <div class="__img">
                    <img src="{{$miviaje->foto}}"
                        alt="Foto del vehiculo" title="Foto del vehiculo">
                </div>
                <div class="__descripcion">
                    <div title="Estatus del viaje"><i class="fa-solid fa-circle
                        @if ($miviaje->estatus == "Activo") __activoEstatus @endif
                        @if ($miviaje->estatus == "Advertencia") __PendienteEstatus @endif
                        @if ($miviaje->estatus == "Lleno") __RechazadoEstatus @endif"></i>
                        <p>Estatus: {{$miviaje->estatus}}</p>
                    </div>
                    <div title="Conductor"><i class="fa-sharp fa-solid fa-face-smile"></i>
                        <p>{{$miviaje->name}} {{$miviaje->apellido_p}}</p>
                    </div>
                    <div title="Tipo de viaje"><i class="fa-solid fa-list"></i>
                        <p>Tipo de viaje: {{$miviaje->tipo}}</p>
                    </div>
                    <div title="Punto de encuentro"><i class="fa-solid fa-location-dot"></i>
                        <p>{{$miviaje->encuentro}}</p>
                    </div>
                    <div title="Dias de viaje"><i class="fa-solid fa-calendar-days"></i>
                        <p>
                            @if ($miviaje->lunes != null)
                                    Lu
                            @endif

                            @if ($miviaje->Martes != null)
                                    Ma
                            @endif

                            @if ($miviaje->Miercoles != null)
                                    Mi
                            @endif

                            @if ($miviaje->Jueves != null)
                                    Ju
                            @endif

                            @if ($miviaje->Viernes != null)
                                    Vi
                            @endif

                            @if ($miviaje->sabado != null)
                                    Sa
                            @endif
                        </p>
                    </div>
                    <div title="Horario del viaje"><i class="fa-solid fa-clock"></i>
                        <p>Hora: {{$miviaje->ida}} - {{$miviaje->vuelta}}</p>
                    </div>
                    <div title="Cantidad de pasajeros disponibles"><i class="fa-solid fa-user-plus"></i>
                        <p>Pasajeros: {{$miviaje->capacidad}} / {{$miviaje->capAuto}}</p>
                    </div>
                    <div title="Fecha de publicación del viaje"><i class="fa-solid fa-calendar"></i>
                        <p>Publicacion: {{date("d-m-Y", strtotime($miviaje->created_at))}}</p>
                    </div>
                </div>
                <div class="__botones">
                    <a class="__mensaje" title="Ir a Whatsapp" href="https://wa.me/{{$miviaje->telefono}}" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                    <a class="__solicitar __llenoBoton" onclick="eliminarViaje({{$miviaje->id}})" ><i class="fa-solid fa-xmark"></i>
                        Eliminar</a>
                </div>
                @include('viajes.modal-eliminarMiviaje')
            </div>
        @endforeach
    </div>
@endsection
