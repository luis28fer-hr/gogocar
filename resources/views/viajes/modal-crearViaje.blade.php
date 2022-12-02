<form action="{{route('viajes.guardar')}}" method="POST">
    @csrf
    <div class="modal" id="modal-agregarViaje">
    <div class="__header">
        <div class="__icon">
            <i class="fa-solid fa-route"></i>
        </div>
        <div class="__cerrar">
            <a href="#cerrar"><i class="fa-solid fa-xmark"></i></a>
        </div>
    </div>
    <div class="__body">
        <p class="__titulo">Crear un nuevo viaje</p>
        <div>
            <label>Recorrido:</label>
            <input type="text" value="" placeholder="Punto de salida">
            <input type="text" value="" placeholder="Punto de llegada">
        </div>
        <div>
            <label>Horario:</label>
            <select name="" id="">
                <option value="" selected disabled>Seleccione el tipo de viaje</option>
                <option value="">Ida</option>
                <option value="">Vuelta</option>
                <option value="">Redondo</option>
            </select>
            <div class="__horario">
                <input type="time" name="" id="" title="Hora de ida">
                <span> - </span>
                <input type="time" title="Hora de vuelta">
            </div>
            <div class="__dias">
                <div>
                    <input type="checkbox">
                    <span>L</span>
                </div>
                <div>
                    <input type="checkbox">
                    <span>M</span>
                </div>
                <div>
                    <input type="checkbox">
                    <span>M</span>
                </div>
                <div>
                    <input type="checkbox">
                    <span>J</span>
                </div>
                <div>
                    <input type="checkbox">
                    <span>V</span>
                </div>
                <div>
                    <input type="checkbox">
                    <span>S</span>
                </div>

            </div>
        </div>
        <div>
            <label>Capacidad:</label>
            <input type="text" value="" placeholder="Cantidad de pasajeros">
            <select name="" id="">
                <option value="" selected disabled>Seleccione un vehiculo</option>
                <option value="">sccac</option>
                <option value="">vsda</option>
            </select>
        </div>
    </div>
    <div class="__footer">
        <div class="__botones">
            <a href="#cerrar" class="__btn __cancelar">Cancelar</a>
            <button href="" type="submit" class="__btn __confirmar">Confirmar</button>
        </div>
    </div>
</div>

</form>
