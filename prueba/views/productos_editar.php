<?php
                    foreach ($result as $value){ ?>
                    
<form   action="../controllers/controller_get.php" method="POST"  enctype="multipart/form-data">
<table align="center">
    <tr>
    <th><label for="nombre del producto" ><b>Nombre de Producto:</b></label></th>
    </tr>
    <tr>
     <th>
        <input type="text" aria-describedby="Digite el nombre" value="<?php echo $value['nombre_producto'] ?>" name="nombre" required> 
    </th>     
    </tr>
    <tr>
    <th><label for="referencia" ><b>Referencia:</b></label></th>
    </tr>
    <tr>
     <th>
        <input type="text" aria-describedby="Digite la referencia"  value="<?php echo $value['referencia'] ?>" name="referencia" required> 
    </th>     
    </tr>    
    <tr>
    <th><label for="precio" ><b>precio:</b></label></th>
    </tr>
    <tr>
     <th>
        <input type="text" aria-describedby="Digite el precio" value="<?php echo $value['precio'] ?>" name="precio" required> 
    </th>     
    </tr>    
    <tr>
    <th><label for="peso" ><b>peso:</b></label></th>
    </tr>
    <tr>
     <th>
        <input type="text" aria-describedby="Digite el peso" name="peso" value="<?php echo $value['peso'] ?>" required> 
    </th>     
    </tr>    
        <tr>
    <th><label for="categoria" ><b>categoria:</b></label></th>
    </tr>
    <tr>
     <th>
        <input type="text" aria-describedby="Digite la categoria" name="categoria" value="<?php echo $value['categoria'] ?>" required> 
    </th>     
    </tr>
    </tr>    
    <tr>
    <th><label for="stock" ><b>stock:</b></label></th>
    </tr>
    <tr>
     <th>
        <input type="text" aria-describedby="Digite el stock" value="<?php echo $value['stock'] ?>" name="stock" required> 
    </th>     
    </tr>
    <tr>
    <th><label for="fecha creacion" ><b>Fecha creacion:</b></label></th>
    </tr>
    <tr>
     <th>
        <input type="date" aria-describedby="Digite la fecha de creación" name="fecha_creacion" value="<?php echo $value['fecha_creacion'] ?>" required> 
    </th>     
    </tr>
    <tr>
    <th><label for="fecha de ultima venta" ><b>Fecha de ultima venta:</b></label></th>
    </tr>
    <tr>
     <th>
        <input type="date" aria-describedby="Digite la fecha de ultima venta"  value="<?php echo $value['fecha_ultim_venta'] ?>" name="fecha_ult_vent" required>
        <input  name="crud" type="hidden" value="2">
        <input  name="id" type="hidden" value="<?php echo $value['id'] ?>">
    </th>     
    </tr>
    <tr>
     <th>
        <button type="submit" >editar</button> 
    </th>     
    </tr>
    </table>
    </form>
    <?php
                } ?>