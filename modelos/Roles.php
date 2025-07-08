<?php
//Incluimos inicialmente la conexióin a la base de datos
require "../config/Conexion.php";


//creamos la clase Roles
class Roles{

    //Implementamos un constructor
    public function __construct(){

    }

    //Definimos una funcion para insertar datos en la tabla roles
    public function insertar($nombre){
        //Definimos una variable para almacenar la consulta
        $sql = "INSERT INTO roles (nombre, condicion)
        VALUES ('$nombre', 1)";
        //Retornamos el resultado de la consulta
        return ejecutarConsulta($sql);
    }
}





?>