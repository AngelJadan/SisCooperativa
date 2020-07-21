<?php
    require_once "../../modelo/localidad.php";
    $pro=$_POST["selec"];
    $provincia= new Localidad();
    $resultado=$provincia->buscaProvincia($pro);
    
    foreach($resultado as $key =>$value){
            $id=$value['loc_id'];
    }

    $json= array();
    $resultado=$provincia->listarCiudad($id);
    foreach($resultado as $key =>$value){
        $json[]=array(
            'id'=>$value['loc_id'],
            'nombre'=>$value['loc_nombre']
        );
    }
    echo json_encode($json);

?>