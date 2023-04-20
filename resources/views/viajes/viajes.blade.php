@extends('plantilla.plantilla')
@section('Titulo', 'Viajes')

@section('contenido')

@if (session()->has('viajeCreado'))
{!!
    "<script>
        Swal.fire(
        'Usted ha creado un viaje exitosamente',
        'Ahora su viaje esta activo',
        'success'
        )</script>"!!}
@endif

@if (session()->has('autoCreado'))
{!!
    "<script>
        Swal.fire(
        'Auto agregado exitosamente',
        'Ahora puede generar viajes con este vehiculo',
        'success'
        )</script>"!!}
@endif

@if (session()->has('autoEditado'))
{!!
    "<script>
        Swal.fire(
        'Auto actualizado exitosamente',
        'El auto ha sido modificado',
        'success'
        )</script>"!!}
@endif

@if (session()->has('autoEliminado'))
{!!
    "<script>
        Swal.fire(
        'Auto eliminado exitosamente',
        'El auto ha sido removido de todos los viajes',
        'success'
        )</script>"!!}
@endif

@if (session()->has('bienvenida'))
{!!"<script> Swal.fire({
    icon: 'success',
    title: '¡Bienvenido!',
    text: 'GoGoCar!',
    })</script> "!!}
@endif

@if (session()->has('error_nuevoViaje'))
{!!"<script> Swal.fire({
    icon: 'error',
    title: 'Algo salio mal :/',
    text: 'Intentelo nuevamente!',
    })</script> "!!}
@endif

@if (session()->has('error_viajeDias'))
{!!"<script> Swal.fire({
    icon: 'error',
    title: 'Debe seleccionar al menos un dia :/',
    text: 'Intentelo nuevamente!',
    })</script> "!!}
@endif

@if (session()->has('error_viajeHora'))
{!!"<script> Swal.fire({
    icon: 'error',
    title: 'Debe ingresar la hora :/',
    text: 'Intentelo nuevamente!',
    })</script> "!!}
@endif


@if (session()->has('viajeEliminado'))
{!!
    "<script>
        Swal.fire(
        'Viaje eliminado exitosamente',
        'El viaje ha sido removido de toda la plataforma',
        'success'
        )</script>"!!}
@endif


@if (session()->has('error_yaExistente'))
{!!"<script> Swal.fire({
    icon: 'error',
    title: 'Ya existe una solicitud para este viaje :/',
    text: 'Espere o cancale su solicitud actual!',
    })</script> "!!}
@endif




    <section class="viajes">

        @include('viajes.opciones')

        @yield('contenido_viajes')

    </section>

    @include('viajes.modal-crearviaje')
    @include('autos.modal-agregarAuto')

@endsection


@section('scripts')
<script>
    const marcasSelect = document.getElementById('marca');
    const modelosSelect = document.getElementById('modelo')

    const marcasSelectEdit = document.getElementById('marca1');
    const modelosSelectEdit = document.getElementById('modelo1')




    axios.get('https://vpic.nhtsa.dot.gov/api/vehicles/GetAllMakes?format=json')
        .then(response => {
            const marcas = response.data.Results

            // Agregar las opciones del select de Marcas
            marcas.forEach(maker => {
                const option = document.createElement('option');
                option.value = maker['Make_Name'];
                option.textContent = maker['Make_Name'];
                option.dataset.id = maker['Make_ID'];
                marcasSelect.appendChild(option);
            });
        })
        .catch(error => {
            console.log(error);
    });

    axios.get('https://vpic.nhtsa.dot.gov/api/vehicles/GetAllMakes?format=json')
        .then(response => {
            const marcas1 = response.data.Results
            // Agregar las opciones del select de Marcas
            marcas1.forEach(maker => {
                const option1 = document.createElement('option');
                option1.value = maker['Make_Name'];
                option1.textContent = maker['Make_Name'];
                option1.dataset.id = maker['Make_ID'];
                marcasSelectEdit.appendChild(option1);
            });
        })
        .catch(error => {
            console.log(error);
    });

    /* Evento para trackear los cambios en el select de Marcas */
    marcasSelect.addEventListener('change', event => {
        const marcaSeleccionada = event.target.options[event.target.selectedIndex];
        const marcaSeleccionadaID = marcaSeleccionada.dataset.id;

        // Limpiar y desactivar el select de Modelos (porque se va a modificar)
        modelosSelect.innerHTML = '';
        modelosSelect.disabled = true;

        if (marcaSeleccionadaID) {
            axios.get(`https://vpic.nhtsa.dot.gov/api/vehicles/GetModelsForMakeId/${marcaSeleccionadaID}?format=json`)
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

    marcasSelectEdit.addEventListener('change', event => {
        const marcaSeleccionada = event.target.options[event.target.selectedIndex];
        const marcaSeleccionadaID = marcaSeleccionada.dataset.id;

        // Limpiar y desactivar el select de Modelos (porque se va a modificar)
        modelosSelectEdit.innerHTML = '';
        modelosSelectEdit.disabled = true;

        if (marcaSeleccionadaID) {
            axios.get(`https://vpic.nhtsa.dot.gov/api/vehicles/GetModelsForMakeId/${marcaSeleccionadaID}?format=json`)
                .then(response => {
                    const modelos = response.data.Results;
                    // Activar y agregar las opciones al select de Modelos
                    modelosSelectEdit.disabled = false;
                    modelos.forEach(modelo => {
                        const option = document.createElement('option');
                        option.value = modelo['Model_Name'];
                        option.textContent = modelo['Model_Name'];
                        modelosSelectEdit.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error(error);
                });
        }
    });
</script>
@endsection


