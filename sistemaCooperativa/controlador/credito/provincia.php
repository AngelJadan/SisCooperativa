<?php
    require_once "../../modelo/localidad.php";

    $provincia= new Localidad();
    $resultado=$provincia->listarProvincia();
    $json= array();
    foreach($resultado as $key =>$value){
        $json[]=array(
            'id'=>$value['loc_id'],
            'nombre'=>$value['loc_nombre']
        );
    }
    echo json_encode($json);

?>