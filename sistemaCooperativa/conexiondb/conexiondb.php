<?php
<<<<<<< HEAD
    $host="127.0.0.1";
    $port=3306;
    $socket="";
    $user="root";
    $password="";
    $dbname="cooperativadb";
    
    $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
        or die ('Could not connect to the database server' . mysqli_connect_error());
    
    //$con->close();
=======

class Conexion{
        private $conexion=null;   
        private $host     =   'localhost';
        private $db       =   'cooperativadb';
        private $user     =   'root';
        private $password =   '';

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
        }finally{
            return $this->conexion;
        }
     } 
      
}
$conec=new Conexion();
//$conec->conectar();
>>>>>>> 0e514ccfb99c569266c3afdec40f2a52f3cb5298
?>