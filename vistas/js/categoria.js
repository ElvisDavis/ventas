var tabla;

//creo un funcion int que se ejecuta al incio de la aplicación 
function init(){
    mostrarform(false);
}

//Creo una función para limpiar el formulario
function limpiar(){
    $("#idcategoria").val("");
    $("#nombre").val("");
    $("#descripcion").val("");
}

//Función para mostrar  el formulario
function mostrarform(flag){
    limpiar();
    if(flag){
        $("#listadoregistro").hide();
        $("#formularioregistros").show();
        $("#btnGuardar").prop("disabled", false);
        $("#btnagregar").hide();
    }else{
        $("#listadoregistro").show();
        $("#formularioregistros").hide();
        $("#btnagregar").show();
    }
}

//función para cancelar el formulario
function cancelarform(){
    limpiar();
    mostrarform(false);
}

//ejecutamos la función init
init();