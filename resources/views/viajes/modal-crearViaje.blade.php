<form action="{{ route('viajes.personal.crearviaje') }}" method="POST">
    @csrf
    <div id="modal-agregarViaje" class="modal">
        <div class="__header">
            <div class="__icon">
                <i class="fa-solid fa-route"></i>
            </div>
            <div class="__cerrar">
                <a onclick="cerrarNuevoViaje()"><i class="fa-solid fa-xmark"></i></a>
            </div>
        </div>
        <div class="__body">
            <p class="__titulo">Crear un nuevo viaje</p>
            <div>
                <label>Punto de encuentro:</label>
                <input type="text" name="encuentro" value="{{old('encuentro')}}" placeholder="Ubicacion de punto de encuentro">
                <span class="error">{{$errors->first('encuentro')}}</span>
            </div>

            <div>
                <label>Horario:</label>
                <select name="tipo">
                    <option selected disabled>Seleccione el tipo de viaje</option>
                    <option value="redondo">Redondo</option>
                    <option value="ida">Ida</option>
                    <option value="vuelta">Vuelta</option>
                </select>
                <span class="error">{{$errors->first('tipo')}}</span>

                <div class="__horario">
                    <input type="time" name="ida" value="{{old('ida')}}" title="Hora de ida">
                    <span> - </span>
                    <input type="time" name="vuelta" value="{{old('vuelta')}}" title="Hora de vuelta">
                </div>
                <div class="__dias">
                    <div>
                        <input type="checkbox" name="dias[]" value="lunes">
                        <span>L</span>
                    </div>
                    <div>
                        <input type="checkbox" name="dias[]" value="martes">
                        <span>M</span>
                    </div>
                    <div>
                        <input type="checkbox" name="dias[]" value="miercoles">
                        <span>M</span>
                    </div>
                    <div>
                        <input type="checkbox" name="dias[]" value="jueves">
                        <span>J</span>
                    </div>
                    <div>
                        <input type="checkbox" name="dias[]" value="viernes">
                        <span>V</span>
                    </div>
                    <div>
                        <input type="checkbox" name="dias[]" value="sabado">
                        <span>S</span>
                    </div>
                </div>
            </div>
            <div>
                <label>Vehiculo:</label>

                <select name="vehiculo">
                    <option selected disabled>Seleccione un vehiculo</option>
                    @foreach ($autos as $auto)
                    <option value="{{$auto->id}}">{{$auto->marca}} {{$auto->modelo}} {{$auto->version}}</option>

                    @endforeach
                </select>
                <span class="error">{{$errors->first('vehiculo')}}</span>

            </div>
        </div>
        <div class="__footer">
            <div class="__botones">
                <a onclick="cerrarNuevoViaje()" class="__btn __cancelar">Cancelar</a>
                <button href="" type="submit" class="__btn __confirmar">Confirmar</button>
            </div>
        </div>
    </div>

</form>
