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

    $acedula = $_FILES['fcedula']['name'];
    $rutacedula = $_FILES['fcedula']['tmp_name'];
    $arol = $_FILES['frol']['name'];
    $rutacedula = $_FILES['frol']['tmp_name'];
    $aplanilla = $_FILES['fplanilla']['name'];
    $rutaplanilla = $_FILES['fplanilla']['tmp_name'];

    if(!file_exists('../../../../SisCooperativa/Publica/creditos/recursos/cedulas')
    ||!file_exists('../../../../SisCooperativa/Publica/creditos/recursos/roles')
    ||!file_exists('../../../../SisCooperativa/Publica/creditos/recursos/planillas')){
        mkdir('../../../../SisCooperativa/Publica/creditos/recursos/cedulas',0777,true);
        mkdir('../../../../SisCooperativa/Publica/creditos/recursos/roles',0777,true);
        mkdir('../../../../SisCooperativa/Publica/creditos/recursos/planillas',0777,true);
        if(file_exists('recursos')){
            if(move_uploaded_file($rutacedula,'../../../../SisCooperativa/Publica/creditos/recursos/cedulas/'.$acedula.$doc)
            &&move_uploaded_file($rutarol,'../../../../SisCooperativa/Publica/creditos/recursos/roles/'.$arol.$doc)
            &&move_uploaded_file($rutaplanilla,'../../../../SisCooperativa/Publica/creditos/recursos/planillas/'.$aplanilla.$doc)){
                /*$archcedula_ok = move_uploaded_file($archivo['tmp_name'],'../../../../SisCooperativa/Publica/creditos/recursos/cedulas/'.$acedula.$doc);
                $archrol_ok = move_uploaded_file($archivo['tmp_name'],'../../../../SisCooperativa/Publica/creditos/recursos/roles/'.$arol.$doc);
                $archplanilla_ok = move_uploaded_file($archivo['tmp_name'],'../../../../SisCooperativa/Publica/creditos/recursos/planillas/'.$aplanilla.$doc);
                */
            }
        }
    }else{
        if(move_uploaded_file($rutacedula,'../../../../SisCooperativa/Publica/creditos/recursos/cedulas/'.$acedula.$doc)
        &&move_uploaded_file($rutarol,'../../../../SisCooperativa/Publica/creditos/recursos/cedulas/'.$arol.$doc)
        &&move_uploaded_file($rutaplanilla,'../../../../SisCooperativa/Publica/creditos/recursos/cedulas/'.$aplanilla.$doc)){
            
            /*$archcedula_ok = move_uploaded_file($archivo['tmp_name'],'../../../../SisCooperativa/Publica/creditos/recursos/cedulas/'.$acedula.$doc);
            $archrol_ok = move_uploaded_file($archivo['tmp_name'],'../../../../SisCooperativa/Publica/creditos/recursos/roles/'.$arol.$doc);
            $archplanilla_ok = move_uploaded_file($archivo['tmp_name'],'../../../../SisCooperativa/Publica/creditos/recursos/planillas/'.$aplanilla.$doc);
            */
        }
    }
    $ccedula = '../../../../SisCooperativa/Publica/creditos/recursos/cedulas/'.$acedula.$doc;
    $crol = '../../../../SisCooperativa/Publica/creditos/recursos/roles/'.$arol.$doc;
    $cplanilla = '../../../../SisCooperativa/Publica/creditos/recursos/planillas/'.$aplanilla.$doc;

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
    $cre->setCopiaCedula($ccedula);
    $cre->setCopiaRol($crol);
    $cre->setCopiaPlanilla($cplanilla);
    $ccre->insertarCredito($cre);

?>