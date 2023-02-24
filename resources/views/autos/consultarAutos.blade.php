@extends('viajes.viajes')
@section('contenido_viajes')
    <div class="grid-container">
        @foreach ($autos as $auto)
            <div class="__tarjeta grid-item-autos {{ $auto->estatus->borde }}">
                <div class="__img __img-autos">
                    <img src="https://acroadtrip.blob.core.windows.net/catalogo-imagenes/xl/RT_V_406bc2a2cdae482eb7284d335c70440d.jpg"
                        alt="">
                </div>
                <div class="__descripcion __descripcion-autos">
                    <div>
                        <i class="fa-solid fa-car {{$auto->estatus->color}}">
                        </i>
                        <div>
                            <p>Estatus:</p>
                            <p style="font-size: 13px;">&nbsp;{{$auto->estatus->texto}}</p>
                        </div>
                    </div>
                    <div><i></i>
                        <p>Placa: {{$auto->placa}}</p>
                    </div>
                    <div><i></i>
                        <p>Marca: {{$auto->marca}}</p>
                    </div>
                    <div><i></i>
                        <p>Modelo: {{$auto->modelo}}</p>
                    </div>
                    <div><i></i>
                        <p>No. de seguro: {{ $auto->no_seguro }}</p>
                    </div>
                    <div><i></i>
                        <p>Capacidad: {{$auto->capacidad}}</p>
                    </div>
                    <div><i></i>
                        <p>Fecha de registro: {{$auto->created_at}}</p>
                    </div>
                </div>
                <div class="__botones __autos">
                    <a class="__eliminar" href="#modal-autoEliminaf-{{$auto->id}}"><i class="fa-solid fa-trash-can"></i></a>
                    <a class="__solicitar __editar" href="#modal-autoEditar-{{$auto->id}}"><i class="fa-solid fa-pen-to-square"></i>
                        Editar</a>
                </div>
                @include('autos.modal-editarAuto')
                @include('autos.modal-eliminarAuto')
            </div>
        @endforeach

    </div>
@endsection
