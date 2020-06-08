<?php

require_once "../../modelo/usuario/usuario.php";

$usuario = htmlspecialchars($_POST['txtusuario']);
$password = htmlspecialchars($_POST['txtpassword']);

$user=new Usuario();
$resultado=$user->buscarUsuario($usuario,$password);
$usubd="";
foreach($resultado as $key =>$value){
    $usubd=$value["usu_usuario"];
}
if($usuario==$usubd){
    header("");
}else{
    echo "usuario o clave incorrecta";
}

?>