//creo un variable tabla
var tabla;

//creo un funcion int que se ejecuta al incio de la aplicación 
function init() {
    mostrarform(false);
    listar();

    //llamamos a la función guardar y editar
    $("#formulario").on("submit", function (e) {
        guardaryeditar(e);
    });
}

//Creo una función para limpiar el formulario
function limpiar() {
    $("#idcategoria").val("");
    $("#nombre").val("");
    $("#descripcion").val("");
}

//Función para mostrar  el formulario
function mostrarform(flag) {
    limpiar();
    if (flag) {
        $("#listadoregistro").hide();
        $("#formularioregistros").show();
        $("#btnGuardar").prop("disabled", false);
        $("#btnagregar").hide();
    } else {
        $("#listadoregistro").show();
        $("#formularioregistros").hide();
        $("#btnagregar").show();
    }
}

//función para cancelar el formulario
function cancelarform() {
    limpiar();
    mostrarform(false);
}

//Creamos una función para listar los datos de la base de datos
function listar() {
    tabla = $('#tbllistado').dataTable(
        {
            "aProcessing": true,// Activamos el procesamiento del datatable
            "aServerSide": true, //Paginación y filtado realizados por el servidor
            dom: 'Bfrtip', //Definimos los elementos del control de la tabbla
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdf'
            ],
            "ajax":
            {
                url: "../controladores/categoria.php?op=listar",
                type: "get",
                dataType: "json",
                error: function (e) {
                    console.log(e.responseText);
                }
            },
            "bDestroy": true,
            "iDisplayLength": 5, //Paginación
            "order": [[0, "desc"]] //Ordenar (columna, orden)

        }).DataTable();
}


// función para guardar y editar los datos
function guardaryeditar(e) {
    //No se activa la acción predeterminada del evento
    e.preventDefault();
    $("#btnGuardar").prop("disabled", true);
    var formData = new FormData($("#formulario")[0]);

    $.ajax({
        url: "../controladores/categoria.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function (datos) {
            bootbox.alert(datos);
            mostrarform(false);
            tabla.ajax.reload();
        }
    });
    limpiar();
}

//creamos una fución para mostrar los datos y editar
function mostrar(idcategoria) {
    $.post("../controladores/categoria.php?op=mostrar", { idcategoria: idcategoria }, function (data, status) {
        data = JSON.parse(data);
        mostrarform(true);

        $("#nombre").val(data.nombre);
        $("#descripcion").val(data.descripcion);
        $("#idcategoria").val(data.idcategoria);

    })
}

//Creamos una función para descativar la categoria
function desactivar(idcategoria){
    bootbox.confirm("¿Está seguro de desactivar la categoría?", function(result){
        if(result)
        {
            $.post("../controladores/categoria.php?op=desactivar", {idcategoria : idcategoria}, function(e){
                bootbox.alert(e);
                tabla.ajax.reload();
            });
        }
    })
}

//creamos una función para activar la categoría

function activar(idcategoria){
    bootbox.confirm("¿Está seguro de activar la categoría ?", function(result){
        if(result)
        {
            $.post("../controladores/categoria.php?op=activar", {idcategoria : idcategoria}, function(e){
                bootbox.alert(e);
                tabla.ajax.reload();
            })
        }
    })
}

//ejecutamos la función init
init();