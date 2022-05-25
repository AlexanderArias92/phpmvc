<?php


   class Vista_modelo {
 
  private $db;
  private $user;
  
  public function __construct(){
  
    require_once("model/conectar.php");
    $this->db=Conectar::conexion();
    $this->user=array();
  
  
  
  
  }
 
       public function get_vista() {
        
        $consulta=$this->db->query("select * from user");
        
        while($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
              $this->user[]=$filas;
 
   }
   return $this->user;
}
}
?>