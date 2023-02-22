@extends('solicitudes.solicitudes')
@section('contenido_solicitudes')

<p class="__bienvenida">Hola xxxxxxxxxxxxxxxxxxx. Se muestran los resultados de los raites que te has
    postulado como pasajero.</p>
<div class="__contenedor">
    <div class="__tarjeta __activoBorde __uno">
        <div class="__img">
            <img src="https://acroadtrip.blob.core.windows.net/catalogo-imagenes/xl/RT_V_406bc2a2cdae482eb7284d335c70440d.jpg"
                alt="">
        </div>
        <div class="__descripcion">
            <div><i class="fa-solid fa-circle __activoEstatus"></i>
                <p>Estatus</p>
            </div>
            <div><i class="fa-sharp fa-solid fa-face-smile"></i>
                <p>Nombre del conductor</p>
            </div>
            <div><i class="fa-solid fa-list"></i>
                <p>Tipo de viaje</p>
            </div>
            <div><i class="fa-solid fa-location-dot"></i>
                <p>Punto de salida - UPQ</p>
            </div>
            <div><i class="fa-solid fa-calendar-days"></i>
                <p>L M M J V S D</p>
            </div>
            <div><i class="fa-solid fa-clock"></i>
                <p>Hora</p>
            </div>
            <div><i class="fa-solid fa-user-plus"></i>
                <p>Pasajeros 2/4</p>
            </div>
            <div><i class="fa-solid fa-calendar"></i>
                <p>Fecha de publicacion</p>
            </div>
        </div>
        <div class="__botones-solicitud">
            <a class="__mensaje" href=""><i class="fa-brands fa-whatsapp"></i></a>
        </div>
    </div>
    <div class="__cuerpo __activoBorde">
        <div class="__encabezado">
            <div>
                <i class="fa-solid fa-circle __activoEstatus"></i>
                <p>Estatus</p>
            </div>
            <p>Codigo de viaje: ############</p>
        </div>
        <div class="__datos">
            <div>
                <div class="__titulo">
                    <i class="fa-solid fa-user"></i>
                    <p>Datos del conductor</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Nombre:</p>
                    <p>Ricardo Colin Maldonado</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Matricula:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Correo:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Tipo:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Telefono:</p>
                    <p>XXXXXX</p>
                </div>
            </div>
            <div>
                <div class="__titulo">
                    <i class="fa-sharp fa-solid fa-car-side"></i>
                    <p>Datos del vehiculo</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Placa:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Modelo:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Version:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Capacidad:</p>
                    <p>XXXXXX</p>
                </div>
            </div>
        </div>
        <div class="__datos">
            <div>
                <div class="__titulo">
                    <i class="fa-solid fa-user"></i>
                    <p>Tus datos</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Nombre:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Matricula:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Correo:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Tipo:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Telefono:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <i class="__mensaje"> * Tus datos son visibles para el conductor *</i>
                </div>
            </div>
            <div>
                <div class="__titulo">
                    <i class="fa-solid fa-user-group"></i>
                    <p>Datos de pasajeros</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Nombre:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Nombre:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Nombre:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Nombre:</p>
                    <p>XXXXXX</p>
                </div>
            </div>
        </div>
        <div class="__botones">
            <a href="#modal-cancelarViaje"><i class="fa-solid fa-xmark"></i> Cancelar</a>
        </div>
    </div>
</div>
<div class="__contenedor">
    <div class="__tarjeta __llenoBorde __uno">
        <div class="__img">
            <img src="https://acroadtrip.blob.core.windows.net/catalogo-imagenes/xl/RT_V_406bc2a2cdae482eb7284d335c70440d.jpg"
                alt="">
        </div>
        <div class="__descripcion">
            <div><i class="fa-solid fa-circle __llenoEstatus"></i>
                <p>Estatus</p>
            </div>
            <div><i class="fa-sharp fa-solid fa-face-smile"></i>
                <p>Nombre del conductor</p>
            </div>
            <div><i class="fa-solid fa-list"></i>
                <p>Tipo de viaje</p>
            </div>
            <div><i class="fa-solid fa-location-dot"></i>
                <p>Punto de salida - UPQ</p>
            </div>
            <div><i class="fa-solid fa-calendar-days"></i>
                <p>L M M J V S D</p>
            </div>
            <div><i class="fa-solid fa-clock"></i>
                <p>Hora</p>
            </div>
            <div><i class="fa-solid fa-user-plus"></i>
                <p>Pasajeros 2/4</p>
            </div>
            <div><i class="fa-solid fa-calendar"></i>
                <p>Fecha de publicacion</p>
            </div>
        </div>
        <div class="__botones-solicitud">
            <a class="__mensaje" href=""><i class="fa-brands fa-whatsapp"></i></a>
        </div>
    </div>
    <div class="__cuerpo __llenoBorde">
        <div class="__encabezado">
            <div>
                <i class="fa-solid fa-circle __llenoEstatus"></i>
                <p>Estatus</p>
            </div>
            <p>Codigo de viaje: ############</p>
        </div>
        <div class="__datos">
            <div>
                <div class="__titulo">
                    <i class="fa-solid fa-user"></i>
                    <p>Datos del conductor</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Nombre:</p>
                    <p>Ricardo Colin Maldonado</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Matricula:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Correo:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Tipo:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Telefono:</p>
                    <p>XXXXXX</p>
                </div>
            </div>
            <div>
                <div class="__titulo">
                    <i class="fa-sharp fa-solid fa-car-side"></i>
                    <p>Datos del vehiculo</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Placa:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Modelo:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Version:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Capacidad:</p>
                    <p>XXXXXX</p>
                </div>
            </div>
        </div>
        <div class="__datos">
            <div>
                <div class="__titulo">
                    <i class="fa-solid fa-user"></i>
                    <p>Tus datos</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Nombre:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Matricula:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Correo:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Tipo:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Telefono:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <i class="__mensaje"> * Tus datos son visibles para el conductor *</i>
                </div>
            </div>
            <div>
                <div class="__titulo">
                    <i class="fa-solid fa-user-group"></i>
                    <p>Datos de pasajeros</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Nombre:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Nombre:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Nombre:</p>
                    <p>XXXXXX</p>
                </div>
                <div class="__contenido">
                    <p class="__campo">Nombre:</p>
                    <p>XXXXXX</p>
                </div>
            </div>
        </div>
        <div class="__botones">
            <a href="#modal-cancelarViaje"><i class="fa-solid fa-xmark"></i> Cancelar</a>
        </div>
    </div>
</div>
@endsection

