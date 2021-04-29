<?php
class model_productos{
    private $db;
    private $result;
 
    public function __construct(){
        $this->db=DatabaseConex::conex();
        //$this->result=array();
    }
    
    public function read_query($campos,$tabla, $condicion){
        $resultado = $this->db->query("SELECT $campos FROM $tabla $condicion") or die($this->db->error);
        if($resultado)
            return $resultado->fetch_all(MYSQLI_ASSOC);
        return false;
    }
    
    public function limpiar_var($variable)
    {
        $var=$this->db->real_escape_string($variable);
        return $var;
    }
    public function query_upd_inser_del($query){
        $resultado = $this->db->query(" $query ") or die($this->db->error);
        if($resultado)
            return true;
        return false;
    }
    
}
?>
