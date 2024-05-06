<?php
class conexion{
    public function conectar(){
define("server","localhost");
define("db","prueba");
define("user","root");
define("psw","");
$opc = array(PDO::MYSQL_ATTR_INIT_COMMAND > 'SET NAMES utf8');
try{
$con = new PDO("mysql: host=".server.";dbname=".db,user,psw,$opc);
return $con;
}
catch (Exception $e) 
{
die("error conexion".$e->getMessage());
}
}
}
        