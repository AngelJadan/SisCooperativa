<?php
require_once "../../modelo/cliente/cliente.php";

$cta = htmlspecialchars($_POST['txtcta']);
$cajero = htmlspecialchars($_GET["cajero"]);

$cli=new Cliente();

$resultado=$cli->buscarCliente($cta,);
foreach($resultado as $key =>$value){
    $cta=$value["CLI_CUENTA_AHORROS"];
    $nombre=$value["PER_NOMBRE"];
    $apellido=$value["PER_APELLIDO"];
    $cedula=$value["PER_IDENTIFICACION"];
}
header("Location: ../../../Publica/coperativa/cajeroRetiro.php?cajero=".$cajero."&cta=".$cta."&nombre=".$nombre."&apellido=".$apellido."&cedula=".$cedula);
?>