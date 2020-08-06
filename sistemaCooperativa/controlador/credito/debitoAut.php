<?php
// formato fecha 2020-12-27 yyyy-mm-dd

include_once '../../controlador/estadoCuenta/contEstadoCuenta.php';
include_once '../../controlador/credito/controladorCredito.php';

$cestcta = new ControladorEstadoCuenta();
$ccredito = new ControladorCredito();
//Sacar fecha actual
$dia= date('d');
        $mes= date('m');
        $anio= date('yy');
        $fecha=$anio."-".$mes."-".$dia;
    echo $fecha;

$cuots=$ccredito->cuotas('2020-08-11');
foreach($cuots as $key=>$value){
    echo $value['cuo_id'].'<br>';
    echo $value['cuo_monto'].'<br>';
    echo $value['creditos_cre_id'];
    echo $value['cuo_numero'];
    //echo $value[''];
}
//Consultar Saldo


// Debito


?>