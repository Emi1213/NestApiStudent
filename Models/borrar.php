<?php
class crudB{
    public static function BorrarEstudiantes($cedula){
        include_once('conexion.php');
        $objeto = new conexion();
        $conectar = $objeto ->conectar();
        $cedula=$_GET["cedula"];
        $borrarSql = "DELETE FROM estudiante WHERE cedula='$cedula'";
        $resultado = $conectar -> prepare($borrarSql);
        $resultado->execute();
        echo json_encode($resultado);
        $conectar->commit();
    }
}