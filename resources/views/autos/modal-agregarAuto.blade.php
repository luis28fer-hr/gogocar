<form action="{{route('viajes.auto.guardar')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal modal-agregarAuto" id="modal-autoCrear">
    <div class="__header">
        <div class="__icon">
            <i class="fa-solid fa-car"></i>
        </div>
        <div class="__cerrar">
            <a onclick="cerrarNuevoAuto()"><i class="fa-solid fa-xmark"></i></a>
        </div>
    </div>
    <div class="__body">
        <p class="__titulo">Agregar un nuevo auto</p>
        <div>
            <label>Datos de vehiculo:</label>
            <div class="__horario">
                <input type="text" name="placa" title="Numero de placa" placeholder="Numero de placa" value="{{old('placa')}}">
                <span> - </span>
                <input type="text" name="version" title="Version" placeholder="Version" value="{{old('version')}}">
            </div>
            <div class="__horario">
                <span class="error">{{$errors->first('placa')}}</span>
                <span>  </span>
                <span class="error">{{$errors->first('version')}}</span>
            </div>

            <div class="__horario">
                <select name="marca" id="marca">
                    <option value="" selected disabled>Seleccione la marca</option>
                </select>
                <span> - </span>
                <input type="text" title="Capacidad del vehiculo" name="capacidad" placeholder="Capacidad" value="{{old('capacidad')}}">
            </div>

            <div class="__horario">
                <span class="error">{{$errors->first('marca')}}</span>
                <span>  </span>
                <span class="error">{{$errors->first('capacidad')}}</span>
            </div>

            <div class="__horario">
                <select name="modelo" id="modelo">
                    <option value="" selected disabled>Seleccione el modelo</option>
                </select>
            </div>
            <div class="__horario">
                <span class="error">{{$errors->first('modelo')}}</span>
            </div>
            <div class="__horario">
                <input type="file" value="" name="foto" placeholder="Imagen" accept="image/*">
            </div>
            <div class="__horario">
                <span class="error">{{$errors->first('foto')}}</span>
            </div>

        </div>

    </div>
    <div class="__footer">
        <div class="__botones">
            <a onclick="cerrarNuevoAuto()" class="__btn __cancelar">Cancelar</a>
            <button type="submit" class="__btn __confirmar">Confirmar</button>
        </div>
    </div>
</div>

</form>
