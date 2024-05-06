<?php
class crudA
{
    public static function ActualizarEstudiantes()
    {
        include_once ('conexion.php');
        header('Content-Type: application/json');
        $objeto = new conexion();
        $conectar = $objeto->conectar();
        $cedula = $_GET["cedula"];
        $nombre = $_GET["nombre"];
        $apellido = $_GET["apellido"];
        $direccion = $_GET["direccion"];
        $telefono = $_GET["telefono"];
        $actualizarSql = "UPDATE estudiante SET nombre='$nombre', apellido='$apellido', direccion='$direccion', telefono='$telefono' WHERE cedula = '$cedula' ";
        $resultado = $conectar->prepare($actualizarSql);
        $resultado->execute();
        echo json_encode($resultado);
        $conectar->commit();
    }
}