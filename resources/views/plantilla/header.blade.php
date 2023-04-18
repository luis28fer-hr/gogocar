<header>
    <a class="__titulo"  href="{{route('viajes')}}"><i class="fa-solid fa-car-side"></i>GoGoCar</a>
    <ul class="__links">
        <li><a class="{{request()->routeIs('viajes*') ? '__link-Activo':''}}" href="{{route('viajes')}}" title="Ver viajes disponibles">VIAJES</a></li>
        <li><a class="{{request()->routeIs('solicitudes*') ? '__link-Activo':''}}" href="{{route('solicitudes')}}" title="Ver tus solicitudes">SOLICITUDES</a></li>
        <li><a class="{{request()->routeIs('historial*') ? '__link-Activo':''}}" href="{{route('historial')}}" title="Ver tu historial de viajess">HISTORIAL</a></li>
    </ul>
    <ul class="__opciones">
        <li><a class="__perfil" onclick="miperfil()" title="Mi perfil">{{Auth::user()->name}} &nbsp <i class="fa-solid fa-user"></i></a></li>
        <li><a href="{{route('salir')}}" class="__salir" href="" title="Cerrar Sesion"><i class="fa-solid fa-power-off"></i></a></li>
        @include('plantilla.model-perfil')
    </ul>
</header>

