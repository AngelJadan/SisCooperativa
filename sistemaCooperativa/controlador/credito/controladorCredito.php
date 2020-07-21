<?php
    include_once '../../conexiondb/conexiondb.php';
    include_once '../../modelo/credito/credito.php';

    class ControladorCredito{
        public function __construct()
        {
        }
        public function insertarDatosCredito($credito){
            $sql="INSERT INTO Datos_creditos VALUES(0,'".$credito->getActLaboral()."','".$credito->getNomEmpresa()."','"
            .$credito->getDirEmpresa()."',".$credito->getTiempo().","
            .$credito->getIngreso().","
            .$credito->getCiudad()->getId().",'"
            .$credito->getPersona()->getIdentificacion()."','"
            .$credito->getCopiaCedula()."','"
            .$credito->getCopiaPlanilla()."','"
            .$credito->getCopiaRol()."','"
            .$credito->getEstado()."','"
            .$credito->getTipoCredito()."'"
            .");";
            //echo $sql;
        }
        public function listarParaCsv(){
            $sql="SELECT p.per_identificacion identificacion,p.per_sexo sexo, p.per_estado_civil estadocivil, d.dcr_act_laboral actividad, d.dcr_tiempo tiempo, d.dcr_ingreso ingreso, d.dcr_tipo tipo,
             d.dcr_estado estado, d.dcr_act_laboral empleo
            FROM datos_creditos d, personas p
            WHERE d.Personas_per_identificacion=p.per_identificacion";
            //echo $sql;
            $con=new Conexion();
            $query=$con->conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
        public function ncuotas($iden){
            $sql="select SUM(c.cre_numero_cuotas) cuotas from creditos c, personas p where p.per_identificacion='".$iden."';";
            //echo $sql;
            $con=new Conexion();
            $query=$con->conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
        public function tasai($iden){
            $sql="SELECT MAX(c.cre_interes_p) tasa from datos_creditos d, creditos c 
            WHERE d.Personas_per_identificacion='".$iden."' and d.dcr_id=c.Datos_creditos_dcr_id;";
            $con=new Conexion();
            $query=$con->conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
        public function cuotasPagadas($iden){
            $sql="SELECT COUNT(*) cuotas FROM personas p, datos_creditos d, creditos c, cuotas u WHERE p.per_identificacion='".$iden."'
            and p.per_identificacion=d.Personas_per_identificacion and u.creditos_cre_id=c.cre_id and u.cuo_estado='Pagado';";
            //echo $sql;
            $con=new Conexion();
            $query=$con->conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
        public function nCreditos($iden){
            $sql="select COUNT(*) creditos from personas p, datos_creditos d, creditos c where p.per_identificacion='".$iden."'
            and p.per_identificacion=d.Personas_per_identificacion and d.dcr_id=c.Datos_creditos_dcr_id";
            //echo $sql;
            $con=new Conexion();
            $query=$con->conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
        public function sumaMonto($iden){
            $sql="select sum(c.cre_monto) monto from creditos c, datos_creditos d 
            WHERE d.Personas_per_identificacion=".$iden." and d.dcr_id=c.Datos_creditos_dcr_id;";
            $con=new Conexion();
            $query=$con->conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
    }
    $con=new ControladorCredito();
    $per=new Persona();
    $per->setTipoId("Pasaporte");
    $per->setIdentificacion("59562631541");
    $per->setNombre("Juan");
    $per->setApellido("Andrade");
    $per->setEstadoCivil("Soltero");
    $per->setDireccion("Gran Colombia y Hermano Miguel");
    $per->setTelefono("05689551");
    $per->setCorreo("juanandrade@gmail.com");
    $per->setSexo("Masculino");
    $loc=new Localidad();
    $loc->setId(2);
    $cred=new Credito();
    $cred->setActLaboral("Pymes");
    $cred->setNomEmpresa("Empresa1");
    $cred->setDirEmpresa("Av. De las Americas");
    $cred->setTiempo(2);
    $cred->setIngreso(1500.00);
    $cred->setTipoCredito("Vivenda");
    $cred->setPerona($per);
    $cred->setCiudad($loc);
    $cred->setEstado("Pendiente");
    $con->insertarDatosCredito($cred);
    
    $datos=$con->listarParaCsv();
    foreach($datos as $key=>$value){
        $id=$value["identificacion"];
     //   $nombre=$value["per_nombre"];
       // $apellido=$value["per_apellido"];
    }
/*
    $identificacion="01645032234";
    $cuot=$con->ncuotas($identificacion);
    foreach($cuot as $key=>$value){
        $cuotas=$value["cuotas"];
        echo "Total de cuotas: ".$cuotas."<br>";
    }
    $pagada=$con->cuotasPagadas($identificacion);
    foreach($pagada as $key=>$value){
        $pagadas= $value["cuotas"];
        echo "Cuotas pagadas: ".$pagadas."<br>";
    }
    $creditos=$con->nCreditos($identificacion);
    foreach($creditos as $key=>$value){
        $ncre=$value["creditos"];
        echo "Numero de creditos: ".$ncre."<br>";
    }
    echo "Cuotas pagadas: ";
    $resul=round(($pagadas*100/$cuotas),);
    echo $resul."%";
    if($resul>50){
        echo "Probable buen cliente";
    }else{
        echo "Probable mal cliente";
    }*/
    //echo $cred->getPersona()->getNombre();