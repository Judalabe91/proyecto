<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("remotemysql.com", "iI9K0gbcQV", "iI9K0gbcQV", "4qNGhebfo9");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>
