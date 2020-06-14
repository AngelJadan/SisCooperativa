<?php

require_once "../../modelo/usuario/usuario.php";
require_once "../../modelo/accesos.php";

$usuario = htmlspecialchars($_POST['txtusuario']);
$password = htmlspecialchars($_POST['txtpassword']);

$user=new Usuario();
$acc=new accesoModelo();

$resultado=$user->buscarUsuario($usuario,$password);
$usubd="";
foreach($resultado as $key =>$value){
    $usubd=$value["usu_usuario"];
    $tusu=$value["usu_tipo_usuario"];
}
if($usuario==$usubd){
    $dia= date('d');
    $mes= date('m');
    $anio= date('yy');
    $fecha=$dia."/".$mes."/".$anio;
    $acc->guardarAccesos($fecha,$tusu,'conectado',$usubd);
}

/**
 * revisa que tipo de usuario es y redirecciona a cada directorio
 */
if($usuario==$usubd){
    if($tusu=="Cajero"){
        header("Location: ../../../Publica/coperativa/InicioCajero.php?usuario=".$usuario);
    }if($tusu=="Administrador"){
        header("Location: ../../../Publica/coperativa/administrativos.php?usuario=".$usuario);
    }if($tusu=="cliente"){
        header("Location: ../../../Publica/coperativa/cajeroEstadoCuenta.php?usuario=".$usuario);
    }

}else{
    echo "usuario o clave incorrecta";
}


?>