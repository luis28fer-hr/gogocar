@extends('plantilla.plantilla')
@section('Titulo', 'Solicitudes')

@section('contenido')

    <section class="solicitudes">
        @include('solicitudes.opciones')
        @yield('contenido_solicitudes')
    </section>

@endsection


