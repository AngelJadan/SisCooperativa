<?php
class conexion{
    private $host;
    private $db;
    private $user;
    private $password;
    public $conexion;

    public function __construct()
    {
        $this->host     =   'localhost';
        $this->db       =   'cooperativadb';
        $this->user     =   'root';
        $this->password =   '';
        $this->conexion =   new mysqli($this->host, $this->user,$this->password,$this->db);
        $this->conexion->set_charset('utf8mb4');
        
    } 
    public function hola()
    {
        # code...
    }
}