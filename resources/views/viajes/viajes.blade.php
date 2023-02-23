@extends('plantilla.plantilla')
@section('Titulo', 'Viajes')

@section('contenido')

@if (session()->has('viajeCreado'))
{!!
    "<script>
        Swal.fire(
        'Viaje creado exitosamente',
        'Viaje dado de alta',
        'success'
        )</script>"!!}
@endif

@if (session()->has('autoCreado'))
{!!
    "<script>
        Swal.fire(
        'Auto creado exitosamente',
        'Auto dado de alta',
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

    @include('viajes.modal-crearviaje')
    @include('viajes.modal-solicitarViaje')
    @include('autos.modal-agregarAuto')
    {{-- @include('autos.modal-editarAuto') --}}
    {{-- @include('autos.modal-eliminarAuto') --}}

    <section class="viajes">

        @include('viajes.opciones')

        @yield('contenido_viajes')

    </section>

@endsection


