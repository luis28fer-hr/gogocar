@extends('viajes.viajes')
@section('contenido_viajes')
    <div class="grid-container">
        <div class="__tarjeta __activoBorde grid-item-autos">
            <div class="__img __img-autos">
                <img src="https://acroadtrip.blob.core.windows.net/catalogo-imagenes/xl/RT_V_406bc2a2cdae482eb7284d335c70440d.jpg"
                    alt="">
            </div>
            <div class="__descripcion __descripcion-autos">
                <div><i class="fa-solid fa-car __activoEstatus"></i>
                    <p>Estatus</p>
                </div>
                <div><i></i>
                    <p>Placa: </p>
                </div>
                <div><i></i>
                    <p>Marca: </p>
                </div>
                <div><i></i>
                    <p>Modelo: </p>
                </div>
                <div><i></i>
                    <p>Version: </p>
                </div>
                <div><i></i>
                    <p>Capacidad</p>
                </div>
                <div><i></i>
                    <p>Fecha de regitsro:</p>
                </div>
            </div>
            <div class="__botones __autos">
                <a class="__eliminar" href="#modal-autoEliminaf"><i class="fa-solid fa-trash-can"></i></a>
                <a class="__solicitar __editar" href="#modal-autoEditar"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
            </div>
        </div>
    </div>


@endsection
