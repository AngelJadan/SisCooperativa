<?php
require_once "../../modelo/cliente/cliente.php";

$cta = htmlspecialchars($_POST['txtcta']);
$ncliente=htmlspecialchars($_POST['txtnombre']);
$acliete=htmlspecialchars($_POST['txtapellido']);
$ccliente=htmlspecialchars($_POST['txtcedula']);
$nbeneficiario = htmlspecialchars($_POST['txtnomDep']);;
$cbeneficiario = htmlspecialchars($_POST['txtcedulaDep']);;
$monto = htmlspecialchars($_POST['txtmonto']);;
$cajero = "AJADAN";
$estcta = 1;


    $cli=new Cliente();
    echo $cta;
    $consulta=$cli->consultaSaldo($cta);
    $saldo="";
    foreach($consulta as $key =>$value){
        $saldo=$value["ECT_SALDO"];
    }
    echo $saldo;

    if($saldo>){
    }



    //$resultado=$cli->depositarCliente($cdepositante,$ndepositante,$monto,$cta,$cajero,$cta);

    /*if($resultado="Guardado"){
        echo "Deposito realizado con exito";
    }*/
 //header("Location: ../../../Publica/coperativa/cajeroDeposito.php?cta=".$cta."&nombre=".$nombre."&apellido=".$apellido."&cedula=".$cedula);

?>