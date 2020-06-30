<?php
require_once "../../modelo/cliente/cliente.php";

$cedula = htmlspecialchars($_POST['txtcedula']);
$nombre = htmlspecialchars($_POST['txtnombre']);
$apellido = htmlspecialchars($_POST['txtapellido']);
$usuario = htmlspecialchars($_POST['txtusuario']);
$cta = htmlspecialchars($_POST['txtcta']);

//echo "cedu: ".$cedula;
$cli=new Cliente();

$resultado=$cli->insertarCliente($cta,$usuario);
$saldoInicial=5.00;
$regCta=$cli->crearEstadoCta($cta,"INICIAL",$saldoInicial);

echo $resultado."// ".$regCta;
//$resultado=="Guardado" &&
if( $regCta=="Guardado est. Cta."){
    echo "cliente registrado";
    header("Location: ../../../Publica/coperativa/administrativos.php");
}else{
    echo "Se ha generado un error";
}

?>