<?php
class Persona {
    private $codigo;
    private $nombre;
    private $apellido;
    private $identificacion;
    private $correo;
    private $direccion;
    private $telefono;

    public function __construct()
    {
    }
    public function setCodigo($codigo){
        $this->codigo=$codigo;
    }
    public function getCodigo(){
        return $this->codigo;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    public function getApelligo(){
        return $this->apellido;
    }
    public function setIdentificacion($identificacion){
        $this->identificacion=$identificacion;
    }
    public function getIdentificacion(){
        return $this->identificacion;
    }
    public function setCorreo($correo){
        $this->correo=$correo;
    }
    public function getCorreo(){
        return $this->correo;
    }
    public function setDireccion($direccion){
        $this->direccion=$direccion;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function setTelefono($telefono){
        $this->telefono=$telefono;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function validaCedula($identificacion){
    }
    public function validaCorreo($correo){
    }
}
?>