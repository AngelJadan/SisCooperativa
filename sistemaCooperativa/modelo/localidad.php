<?php

require_once "../../conexiondb/conexiondb.php";

class Localidad extends Conexion {
    public function listarProvincia(){
        $sql="SELECT * FROM LOCALIDADES WHERE LOCALIDADES_LOC_ID=1";
        $query=Conexion::conectar()->prepare($sql);
        $result=$query->execute();
        if(empty($result)){
            die('Consulta sin resultados');
        }else{
            return $query->fetchAll();
        }
    }
    public function buscaProvincia($provincia){
        $sql="SELECT * FROM LOCALIDADES WHERE LOC_NOMBRE='".$provincia."';";
        $query=Conexion::conectar()->prepare($sql);
        $result=$query->execute();
        if(empty($result)){
            die('Consulta sin resultados');
        }else{
            return $query->fetchAll();
        }
    }
    public function listarCiudad($provincia){
        $sql="SELECT * FROM LOCALIDADES WHERE LOCALIDADES_LOC_ID=".$provincia.";";
        $query=Conexion::conectar()->prepare($sql);
        $result=$query->execute();
        if(empty($result)){
            die('Consulta sin resultados');
        }else{
            return $query->fetchAll();
        }
    }
}
?>