<form action="{{route('viajes.auto.eliminar', $auto->id)}}" method="POST">
    @csrf
    @method("DELETE")
    <div class="modal modal-eliminarAuto" id="modal-autoEliminaf-{{$auto->id}}">
    <div class="__header">
        <div class="__icon-eliminar">
            <i class="fa-solid fa-car"></i>
        </div>
        <div class="__cerrar">
            <a href="#cerrar"><i class="fa-solid fa-xmark"></i></a>
        </div>
    </div>
    <div class="__body">
        <p class="__titulo">¿Estas seguro de eliminar el auto?</p>
        <div>
            <label>Todos los viajes relacionados con este vehiculo seran eliminados:</label>
        </div>

    </div>
    <div class="__footer">
        <div class="__botones">
            <a href="#cerrar" class="__btn __cancelar">Cancelar</a>
            <button href="" type="submit" class="__btn __eliminar">Sí. Estoy de acuerdo</button>
        </div>
    </div>
</div>

</form>
