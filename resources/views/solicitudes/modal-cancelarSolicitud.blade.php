<form action="{{route('solicitudes.cancelar', [$solicitud->id])}}" method="POST">
    @csrf
    <div class="modal modal-eliminarAuto" id="modal-cancelarViaje-{{$solicitud->id}}">
    <div class="__header">
        <div class="__icon-eliminar">
            <i class="fa-solid fa-route"></i>
        </div>
        <div class="__cerrar">
            <a onclick="cerrarCancelarSolicitud({{$solicitud->id}})"><i class="fa-solid fa-xmark"></i></a>
        </div>
    </div>
    <div class="__body">
        <p class="__titulo">¿Estas seguro de cancelar tu solicitud?</p>
        <label>Podras seguir solicitdando viajes</label>
    </div>
    <div class="__footer">
        <div class="__botones">
            <button type="submit" class="__btn __eliminarAuto">Sí. Estoy seguro</button>
        </div>
    </div>
</div>

</form>
