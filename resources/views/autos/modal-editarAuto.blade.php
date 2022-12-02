<form action="{{route('viajes.auto.actualizar')}}" method="POST">
    @csrf
    <div class="modal modal-agregarAuto" id="modal-autoEditar">
    <div class="__header">
        <div class="__icon-editar">
            <i class="fa-solid fa-car"></i>
        </div>
        <div class="__cerrar">
            <a href="#cerrar"><i class="fa-solid fa-xmark"></i></a>
        </div>
    </div>
    <div class="__body">
        <p class="__titulo">Editar auto</p>
        <div>
            <label>Datos de vehiculo:</label>
            <div class="__horario">
                <input type="text" name="" id="" title="Numero de placa" placeholder="Numero de placa">
                <span> - </span>
                <input type="text" title="Version" placeholder="Version">
            </div>
            <div class="__horario">
                <select name="" id="">
                    <option value="" selected disabled>Seleccione la marca</option>
                    <option value="">AA</option>
                    <option value="">AAAA</option>
                    <option value="">AAAAAAA</option>
                </select>
                <span> - </span>
                <input type="text" title="Version" placeholder="Capacidad">
            </div>
            <div>
                <input type="text" value="" placeholder="Modelo">
                <input type="file" value="" placeholder="Imagen">
            </div>
        </div>

    </div>
    <div class="__footer">
        <div class="__botones">
            <a href="#cerrar" class="__btn __cancelar">Cancelar</a>
            <button href="" type="submit" class="__btn __editar">Confirmar</button>
        </div>
    </div>
</div>

</form>
