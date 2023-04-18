<form action="{{route('viajes.auto.eliminar', [$auto->id])}}" method="POST">
    @csrf
    @method('delete')

    <div class="modal modal-eliminarAuto" id="modal-autoEliminar-{{$auto->id}}">
    <div class="__header">
        <div class="__icon-eliminar">
            <i class="fa-solid fa-car"></i>
        </div>
        <div class="__cerrar">
            <a onclick="cerrarEliminarAuto({{$auto->id}})"><i class="fa-solid fa-xmark"></i></a>
        </div>
    </div>
    <div class="__body">
        <p class="__titulo">¿Estas seguro de eliminar el auto?</p>
        <div>
            <label>Todos los viajes relacionados con este vehiculo seran eliminado</label>
        </div>

    </div>
    <div class="__footer">
        <div class="__botones">
            <a onclick="cerrarEliminarAuto({{$auto->id}})" class="__btn __cancelar">Cancelar</a>
            <span>&nbsp;&nbsp;</span>

            <button type="submit" class="__btn __eliminarAuto">Sí. Estoy de acuerdo</button>
        </div>
    </div>
</div>

</form>
