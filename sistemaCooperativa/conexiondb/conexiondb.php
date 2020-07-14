<?php

class Conexion{
        private $conexion=null;   
        private $host     =   'localhost';
        private $db       =   'cooperativadb';
        private $user     =   'root';
        private $password =   'WEcl0105801567';

    //public static function conectar(){
      // $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
        //self::$conexion=new PDO('mysql:host=localhost;dbname=cooperativadb','root','',$pdo_options);
        //return self::$conexion;
    //}
    
     public function conectar()
    {
        $consql="mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
        try{
            $this->conexion =   new PDO($consql,$this->user,$this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo 'conectado';
        }catch(Exception $e){
            $this->conexion='Error de conexion';
            echo "ERROR: ".$e->getMessage();
            //echo 'conectado';
        }catch(Exception $e){
            $this->conexion='Error de conexion';
            //echo "ERROR: ".$e->getMessage();
        }finally{
            return $this->conexion;
        }
     } 
      
}
$conec=new Conexion();
//$conec->conectar();
?>
?>
