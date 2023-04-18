<form action="{{route('actualizar.perfil')}}" method="POST">
    @csrf
    <div id="modal-miPerfil" class="modal modal-miperfil">
        <div class="__header">
            <div class="__icon">
                <i class="fa-regular fa-user"></i>
            </div>
            <div class="__cerrar">
                <a onclick="cerrarMiperfil()"><i class="fa-solid fa-xmark"></i></a>
            </div>
        </div>
        <div class="__body">

            <p class="__titulo" style="margin-left: 0rem">Mi perfil</p>
            <div>
                <label>Matricula:</label>
                <input type="text" name="matricula" value="{{Auth::user()->matricula}}" placeholder="Matricula">
                <span class="error">{{$errors->first('matricula')}}</span>
            </div>
            <div>
                <label>Nombre:</label>
                <input type="text" name="nombre" value="{{Auth::user()->name}}" placeholder="Nombre">
                <span class="error">{{$errors->first('nombre')}}</span>

            </div>
            <div>
                <input type="text" name="paterno" value="{{Auth::user()->apellido_p}}" placeholder="Apellido Paterno">
                <span class="error">{{$errors->first('paterno')}}</span>

            </div>
            <div>
                <input type="text" name="materno" value="{{Auth::user()->apellido_m}}" placeholder="APellido Materno">
                <span class="error">{{$errors->first('materno')}}</span>

            </div>
            <div>
                <label>Telefono:</label>
                <input type="text" name="telefono" value="{{Auth::user()->telefono}}" placeholder="Telefono">
                <span class="error">{{$errors->first('telefono')}}</span>

            </div>
            <div>
                <label>Correo Electronico:</label>
                <input type="text" name="correo" value="{{Auth::user()->email}}" placeholder="Correo electronico">
                <span class="error">{{$errors->first('correo')}}</span>

            </div>
        </div>

        <div class="__footer">
            <div class="__botones">
                <a onclick="cerrarMiperfil()" class="__btn __cancelar">Cancelar</a>
                <button href="" type="submit" class="__btn __confirmar">Confirmar</button>
            </div>
        </div>
    </div>

</form>
