<?php
require_once "../../conexiondb/conexiondb.php";

class accesoModelo extends Conexion{
     
   public function __construct(){  }
   
   public function guardarAccesos($fechaIntento, $tipo, $obs, $usu){
    
    $sql = "INSERT INTO acessos (ace_fecha_intento, ace_tipo_acceso, ace_observaciones, usuarios_usu_usuario)  VALUES ('$fechaIntento', '$tipo', '$obs', '$usu')";
    $query=Conexion::conectar()->prepare($sql);
    $mensaje="";
    if($query->execute()){
            $mensaje="Guardado";
        }else{
            $mensaje="No guardado";
        }
        return $mensaje;
}

}?>