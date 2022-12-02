<form action="{{route('viajes.solicitar')}}" method="POST">
    @csrf
    <div class="modal modal-solicitarViaje" id="modal-solicitarViaje">
    <div class="__header">
        <div class="__icon">
            <i class="fa-solid fa-route"></i>
        </div>
        <div class="__cerrar">
            <a href="#cerrar"><i class="fa-solid fa-xmark"></i></a>
        </div>
    </div>
    <div class="__body">
        <p class="__titulo">¿Estas seguro de solicitar este viaje?</p>
        <label>Recuerda solo postularte a viajes necesarios:</label>
    </div>
    <div class="__footer">
        <div class="__botones">
            <a href="#cerrar" class="__btn __cancelar">Cancelar</a>
            <button href="" type="submit" class="__btn __confirmar">Sí, solicitar</button>
        </div>
    </div>
</div>

</form>
