<form   action="../controllers/controller_get.php" method="POST"  enctype="multipart/form-data">
<table align="center">
    <tr>
    <th><label for="nombre del producto" ><b>Nombre de Producto:</b></label></th>
    </tr>
    <tr>
     <th>
        <input type="text" aria-describedby="Digite el nombre" name="nombre" required> 
    </th>     
    </tr>
    <tr>
    <th><label for="referencia" ><b>Referencia:</b></label></th>
    </tr>
    <tr>
     <th>
        <input type="text" aria-describedby="Digite la referencia" name="referencia" required> 
    </th>     
    </tr>    
    <tr>
    <th><label for="precio" ><b>precio:</b></label></th>
    </tr>
    <tr>
     <th>
        <input type="text" aria-describedby="Digite el precio" name="precio" required> 
    </th>     
    </tr>    
    <tr>
    <th><label for="peso" ><b>peso:</b></label></th>
    </tr>
    <tr>
     <th>
        <input type="text" aria-describedby="Digite el peso" name="peso" required> 
    </th>     
    </tr>    
        <tr>
    <th><label for="categoria" ><b>categoria:</b></label></th>
    </tr>
    <tr>
     <th>
        <input type="text" aria-describedby="Digite la categoria" name="categoria" required> 
    </th>     
    </tr>
    </tr>    
    <tr>
    <th><label for="stock" ><b>stock:</b></label></th>
    </tr>
    <tr>
     <th>
        <input type="text" aria-describedby="Digite el stock" name="stock" required> 
    </th>     
    </tr>
    <tr>
    <th><label for="fecha creacion" ><b>Fecha creacion:</b></label></th>
    </tr>
    <tr>
     <th>
        <input type="date" aria-describedby="Digite la fecha de creación" name="fecha_creacion" required> 
    </th>     
    </tr>
    <tr>
    <th><label for="fecha de ultima venta" ><b>Fecha de ultima venta:</b></label></th>
    </tr>
    <tr>
     <th>
        <input type="date" aria-describedby="Digite la fecha de ultima venta" name="fecha_ult_vent" required>
        <input  name="crud" type="hidden" value="1">
    </th>     
    </tr>
    <tr>
     <th>
        <button type="submit" >Agregar</button> 
    </th>     
    </tr>
    </table>
    </form>
    
      