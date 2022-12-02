<form action="{{route('solicitudes.cancelar')}}" method="POST">
    @csrf
    <div class="modal modal-eliminarAuto" id="modal-cancelarViaje">
    <div class="__header">
        <div class="__icon-eliminar">
            <i class="fa-solid fa-route"></i>
        </div>
        <div class="__cerrar">
            <a href="#cerrar"><i class="fa-solid fa-xmark"></i></a>
        </div>
    </div>
    <div class="__body">
        <p class="__titulo">¿Estas seguro de cancelar tu solicitud?</p>
        <label>Podras seguir solicitdando viajes:</label>
    </div>
    <div class="__footer">
        <div class="__botones">
            <a href="#cerrar" class="__btn __cancelar">Cancelar</a>
            <button href="" type="submit" class="__btn __eliminar">Si, cancelar</button>
        </div>
    </div>
</div>

</form>
