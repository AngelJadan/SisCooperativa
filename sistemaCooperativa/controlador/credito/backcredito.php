<?php
    require_once "../../modelo/usuario/usuario.php";
    $documento=$_POST["busqueda"];
    if(!empty($documento)){
        $user=new Usuario();
        $resultado=$user->buscarPersona($documento);
        
        if($resultado!="Consulta sin resultados"){
            $json= array();
            foreach($resultado as $key =>$value){
                $json[]=array(
                    'id'=>$value['per_id'],
                    'identificacion'=>$value['per_identificacion'],
                    'nombre'=>$value['per_nombre'],
                    'apellido'=>$value['per_apellido'],
                    'telefono'=>$value['per_telefono'],
                    'direccion'=>$value['per_direccion'],
                    'correo'=>$value['per_correo']
                );
            }
            echo json_encode($json);
        }else{
            $json[]=array(
                'id'=>"",
                'identificacion'=>"",
                'nombre'=>"",
                'apellido'=>"",
                'telefono'=>"",
                'direccion'=>"",
                'correo'=>""
            );
            echo json_encode($json);
        }
    }
?>