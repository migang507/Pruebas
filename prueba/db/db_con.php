<?php

class DatabaseConex {
    
       
    
    public static function conex(){
        
        /* DATABASE CONFIGURATION */
        $host = 'localhost';
        $dbname = 'id15786013_inventario_productos';
        $user = 'id15786013_mike';
        $pass = 'F5j?[Ri4*FnV9zg%';
        
        $conn= new mysqli($host, $user, $pass,$dbname) or die(mysql_error());
        $conn->query("SET NAMES 'utf8'");
        return $conn;
    }
    

}

?>