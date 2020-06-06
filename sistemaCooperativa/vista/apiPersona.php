<?php
include_once '/controlador/controladorPersona.php';
include_once '/modelo/persona.php';

class ApiPersona{
    
    function guardar(){
    }

    /**
     * @return Devuelve el listado de las personas registradas
     */
    function listarPersona(){
        $persona            =   new Persona();
        $cPersona           =   new ControladorPersona();
        $personas           =   array();
        $personas['items']  =   array();

        $res = $cPersona->listarPersona();

        if($res->rowCount()){
            while($row = $res->fetch(PDO::FETCH_ASSOC)){
                $item   =   array(
                    'id'        =>$row['per_id'],
                    'nombre'    =>$row['per_nombre'],
                    'apellido'  =>$row['per_apellido'],
                    'identificacion'    =>$row['per_identificacion'],
                    'correo'            =>$row['per_correo'],
                    'direccion'         =>$row['per_direccion'],
                    'telefono'          =>$row['per_telefono']
                );
            }
            $listado=json_encode($personas);
        }else{
            $listado=json_encode(array('mensaje'=>'No hay elementos encontrados'));
        }
        echo $listado;
        return $this->$listado;
    }
}
?>