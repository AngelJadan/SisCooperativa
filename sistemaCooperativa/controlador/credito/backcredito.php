<?php
    require_once "../../modelo/usuario/usuario.php";
    $documento=isset($_POST["documento=0106405236"]);
    $user=new Usuario();
    $documento="0106405236";
    $resultado=$user->buscarPersona($documento);
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
?>