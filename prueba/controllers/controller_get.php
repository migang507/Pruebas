<?php
include "../db/db_con.php";
require_once( "../models/model_productos.php");
$prod=new model_productos();

if(isset($_POST['crud']))
{
    if($_POST['crud']==1)
    {
      if($_POST['nombre'] != null && $_POST['referencia'] != null && $_POST['precio'] != null && $_POST['peso'] != null  && $_POST['categoria'] != null && $_POST['stock'] != null && $_POST['fecha_creacion'] != null && $_POST['fecha_ult_vent'] != null  )
       {
        $nombre=$_POST['nombre'];
        $ref=$_POST['referencia'];
        $precio=$_POST['precio'];
        $peso=$_POST['peso'];
        $categoria=$_POST['categoria'];
        $stock=$_POST['stock'];
        $fecha_creacion=$_POST['fecha_creacion'];
        $fecha_ult_vent=$_POST['fecha_ult_vent'];
         $sql = "INSERT INTO productos (nombre_producto,referencia,precio,peso,categoria,stock,fecha_creacion,fecha_ultim_venta) VALUES ('".$nombre. "','".$ref."','".$precio."','".$peso."','".$categoria."','".$stock."','".$fecha_creacion."','".$fecha_ult_vent."')";
       $confirmacion=$prod->query_upd_inser_del($sql);
        if($confirmacion)
        {
            echo '<script>setTimeout(function(){ alert("creado exitosamente"); window.location="../index.php";}, 4000);</script>';
             exit(); 
        }
        else
        {
               echo '<script>setTimeout(function(){ alert("no fue posible crearlo"); window.location="../index.php";}, 4000);</script>';
             exit();
        }
       }    
    }
    if($_POST['crud']==2)
    {
      if($_POST['nombre'] != null && $_POST['referencia'] != null && $_POST['precio'] != null && $_POST['peso'] != null  && $_POST['categoria'] != null && $_POST['stock'] != null && $_POST['fecha_creacion'] != null && $_POST['fecha_ult_vent'] != null && $_POST['id'] != null)
       {
        $id=$_POST['id'];  
        $nombre=$_POST['nombre'];
        $ref=$_POST['referencia'];
        $precio=$_POST['precio'];
        $peso=$_POST['peso'];
        $categoria=$_POST['categoria'];
        $stock=$_POST['stock'];
        $fecha_creacion=$_POST['fecha_creacion'];
        $fecha_ult_vent=$_POST['fecha_ult_vent'];
        $sql = "UPDATE productos SET nombre_producto = '" .$nombre . "' ,referencia = '" .$ref."' ,precio = '".$precio."' ,peso= '".$peso."' ,categoria='".$categoria."',stock='".$stock."',fecha_creacion='".$fecha_creacion."', fecha_ultim_venta='".$fecha_u."' WHERE id = '" . $id . "'";
        
        $confirmacion=$prod->query_upd_inser_del($sql);
        if($confirmacion)
        {
            echo '<script>setTimeout(function(){ alert("editado exitosamente"); window.location="../index.php";}, 4000);</script>';
             exit(); 
        }
        else
        {
               echo '<script>setTimeout(function(){ alert("no fue posible editarlo"); window.location="../index.php";}, 4000);</script>';
             exit();
        }
       }    
    }
    if($_GET['crud']==3)
    {
        if($_GET['id']!= null)
        {
         $sql =  "DELETE FROM productos WHERE id = '$id'";
         $confirmacion=$prod->query_upd_inser_del($sql);
        if($confirmacion)
        {
            echo '<script>setTimeout(function(){ alert("eliminado exitosamente"); window.location="../index.php";}, 4000);</script>';
             exit(); 
        }
        else
        {
               echo '<script>setTimeout(function(){ alert("no fue posible eliminarlo"); window.location="../index.php";}, 4000);</script>';
             exit();
        }
        }
    }

}

?>
