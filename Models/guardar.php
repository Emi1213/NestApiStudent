<?php
class crudG{
    public static function GuardarEstudiantes(){
        include_once ('conexion.php');
        header('Content-Type: application/json');
        $data = json_decode(file_get_contents('php://input'), true);
        $cedula = $data['cedula'];
        $nombre = $data['nombre'];
        $apellido = $data["apellido"];
        $direccion = $data["direccion"];
        $telefono = $data["telefono"];
        $objeto = new conexion();
        $conectar = $objeto -> conectar();
        $insertSql="INSERT INTO estudiante (cedula, nombre, apellido, direccion, telefono) VALUES ('$cedula','$nombre','$apellido','$direccion','$telefono')";
        $resultado = $conectar->prepare($insertSql);
        $resultado->execute();
        echo json_encode($resultado);
        $conectar->commit();
    }
}