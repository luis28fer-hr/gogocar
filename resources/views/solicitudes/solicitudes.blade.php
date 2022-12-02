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

    @include('solicitudes.modal-cancelarSolicitud')

    <section class="solicitudes">
        @include('solicitudes.opciones')
        @yield('contenido_solicitudes')
    </section>

@endsection


