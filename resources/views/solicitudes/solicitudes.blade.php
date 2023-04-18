@extends('plantilla.plantilla')
@section('Titulo', 'Solicitudes')

@section('contenido')

@if (session()->has('viajeSolicitado'))
{!!
    "<script>
        Swal.fire(
        'Tu solicitud ha sido enviada',
        'El propietario del viaje se pondra en contacto contigo',
        'success'
        )</script>"!!}
@endif

@if (session()->has('solicitudCancelado'))
{!!
    "<script>
        Swal.fire(
        'Tu solicitud ha sido cancelada',
        'Gracias por viajar con nosotros',
        'success'
        )</script>"!!}
@endif

@if (session()->has('solicitudAceptar'))
{!!
    "<script>
        Swal.fire(
        'La solicitud ha sido aprobada',
        'El usuario ahora es pasajero en tu viaje',
        'success'
        )</script>"!!}
@endif

@if (session()->has('solicitudRechazar'))
{!!
    "<script>
        Swal.fire(
        'La solicitud ha sido rechazada',
        'El usuario no es pasajero en tu viaje',
        'success'
        )</script>"!!}
@endif

@if (session()->has('error'))
{!!"<script> Swal.fire({
    icon: 'error',
    title: 'Algo salio mal :/',
    text: 'Intentelo nuevamente!',
    })</script> "!!}
@endif

@if (session()->has('NoCupos'))
{!!"<script> Swal.fire({
    icon: 'error',
    title: 'Ya no hay mas cupos para este viaje :/',
    text: 'Tu viaje esta lleno!',
    })</script> "!!}
@endif

    <section class="solicitudes">
        @include('solicitudes.opciones')
        @yield('contenido_solicitudes')
    </section>

@endsection


