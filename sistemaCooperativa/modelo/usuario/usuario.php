<?php
include "../../conexiondb/conexiondb.php";
include "../../modelo/persona.php";

class Usuario extends Persona{
    $conexion=new Conexion();
    public function buscarUsuario($usuario,$password){
        $resultado=$conexion->query("SELECT * FROM usuarios WHERE usu_usuario=".$usuario." AND usu_password=".$password.";");
        $this->$resultado;
    }

}

?>