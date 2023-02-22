<header>
    <a class="__titulo" href="{{ route('viajes') }}"><i class="fa-solid fa-car-side"></i>GoGoCar</a>
    <ul class="__links">
        <li><a class="{{ request()->routeIs('viajes*') ? '__link-Activo' : '' }}" href="{{ route('viajes') }}"
                title="Ver viajes disponibles">VIAJES</a></li>
        <li><a class="{{ request()->routeIs('solicitudes') ? '__link-Activo' : '' }}" href="{{ route('solicitudes') }}"
                title="Ver tus solicitudes">SOLICITUDES</a></li>
        <li><a class="{{ request()->routeIs('historial') ? '__link-Activo' : '' }}" href="{{ route('historial') }}"
                title="Ver tu historial de viajess">HISTORIAL</a></li>
    </ul>

    <ul class="__opciones">
        <li><a class="__perfil" href="{{ route('profile.edit') }}" title="Mi perfil">
                <i class="fa-solid fa-user"></i> {{ Auth::user()->name }}
            </a>
        </li>

        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                    <i class="fa-solid fa-power-off __salir"></i>
                </x-dropdown-link>
            </form>
        </li>
    </ul>
</header>
p