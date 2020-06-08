<?php

require_once "../../modelo/usuario/usuario.php";

$usuario = htmlspecialchars($_POST['txtusuario']);
$password = htmlspecialchars($_POST['txtpassword']);

$user=new Usuario();
$resultado=$user->buscarUsuario($usuario,$password);
$usubd="";
foreach($resultado as $key =>$value){
    $usubd=$value["usu_usuario"];
    $tusu=$value["usu_tipo_usuario"];
}
/**
 * revisa que tipo de usuario es y redirecciona a cada directorio
 */
if($usuario==$usubd){
    if($tusu=="Cajero"){
        header("Location: ../../../Publica/coperativa/InicioCajero.php?usuario=".$usuario);
    }if($tusu=="Administrador"){
        header("Location: ../../../Publica/coperativa/administrativos.php?usuario=".$usuario);
    }if($tusu=="Cliente"){
        //header("Location ../../../Publica/coperativa/......?usuario=".$usuario);
    }
}else{
    echo "usuario o clave incorrecta";
}

?>