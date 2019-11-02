<?php
class actividad_model{
    private $db;
    private $rol;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->actividad=array();
    }
    public function get_funcion(){
        $consulta=$this->db->query("select * from usuarios;");
        while($filas=$consulta->fetch_assoc()){
            $this->rol[]=$filas;
        }
        return $this->rol;
    }
}
?>

