<?php
require_once "../../modelo/cliente/cliente.php";

$cta = htmlspecialchars($_POST['txtcta']);
$ndepositante = htmlspecialchars($_POST['txtnomDep']);;
$cdepositante = htmlspecialchars($_POST['txtcedulaDep']);;
$monto = htmlspecialchars($_POST['txtmonto']);;
$cajero = "AJADAN";
$estcta = 1;


    $cli=new Cliente();
    
    $resultado=$cli->depositarCliente($cdepositante,$ndepositante,$monto,$cta,$cajero,$cta);

    if($resultado="Guardado"){
        echo "Deposito realizado con exito";
    }
 //header("Location: ../../../Publica/coperativa/cajeroDeposito.php?cta=".$cta."&nombre=".$nombre."&apellido=".$apellido."&cedula=".$cedula);

?>