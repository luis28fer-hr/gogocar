<form action="{{route('viajes.personal.eliminarViaje', [$miviaje->id])}}" method="POST">
    @csrf
    @method('delete')

    <div class="modal modal-eliminarAuto" id="modal-viajeEliminar-{{$miviaje->id}}">
    <div class="__header">
        <div class="__icon-eliminar">
            <i class="fa-solid fa-car"></i>
        </div>
        <div class="__cerrar">
            <a onclick="cerrarEliminarViaje({{$miviaje->id}})"><i class="fa-solid fa-xmark"></i></a>
        </div>
    </div>
    <div class="__body">
        <p class="__titulo">¿Estas seguro de eliminar este viaje?</p>
        <div>
            <label>Todos los datos relacionados con este viaje seran eliminados permanentemente</label>
        </div>

    </div>
    <div class="__footer">
        <div class="__botones">
            <a onclick="cerrarEliminarViaje({{$miviaje->id}})" class="__btn __cancelar">Cancelar</a>
            <span>&nbsp;&nbsp;</span>

            <button type="submit" class="__btn __eliminarAuto">Sí. Estoy de acuerdo</button>
        </div>
    </div>
</div>

</form>
