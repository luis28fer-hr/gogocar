@extends('plantilla.plantilla')
@section('Titulo', 'Viajes')

@section('contenido')

    <section class="viajes">

        @include('viajes.opciones')

        @yield('contenido_viajes')

    </section>

@endsection


