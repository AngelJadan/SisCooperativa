<?php

include "../../modelo/usuario/usuario.php";

$usuario = htmlspecialchars($_POST['txtusuario']);
$password = htmlspecialchars($_POST['txtpassword']);

$usuario=new Usuario();
$resultado=$usuario->buscarUsuario($usuario,$password);


?>