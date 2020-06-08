<?php
require_once "../../modelo/cliente/cliente.php";

$cedula = htmlspecialchars($_POST['txtcedula']);
$nombre = htmlspecialchars($_POST['txtnombre']);
$apellido = htmlspecialchars($_POST['txtapellido']);
$usuario = htmlspecialchars($_POST['txtusuario']);
$cta = htmlspecialchars($_POST['txtcta']);

echo "cedu: ".$cedula;
$cli=new Cliente();

$resultado=$cli->insertarCliente($cta,$usuario);

if($resultado=="Guardado"){
    header("Location: ../../../Publica/coperativa/administrativos.php");
}else{
    echo "Se ha generado un error";
}


?>