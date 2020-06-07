<?php

<<<<<<< HEAD

class Conexion{
    private static $conexion=null;
    private function __construct(){}

    public static function conectar(){
        $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
        self::$conexion=new PDO('mysql:host=localhost;dbname=cooperativadb','root','',$pdo_options);
        return self::$conexion;
    }
=======
    public function __construct()
    {
        $this->host     =   'localhost';
        $this->db       =   'cooperativadb';
        $this->user     =   'root';
        $this->password =   '';
        $this->conexion =   new mysqli($this->host, $this->user,$this->password,$this->db);
        $this->conexion->set_charset('utf8mb4');
        
    } 
    
>>>>>>> 6719350e1cfb7dda9e6b64100bf6f44ff71c0796
}