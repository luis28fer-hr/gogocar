@extends('viajes.viajes')
@section('contenido_viajes')


@if (session()->has('error_nuevoAuto'))
{!!"<script> Swal.fire({
    icon: 'error',
    title: 'Algo salio mal :/',
    text: 'Intentelo nuevamente!',
    })</script> "!!}
@endif

@if (session()->has('error_editAuto'))
{!!"<script> Swal.fire({
    icon: 'error',
    title: 'La matricula ya esta en uso :/',
    text: 'Intentelo nuevamente!',
    })</script> "!!}
@endif



    <div class="grid-container">
        @foreach ($autos as $auto)
        <div class="__tarjeta __activoBorde grid-item-autos">
            <div class="__img __img-autos">
                <img src="{{$auto->foto}}"
                    alt="Foto de vehiculo">
            </div>
            <div class="__descripcion __descripcion-autos">
                <div><i class="fa-solid fa-car __activoEstatus"></i>
                    <p>Estatus</p>
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
                    <p>Version: {{$auto->version}}</p>
                </div>
                <div><i></i>
                    <p>Capacidad. {{$auto->capacidad}}</p>
                </div>
                <div><i></i>
                    <p>Regitsro: {{date("d-m-Y", strtotime($auto->created_at))}}</p>
                </div>
            </div>
            <div class="__botones __autos">
                <a class="__eliminar" onclick="eliminarAuto({{$auto->id}})"><i class="fa-solid fa-trash-can"></i></a>
                <a class="__solicitar __editar" onclick="editarAuto({{$auto->id}})"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
            </div>
            @include('autos.modal-editarAuto')
            @include('autos.modal-eliminarAuto')
        </div>



        @endforeach

    </div>


@endsection



