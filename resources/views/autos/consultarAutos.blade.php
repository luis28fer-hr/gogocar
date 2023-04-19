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
@section('scripts')
<script>
    const marcasSelect = document.getElementById('marca');
    const modelosSelect = document.getElementById('modelo')

    axios.get('https://vpic.nhtsa.dot.gov/api/vehicles/GetAllMakes?format=json')
        .then(response => {
            const marcas = response.data.Results  
            
            // Agregar las opciones del select de Marcas
            marcas.forEach(maker => {
                const option = document.createElement('option');
                option.value = maker['Make_Name'];
                option.textContent = maker['Make_Name'];
                marcasSelect.appendChild(option);
            });
        })
        .catch(error => {
            console.log(error);
    });

    /* Evento para trackear los cambios en el select de Marcas */
    marcasSelect.addEventListener('change', event => {
        const marcaSeleccionada = event.target.value;

        // Limpiar y desactivar el select de Modelos (porque se va a modificar)
        modelosSelect.innerHTML = '';
        modelosSelect.disabled = true;

        if (marcaSeleccionada) { 
            axios.get(`https://vpic.nhtsa.dot.gov/api/vehicles/GetModelsForMakeId/${marcaSeleccionada}?format=json`)
                .then(response => {
                    const modelos = response.data.Results;

                    // Activar y agregar las opciones al select de Modelos
                    modelosSelect.disabled = false;
                    modelos.forEach(modelo => {
                        const option = document.createElement('option');
                        option.value = modelo['Model_Name'];
                        option.textContent = modelo['Model_Name'];
                        modelosSelect.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error(error);
                });
        }
    });
</script>
@endsection