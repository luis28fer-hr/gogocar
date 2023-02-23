<form action="{{route('viajes.auto.actualizar', $auto->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="modal modal-agregarAuto" id="modal-autoEditar-{{$auto->id}}">
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
            <input type="text" name="usuario_id" id="usuario_id" value="{{ Auth::id() }}" readonly hidden>
            <div class="__horario">
                <input type="text" name="placa" id="" title="Numero de placa" placeholder="Numero de placa" value="{{$auto->placa}}">
                <span> - </span>
                <input type="text" name="no_seguro" title="Seguro" placeholder="No. seguro" value="{{ $auto->no_seguro }}">
            </div>
            <div class="__horario">
                <select name="marca" id="marca">
                    <option value="" selected disabled>Seleccione la marca</option>
                    <option value="{{ $auto->marca }}" selected>{{ $auto->marca }}</option>
                    <option value="Volvo">Volvo</option>
                    <option value="Volkswagen">Volkswagen</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Ford">Ford</option>
                    <option value="Mercedes-Benz">Mercedes-Benz</option>
                    <option value="Kia">Kia</option>
                </select>
                <span> - </span>
                <input type="text" name="capacidad" title="Capacidad" placeholder="Capacidad" value="{{ $auto->capacidad }}">
            </div>
            <div>
                <input type="text" name="modelo" value="{{ $auto->modelo }}" placeholder="Modelo">
                <input type="file" value="" placeholder="Imagen">
            </div>
            <div style="">
                <input type="checkbox" id="activo" name="activo" value="true" {{ $auto->activo == 1 ? 'checked' : '' }}>
                <p>Activo</p>
                <input type="checkbox" id="verificado" name="verificado" value="true" {{ $auto->verificado == 1 ? 'checked' : '' }}>
                <p>Verificado</p>
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
