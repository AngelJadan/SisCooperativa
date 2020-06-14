<?php
require_once "../../modelo/cliente/cliente.php";

$cta = htmlspecialchars($_POST['txtcta']);
$ncliente=htmlspecialchars($_POST['txtnombre']);
$acliete=htmlspecialchars($_POST['txtapellido']);
$ccliente=htmlspecialchars($_POST['txtcedula']);
$nbeneficiario = htmlspecialchars($_POST['txtnomBen']);;
$cbeneficiario = htmlspecialchars($_POST['txtcedulaBen']);;
$monto = htmlspecialchars($_POST['txtmonto']);;
$cajero = $_GET['cajero'];
$estcta = 1;


    $cli=new Cliente();
    //echo $cta;
    $consulta=$cli->consultaSaldo($cta);
    $saldo="";
    foreach($consulta as $key =>$value){
        $saldo=$value["ECT_SALDO"];
    }
    //echo $saldo;

    if($saldo>$monto){
        $nuevoSaldo=$saldo-$monto;
        //echo "se puede retirar".$saldo." - ".$monto."=".$nuevoSaldo;
        $resultado=$cli->actualziarEstCta($cta,$nuevoSaldo,"RETIRO");
        $dia= date('d');
        $mes= date('m');
        $anio= date('yy');
        $fecha=$anio."/".$mes."/".$dia;
        $idEstCta=$cli->consultaIdEstCta($fecha,"RETIRO",$nuevoSaldo,$cta);

        $idEscta="";
        foreach($idEstCta as $key =>$value){
            $idEscta=$value["ECT_ID"];
        }
        //echo $idEscta;
        //echo "cajero: ". $cajero;
        $resRet=$cli->retirarCliente($cbeneficiario,$monto,$cajero,$cta,$idEscta);
        if($resRet=="Retirado"){
            echo "</br>Retiro realizado exitosamente. Por $".$monto."</br>";
        }

    }

    //$resultado=$cli->depositarCliente($cdepositante,$ndepositante,$monto,$cta,$cajero,$cta);

    /*if($resultado="Guardado"){
        echo "Deposito realizado con exito";
    }*/
 //header("Location: ../../../Publica/coperativa/cajeroDeposito.php?cta=".$cta."&nombre=".$nombre."&apellido=".$apellido."&cedula=".$cedula);

?>
<a href='/ProyectoCooperativa/SisCooperativa/Publica/coperativa/InicioCajero.php?usuario=<?php echo $cajero?>'>Regresar</a>