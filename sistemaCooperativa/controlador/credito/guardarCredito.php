<?php

include_once 'controladorCredito.php';
include_once '../../modelo/credito/credito.php';


    //$socio = $_POST["cboxsocio"];
    $tCredito = $_POST["cboxtipoc"];
    $tIden = $_POST["iden"];
    $doc = $_POST["txtdocumento"];
    $nombre = $_POST["txtnombre"];
    $apellido =$_POST["txtapellido"];
    $sexo = $_POST["cboxsexo"];
    $ecivil = $_POST["ecivil"];
    $email1 = $_POST["txtemail1"];
    $email2 = $_POST["txtemail2"];
    $telefono =$_POST["txttelefono"];
    $provincia = $_POST["cboxprovincia"];
    $ciudad = $_POST["cboxciudad"];
    $direccion = $_POST["txtdireccion"];
    $edad =$_POST["txtedad"];

    $actividad = $_POST["txtactividad"];
    $empresa = $_POST["txtempresa"];
    $dempresa = $_POST["txtdiremp"];
    $aempresa = $_POST["txtactividad"];
    $tiempo =$_POST["txtactividademp"];
    $ingresos = $_POST["txtingresos"];
    $avaluo = $_POST["txtavaluo"];
    $monto = $_POST["txtmonto"];
    $plazo = $_POST["txtmonto"];

    /*echo $tCredito.$tIden.$doc.$nombre.$apellido.$sexo.$ecivil.$email1.$email2.$telefono.
    $provincia.$ciudad.$direccion.$actividad.$empresa.$dempresa.$aempresa.$ingresos.$avaluo.$monto.$plazo;*/

    $ccre=new ControladorCredito();
    $cre=new Credito();
    $loc=new Localidad();

    $dciu = $ccre->buscaIdCiudad($ciudad);
    $ciuId="";
    foreach($dciu as $key=>$value){
        $ciuId=$value["id"];
    }
    $loc->setId($ciuId);
    $cre->setCiudad($loc);
    $cre->setTipoCredito($tCredito);
    $cre->setActEmpresa($actividad);
    $cre->setNomEmpresa($empresa);
    $cre->setDirEmpresa($dempresa);
    $cre->setIngreso($ingresos);
    $cre->setAvaluo($avaluo);
    $cre->setMonto($monto);
    $cre->setPlazo($plazo);
    $cre->setTamortizacion("Pendiente");
    $cre->setEstado("Pendiente");
    $cre->setPerona($doc);
    $cre->setTiempo($tiempo);
    $cre->setGarante("na");
    $cre->setTotal(0.00);
    $cre->setEdad($edad);
    $ccre->insertarCredito($cre);

?>