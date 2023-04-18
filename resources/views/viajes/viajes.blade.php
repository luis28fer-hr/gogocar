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


