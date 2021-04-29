<?php
include "../db/db_con.php";
$id=$_GET['id'];
$crud=$_GET['crud'];

require_once( "../models/model_productos.php");
$prod=new model_productos();
$condicion="where id=".$id;
$result=$prod->read_query("*","productos",$condicion);
//var_dump($result);
include "../views/productos_editar.php";
?>
