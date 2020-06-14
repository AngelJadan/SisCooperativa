<?php
require_once "../../modelo/cliente/cliente.php";

$cta = htmlspecialchars($_POST['txtcta']);
$ndepositante = htmlspecialchars($_POST['txtnomDep']);;
$cdepositante = htmlspecialchars($_POST['txtcedulaDep']);;
$monto = htmlspecialchars($_POST['txtmonto']);
$cajero = "AJADAN";
$estcta = 1;


    $cli=new Cliente();
    
    
    $saldoAnt=$cli->consultaSaldo($cta);
    $idEstCta=$cli->consultaEstCtaId($cta);


    //echo $saldoAnt."+".$idEstCta;

    foreach($saldoAnt as $saldo){
        $saldo= $saldo["ECT_SALDO"];
    }
    $nsaldo=$saldo+$monto;
    $resultado=$cli->depositarCliente($cdepositante,$ndepositante,$monto,$cta,$cajero,$estcta);

    $insEstcta=$cli->actualziarEstCta($cta,$nsaldo,"DEPOSITO");

    if($resultado="Guardado"){
        echo "Deposito realizado con exito";
    }
 //header("Location: ../../../Publica/coperativa/cajeroDeposito.php?cta=".$cta."&nombre=".$nombre."&apellido=".$apellido."&cedula=".$cedula);

?>
<a href='/ProyectoCooperativa/SisCooperativa/Publica/coperativa/InicioCajero.php?usuario=<?php echo $cajero?>'>Regresar</a>