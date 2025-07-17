<?php
//Incluimos el archivo Categoria.php
require_once "../modelos/Categoria.php";
//Instanciamos la clase Categoria
$categoria= new Categoria();

//Definimos una variable para almacenar el idcategoria
$idcategoria=isset($_POST["idcategoria"]) ? limpiarCadena($_POST["idcategoria"]) : "";
//Definimos una variable para alamcenar el nombre
$nombre = isset($_POST["nombre"]) ? limpiarCadena($_POST["nombre"]):"";
//Definimos una variable para almacenar la descripción
$descripcion = isset($_POST["descripcion"]) ? limpiarCadena($_POST["descripcion"]) : "";

//Generamos un switch para determinar la acción a realizar
switch ($_GET["op"]){
    case 'guardaryeditar':
        if(empty($idcategoria)){
            $rspta = $categoria->insertar($nombre, $descripcion);
            echo $rspta ? "Categoria registrada con éxito" : "No se pudo registrar la categoria a la base de datos";
        }
        else{
            $rspta = $categoria->editar($idcategoria, $nombre, $descripcion);
            echo $rspta ? "Categoria editada con éxito" : "No se pudo editar la categoria";
        }
        break;
        //Si elijo la opci´pon desactivar ejecuta 
        // este sección del código
        case 'desactivar':
            $rspta = $categoria->desactivar($idcategoria);
            echo $rspta ? "Categoria desactivada" : "No se pudo desactivar";
            break;
        case 'activar':
            $rspta = $categoria->activar($idcategoria);
            echo $rspta ? "Categoria activada" : "No se pudo activa";
            break;
        case 'mostrar':
            $rspta = $categoria->mostrar($idcategoria);
            //Convertir el rsultado en json
            echo json_encode($rspta);
            break;
         // Creamos el caso listar   
        case 'listar':
            $rspta =$categoria->listar();
            //Vamos a declara un array para guardar 
            // /toda la información en el arreglo
            $data=Array();
            while($reg=$rspta->fetch_object()){
                $data[]=array(
                    "0"=>$reg->idcategoria,
                    "1"=>$reg->nombre,
                    "2"=>$reg->descripcion,
                    "3"=>($reg->condicion) ? '<span class="label bg-green">Activado</span>':
                      '<span class="label bg-red">Desactivado</span>',
                    "4"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idcategoria.')"><i class="fa fa-pencil"></i></button>'.
                     ' <button class="btn btn-danger" onclick="desactivar('.$reg->idcategoria.')"><i class="fa fa-close"></i></button>':
                     ' <button class="btn btn-warning" onclick="mostrar('.$reg->idcategoria.')"><i class="fa fa-pencil"></i></button>'.
                     ' <button class="btn btn-primary" onclick="activar('.$reg->idcategoria.')"><i class="fa fa-check"></i></button>'

                );
            }
            //VAmos a generar información sobre datatable
            $results=array(
                "sEcho"=>1, //Información para el datatable
                "iTotalRecords"=>count($data), //enviamos el total de registros al datable
                "iTotalDisplayRecords"=> count($data), //enviamos el total de registros a visualizar
                "aaData"=>$data);
                echo json_encode($results);
                break;

}
?>