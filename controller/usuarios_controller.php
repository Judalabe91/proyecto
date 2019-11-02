<?php
//Llamada al modelo
require_once("model/rol_model.php");
$rol1=new rol_model();
$datos=$rol1->get_funcion();
 
//Llamada a la vista
require_once("view/rol_view.phtml");
?>
