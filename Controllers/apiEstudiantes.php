<?php
include_once "../Models/borrar.php";
include_once "../Models/consulta.php";
include_once "../Models/guardar.php";
include_once "../Models/actualizar.php";
include_once "../Models/consultaporCurso.php";
$opc = $_SERVER['REQUEST_METHOD'];
switch($opc){
    case "GET":
        if(isset($_GET['curso']) && isset($_GET['paralelo'])){
            crudCC::ConsultarPorCurso();
        }else{
            crudS::SeleccionarEstudiantes();
        }
        break;
    case "POST":
        crudG::GuardarEstudiantes();
        break;
    case "PUT":
         crudA::ActualizarEstudiantes();
            break;
    case "DELETE":
        $cedula=$_GET['cedula'];
        crudB::BorrarEstudiantes($cedula);
        break;
}