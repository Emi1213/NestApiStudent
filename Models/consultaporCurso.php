<?php
class crudCC{
    public static function ConsultarPorCurso(){
        include_once('conexion.php');
        header('Content-Type: application/json');
        $objeto = new conexion();
        $conexion = $objeto->conectar();
        $curso = $_GET["curso"];
        $paralelo = $_GET["paralelo"];
        $sqlSelect = "Select * from estudiante where curso = (SELECT id FROM cursos WHERE curso = '$curso' AND paralelo ='$paralelo')";
        $resultado = $conexion->prepare($sqlSelect);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        $dataJs = json_encode($data);
        print_r($dataJs);
    }
}