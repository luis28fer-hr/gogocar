<form action="{{route('viajes.solicitar', [$viaje->id])}}" method="POST">
    @csrf
    <div class="modal modal-solicitarViaje" id="modal-solicitarViaje-{{$viaje->id}}">
    <div class="__header">
        <div class="__icon">
            <i class="fa-solid fa-route"></i>
        </div>
        <div class="__cerrar">
            <a onclick="cerrarSolicitarViaje({{$viaje->id}})"><i class="fa-solid fa-xmark"></i></a>
        </div>
    </div>
    <div class="__body">
        <p class="__titulo">¿Estas seguro de solicitar este viaje?</p>
        <label style="text-align: left; color:red">¡Recuerda solo postularte a viajes necesarios!</label>
    </div>
    <div class="__footer">
        <div class="__botones">
            <a onclick="cerrarSolicitarViaje({{$viaje->id}})" class="__btn __cancelar">Cancelar</a>
            <span>&nbsp;&nbsp;</span>

            <button type="submit" class="__btn __confirmar">Sí, solicitar</button>
        </div>
    </div>
</div>

</form>
