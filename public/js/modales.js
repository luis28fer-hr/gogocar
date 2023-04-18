function nuevoViaje(){
    var modal = document.getElementById("modal-agregarViaje");
    modal.style.display = "block"
}

function cerrarNuevoViaje(){
    var modal = document.getElementById("modal-agregarViaje");
    modal.style.display = "none"
}

function nuevoAuto(){
    var modal = document.getElementById("modal-autoCrear");
    modal.style.display = "block"
}

function cerrarNuevoAuto(){
    var modal = document.getElementById("modal-autoCrear");
    modal.style.display = "none"
}

function editarAuto(id){
    var modal = document.getElementById("modal-autoEditar-" + id);
    modal.style.display = "block"
}

function cerrarEditarAuto(id){
    var modal = document.getElementById("modal-autoEditar-" + id);
    modal.style.display = "none"
}


function eliminarAuto(id){
    var modal = document.getElementById("modal-autoEliminar-" + id);
    modal.style.display = "block"
}

function cerrarEliminarAuto(id){
    var modal = document.getElementById("modal-autoEliminar-" + id);
    modal.style.display = "none"
}

function eliminarViaje(id){
    var modal = document.getElementById("modal-viajeEliminar-" + id);
    modal.style.display = "block"
}

function cerrarEliminarViaje(id){
    var modal = document.getElementById("modal-viajeEliminar-" + id);
    modal.style.display = "none"
}

function solicitarViaje(id){
    var modal = document.getElementById("modal-solicitarViaje-" + id);
    modal.style.display = "block"
}

function cerrarSolicitarViaje(id){
    var modal = document.getElementById("modal-solicitarViaje-" + id);
    modal.style.display = "none"
}

function cancelarSolicitud(id){
    var modal = document.getElementById("modal-cancelarViaje-" + id);
    modal.style.display = "block"
}

function cerrarCancelarSolicitud(id){
    var modal = document.getElementById("modal-cancelarViaje-" + id);
    modal.style.display = "none"
}


function miperfil(){
    var modal = document.getElementById("modal-miPerfil");
    modal.style.display = "block"
}

function cerrarMiperfil(){
    var modal = document.getElementById("modal-miPerfil");
    modal.style.display = "none"
}
