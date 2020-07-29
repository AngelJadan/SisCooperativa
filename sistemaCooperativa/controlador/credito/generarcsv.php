<?php
include_once "controladorCredito.php";

$con=new ControladorCredito();
$datos=$con->listarParaCsv();
$file="datos.csv";
$fila="";
$sep=";";
$csvfin="
";
$json=array();
$fila="DNI".$sep."PLAZOMESES".$sep."HISTORIALCREDITO".$sep."PROPOSITOCREDITO".$sep."MONTO".$sep."TIEMPOEMPLEO".$sep
."TASAPAGO".$sep."ESTADOCIVILYSEXO".$sep."GARANTE".$sep."AVALUO".$sep."ACTIVOS".$sep."ESTADO".$sep."CREDITOSEXISTENTES".$sep."EMPLEO".$sep
."RESULTADO".$csvfin;
foreach($datos as $key=>$value){
    $id=$value["per_identificacion"];
    $ecivil=$value["per_estado_civil"];
    $sexo=$value["per_sexo"];
    if($ecivil=="Divorsiad@"&&$sexo=="Masculino"){
        $ecivil="A91";
    }if($ecivil=="Divorad@"||$ecivil=="Casad@"&&$sexo=="Femenino"){
        $ecivil="A92";
    }
    if($ecivil=="Solter@"&&$sexo=="Femenino"){
        $ecivil="A95";
    }
    if($ecivil=="Solter@"&&$sexo=="Masculino"){
        $ecivil="A93";
    }
    $tAct=$value["cre_tiempo_empleo"];
    $ingreso=$value["cre_ingreso"];
    $tCredito=$value["cre_tipo"];
    $resMon=$con->sumaMonto($id);
    $estado=$value["cre_estado"];
    foreach($resMon as $key1=>$value1){
        $monto=$value1["monto"];
    }
    //$monto=$value["cre_monto"];
    if($tCredito=="Vivienda"){
        $tCredito="A40";
    }if($tCredito=="Vehiculo"){
        $tCredito="A41";
    }if($tCredito=="Consumo"||$tCredito=="Otros"){
        $tCredito="A410";
    }
    if($tCredito=="Tecnologia"){
        $tCredito="A43";
    }
    if($tCredito=="Electrodomesticos"){
        $tCredito="A44";
    }
    if($tCredito=="Reparaciones"){
        $tCredito="A45";
    }
    if($tCredito=="Educacion"){
        $tCredito="A46";
    }
    if($tCredito=="Vacaciones"){
        $tCredito="A47";
    }
    if($tCredito=="Capacitación"){
        $tCredito="A48";
    }
    $empleo=$value["cre_act_laboral"];
    $pla=$con->ncuotas($id);
    foreach($pla as $key1=>$value1){
        $plazo=$value1["cuotas"];
    }
    $consul=$con->tasai($id);
    foreach($consul as $key1=>$value1){
        $tasa=$value1["tasa"];
    }
    $pagada=$con->cuotasPagadas($id);
    foreach($pagada as $key1=>$value1){
        $pagadas= $value1["cuotas"];
        //echo "Cuotas pagadas: ".$pagadas."<br>";
    }
    $creditos=$con->nCreditos($id);
    foreach($creditos as $key=>$value){
        $ncre=$value["creditos"];
        //echo "Numero de creditos: ".$ncre."<br>";
    }
    //echo "Cuotas pagadas: ";
    $resul=round(($pagadas*100/$plazo),);
    //echo $resul."%";
    if($resul>50){
        //echo "Probable buen cliente";
        $tipoCliente=1;
    }else{
        //echo "Probable mal cliente";
        $tipoCliente=2;
    }
    $fila.=$id.$sep.$plazo.$sep."A34".$sep.$tCredito.$sep.$monto.$sep.$tAct.$sep.$tasa.$sep.$ecivil.$sep."A101".$sep."4"
.$sep."A121".$sep.$estado.$sep.$ncre.$sep.$empleo.$sep.$tipoCliente.$csvfin;
}

    echo $fila;

/*
$json=array();
    $fila="DNI".$sep."NOMBRE".$sep."APELLIDO".$sep."ESTADO_CIVIL".$sep."CIUDAD".$sep."TIEMPO".$sep."INGRESOS".$sep
    ."AMORTIZACION".$sep."MONTO".$sep."TIPO".$sep."PLAZO".$sep."CUOTAS".$sep."ESTADO".$sep."INTERES%".$sep."INTERES".$sep
    ."TOTAL".$csvfin;
    foreach($datos as $key=>$value){
        $id=$value["per_identificacion"];
        $nombre=$value["per_nombre"];
        $apellido=$value["per_apellido"];
        $ecivil=$value["per_estado_civil"];
        $sexo=$value["per_sexo"];
        if($ecivil=="Divorsiad@"&&$sexo=="Masculino"){
            $ecivil="A91";
        }if($ecivil=="Divorad@"||$ecivil=="Casad@"&&$sexo=="Femenino"){
            $ecivil="A92";
        }
        if($ecivil=="Solter@"&&$sexo=="Femenino"){
            $ecivil="A95";
        }
        if($ecivil=="Solter@"&&$sexo=="Masculino"){
            $ecivil="A93";
        }
        $ciudad=$value["loc_nombre"];
        $tAct=$value["dcr_tiempo"];
        $ingreso=$value["dcr_ingreso"];
        $tCredito=$value["dcr_tipo"];
        $amortizacion=$value["cre_tipo_amortizacion"];
        $monto=$value["cre_monto"];
        if($tCredito=="Vivienda"){
            $tCredito="A40";
        }if($tCredito=="Vehiculo"){
            $tCredito="A41";
        }if($tCredito=="Consumo"||$tCredito=="Otros"){
            $tCredito="A410";
        }
        if($tCredito=="Tecnologia"){
            $tCredito="A43";
        }
        if($tCredito=="Electrodomesticos"){
            $tCredito="A44";
        }
        if($tCredito=="Reparaciones"){
            $tCredito="A45";
        }
        if($tCredito=="Educacion"){
            $tCredito="A46";
        }
        if($tCredito=="Vacaciones"){
            $tCredito="A47";
        }
        if($tCredito=="Capacitación"){
            $tCredito="A48";
        }
        $plazo=$value["cre_plazo"];
        $cuotas=$value["cre_numero_cuotas"];
        $creEstado=$value["cre_estado"];
        $interesP=$value["cre_interes_p"];
        $interes=$value["cre_interes"];
        $total=$value["cre_total"];

        $fila.=$id.$sep.$nombre.$sep.$apellido.$sep.$ecivil.$sep.$ciudad.$sep.$tAct.$sep.$ingreso.$sep
        .$amortizacion.$sep.$monto.$sep.$tCredito.$sep.$plazo.$sep.$cuotas.$sep.$creEstado.$sep.$interesP.$sep
        .$interes.$sep.$total.$csvfin;
    }*/
    if (!$handle = fopen($file, "w")) {  
        echo "Cannot open file";  
        exit;  
    }  
    if (fwrite($handle, utf8_decode($fila)) === FALSE) {  
        echo "Cannot write to file";  
        exit;  
    }  
    fclose($handle);

    //header('Content-Type: application/csv');
    //header('Content-Disposition: attachment; filename=export.csv')
        /*$json[]=array(
            $nombre,
            $apellido
            'dni'=>$id,
            'nombre'=>$nombre,
            'apellido'=>$apellido,
            'ciudad'=>$ciudad,
            'tact'=>$tAct,
            'ingreso'=>$ingreso,
            'tcredito'=>$tCredito,
            'amortizacion'=>$amortizacion,
            'monto'=>$monto,
            'plazo'=>$plazo,
            'cuotas'=>$cuotas,
            'creEstado'=>$creEstado,
            'interesP'=>$interesP,
            'interes'=>$interes,
            'total'=>$total
        );*/
    
    /*$clientes= json_encode($json);
    $arreglo=json_decode($clientes);
    $datos[]= array();
    foreach($arreglo as $key=>$value){
        $arr=$value;
        $dni = $arr->{'dni'};
        $nombre = $arr->{"nombre"};
        $apellido= $arr->{"apellido"};
        $ciudad= $arr->{"ciudad"};
        $tact= $arr->{"tact"};
        $ingreso= $arr->{"ingreso"};
        $tcredito= $arr->{"tcredito"};
        $amortizacion= $arr->{"amortizacion"};
        $monto= $arr->{"monto"};
        $plazo= $arr->{"plazo"};
        $cuotas= $arr->{"cuotas"};
        $creEstado= $arr->{"creEstado"};
        $interesP= $arr->{"interesP"};
        $interes= $arr->{"interes"};
        $total= $arr->{'total'};*/
?>