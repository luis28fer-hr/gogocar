    <div class="__opciones-viajes">
        <div class="__opc-pasajero">
            <a class="__btn __todos {{request()->routeIs('solicitudes') ? 'opc-activo':''}}" href="{{route('solicitudes')}}"><i class="fa-solid fa-list-ul"></i> Todas</a>
            <a class="__btn __mis-viajes {{request()->routeIs('solicitudes.personal') ? 'opc-activo':''}}" href="{{route('solicitudes.personal')}}"><i class="fa-solid fa-list-check"></i> Mis solicitudes</a>
        </div>
    </div>

