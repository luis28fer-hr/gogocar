    <div class="__opciones-viajes">
        <div class="__opc-pasajero">
            <a class="__btn __todos {{request()->routeIs('viajes') ? 'opc-activo':''}}" href="{{route('viajes')}}"><i class="fa-solid fa-list-ul"></i> Todos</a>
            <a class="__btn __mis-viajes {{request()->routeIs('viajes.personal') ? 'opc-activo':''}}" href="{{route('viajes.personal')}}"><i class="fa-solid fa-list-check"></i> Mis viajes</a>
        </div>
        <div class="__opc-conductor">
            <a onclick="nuevoViaje()" class="__btn __agregarViaje"><i class="fa-solid fa-plus"></i> Crear viaje</a>
            <a onclick="nuevoAuto()" class="__btn __agregarAuto"><i class="fa-solid fa-plus"></i> Agregar auto</a>
            <a href="{{route('viajes.auto.consultar')}}" class="__btn __consultarAutos"><i class="fa-solid fa-car"></i> Autos</a>
        </div>

    </div>

