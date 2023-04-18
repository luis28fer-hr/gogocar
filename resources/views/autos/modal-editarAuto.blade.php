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
                    <select name="marca">
                        <option value="{{$auto->marca}}" selected>{{$auto->marca}}</option>
                        <option>ABARTH</option>
                        <option>ALFA ROMEO</option>
                        <option>ALFA ROMEO (FIAT)</option>
                        <option>AUDI</option>
                        <option>BENTLEY</option>
                        <option>BMW</option>
                        <option>BYD</option>
                        <option>CHEVROLET</option>
                        <option>CITROEN</option>
                        <option>DFSK</option>
                        <option>DS</option>
                        <option>FERRARI</option>
                        <option>FERRARI (FCA)</option>
                        <option>FIAT</option>
                        <option>FORD</option>
                        <option>HONDA</option>
                        <option>HYUNDAI</option>
                        <option>INFINITI</option>
                        <option>ISUZU</option>
                        <option>JAGUARC</option>
                        <option>JEEP</option>
                        <option>JEEP (FIAT)</option>
                        <option>KIA</option>
                        <option>LADA</option>
                        <option>LAMBORGHINI</option>
                        <option>LANCIA</option>
                        <option>LEXUS</option>
                        <option>MAHINDRA</option>
                        <option>MAZDA</option>
                        <option>MERCEDES</option>
                        <option>MINI</option>
                        <option>MITSUBISHI</option>
                        <option>NISSAN</option>
                        <option>PORSCHE</option>
                        <option>SEAT</option>
                        <option>SMART</option>
                        <option>SUZUKI</option>
                        <option>TOYOTA</option>
                        <option>VOLKSWAGEN</option>
                        <option>VOLVO</option>
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
                    <input type="text" value="{{$auto->modelo}}" name="modelo" placeholder="Modelo">
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
