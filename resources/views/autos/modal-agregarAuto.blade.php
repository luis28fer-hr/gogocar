<form action="{{ route('viajes.auto.guardar') }}" method="POST">
    @csrf
    <div class="modal modal-agregarAuto" id="modal-autoCrear">
    <div class="__header">
        <div class="__icon">
            <i class="fa-solid fa-car"></i>
        </div>
        <div class="__cerrar">
            <a href="#cerrar"><i class="fa-solid fa-xmark"></i></a>
        </div>
    </div>
    <div class="__body">
        <p class="__titulo">Agregar un nuevo auto</p>
        <div>
            <label>Datos de vehiculo:</label>
            <input type="text" name="usuario_id" id="usuario_id" value="{{ Auth::id() }}" readonly hidden>
            <div class="__horario">
                <input type="text" name="placa" id="placa" title="Numero de placa" placeholder="Numero de placa">
                <span> - </span>
                <input type="text" name="no_seguro" title="Seguro" placeholder="No. seguro">
            </div>
            <div class="__horario">
                <select name="marca" id="marca">
                    <option value="" selected disabled>Seleccione la marca</option>
                    <option value="Volvo">Volvo</option>
                    <option value="Volkswagen">Volkswagen</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Ford">Ford</option>
                    <option value="Mercedes-Benz">Mercedes-Benz</option>
                    <option value="Kia">Kia</option>
                </select>
                <span> - </span>
                <input type="text" name="capacidad" title="Version" placeholder="Capacidad">
            </div>
            <div>
                <input type="text" name="modelo" id="modelo" value="" placeholder="Modelo">
                <input type="file" value="" placeholder="Imagen">
            </div>
            <div style="">
                <<input type="checkbox" id="activo" name="activo" value="true">
                <p>Activo</p>
                <input type="checkbox" id="verificado" name="verificado" value="true">
                <p>Verificado</p>
            </div>
        </div>

    </div>
    <div class="__footer">
        <div class="__botones">
            <a href="#cerrar" class="__btn __cancelar">Cancelar</a>
            <button type="submit" class="__btn __confirmar">Confirmar</button>
        </div>
    </div>
</div>

</form>
