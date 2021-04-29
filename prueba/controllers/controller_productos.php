<?php
require_once( "models/model_productos.php");
$prod=new model_productos();

$result=$prod->read_query("*","productos","");
//var_dump($result);
include "views/productos_view.html";




?>