<?php
class crudS{
    public static function SeleccionarEstudiantes(){
        include_once('conexion.php');
        header('Content-Type: application/json');
        $objeto = new conexion();
        $conexion = $objeto->conectar();
        $sqlSelect = "Select * from estudiante";
        $resultado = $conexion->prepare($sqlSelect);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        $dataJs = json_encode($data);
        print_r($dataJs);
    }
}
