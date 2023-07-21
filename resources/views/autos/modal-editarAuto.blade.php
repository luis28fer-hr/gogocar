<form action="{{ route('viajes.auto.actualizar', [$auto->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal modal-agregarAuto" id="modal-autoEditar-{{ $auto->id }}">
        <div class="__header">
            <div class="__icon-editar">
                <i class="fa-solid fa-car"></i>
            </div>
            <div class="__cerrar">
                <a onclick="cerrarEditarAuto({{ $auto->id }})"><i class="fa-solid fa-xmark"></i></a>
            </div>
        </div>
        <div class="__body">
            <p class="__titulo">Editar auto</p>
            <div>
                <label>Datos de vehiculo:</label>
                <div class="__horario">
                    <input type="text" name="placa" title="Numero de placa" placeholder="Numero de placa"
                        value="{{$auto->placa}}">
                    <span> - </span>
                    <input type="text" name="version" title="Version" placeholder="Version"
                        value="{{$auto->version}}">
                </div>
                <div class="__horario">
                    <span class="error">{{ $errors->first('placa') }}</span>
                    <span> </span>
                    <span class="error">{{ $errors->first('version') }}</span>
                </div>

                <div class="__horario">
                    <select name="marca" id="marca1">
                        <option value="{{$auto->marca}}" selected>{{$auto->marca}}</option>
                    </select>
                    <span> - </span>
                    <input type="text" title="Capacidad del vehiculo" name="capacidad" placeholder="Capacidad"
                        value="{{$auto->capacidad}}">
                </div>

                <div class="__horario">
                    <span class="error">{{ $errors->first('marca') }}</span>
                    <span> </span>
                    <span class="error">{{ $errors->first('capacidad') }}</span>
                </div>

                <div class="__horario">
                    <select name="modelo" id="modelo1">
                        <option value="{{$auto->modelo}}" selected>{{$auto->modelo}}</option>
                    </select>
                </div>
                <div class="__horario">
                    <span class="error">{{ $errors->first('modelo') }}</span>
                </div>
                <div class="__horario">
                    <input type="file" name="foto" accept="image/*">
                </div>
                <div class="__horario">
                    <span class="error">{{ $errors->first('foto') }}</span>
                </div>

            </div>

        </div>
        <div class="__footer">
            <div class="__botones">
                <a onclick="cerrarEditarAuto({{ $auto->id }})" class="__btn __cancelar">Cancelar</a>
                <span>&nbsp;&nbsp;</span>
                <button type="submit" class="__btn __editar">Confirmar</button>
            </div>
        </div>
    </div>

</form>
