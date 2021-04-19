<?php
    include_once '../../conexiondb/conexiondb.php';
    include_once '../../modelo/credito/credito.php';

    class ControladorCredito {
        public function __construct()
        {
            $credito=new Credito();
        }
        public function buscaIdCiudad($ciudad){            
            $sql="SELECT loc_id id from Localidades where loc_nombre='".$ciudad."';";
            $con=new Conexion();
            $query=$con->conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
        public function insertarCredito($credito){
            $this->credito=$credito;
            $interes = $credito->getMonto()*1.5*
            $sql="INSERT INTO CREDITOS 
            VALUES(0,'"
            .$credito->getTamortizacion()."',"
            .$credito->getMonto().","
            .$credito->getPlazo().","
            .$credito->getPlazo().",'"
            .$credito->getEstado()."',"
            .$credito->getInteres().","//interes
            .$credito->getTasa().","//tasa
            .$credito->getTiempo().",'"
            .$credito->getNomEmpresa()."','"
            .$credito->getDirEmpresa()."',"
            .$credito->getTiempo().","
            .$credito->getIngreso().",'"
            .$credito->getTipoCredito()."','"
            .$credito->getTipoCredito()."',"//proposito
            .$credito->getAvaluo().",'"
            .$credito->getGarante()."','"
            .$credito->getCopiaCedula()."','"//cedula
            .$credito->getCopiaPlanilla()."','"//planilla
            .$credito->getCopiaRol()."',"//rol
            .$credito->getEdad().",'"
            .$credito->getPersona()."',"
            .$credito->getCiudad()->getId().","
            .$credito->getTotal().""
            .");";
            echo $sql;
            try{
                $con=new Conexion();
                $query=$con->conectar()->prepare($sql);
                $query->execute();
                echo "Credito creado para su revisión";
            }catch(Exception $e){
                echo "Se ha producido un error".$e;
            }

        }
        public function getIdDatosCreditos($identificacion){
            $sql="SELECT cre_id id FROM creditos 
            WHERE Personas_per_identificacion='".$identificacion."';";
            $con=new Conexion();            
            $query=$con->conectar()->prepare($sql);
            return $query->fetchAll();
            
        }
        /**
         * Esta funcion lista todos los creditos pendientes de aprobar por el jefe de credito.
         */
        public function listaCreditosSolicitados(){
            $sql="SELECT * FROM CREDITOS WHERE cre_estado='Pendiente'";
            $con=new Conexion();
            $query=$con->conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
        /**
         * Esta funcion hace una consulta a la base de datos para generar el archivo csv.
         */
        public function listarParaCsv(){
            $sql="SELECT p.per_identificacion, p.per_id, p.per_sexo,p.per_estado_civil, c.cre_act_laboral, c.cre_tiempo_empleo, c.cre_tipo
            , c.cre_estado, c.cre_ingreso
            FROM creditos c, personas p WHERE c.Personas_per_identificacion=p.per_identificacion;";
            echo $sql;
            $con=new Conexion();
            $query=$con->conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
        /**
         * Esta funcion saca el numero total de cuotas de todos los creditos.
         */
        public function ncuotas($iden){
            $sql="select SUM(c.cre_numero_cuotas) cuotas from creditos c, personas p where p.per_identificacion='".$iden."';";
            //echo $sql;
            $con=new Conexion();
            $query=$con->conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
        /**
         * Esta funcion sacar la tasa mas alta de los creditos de un cliente.
         */
        public function tasai($iden){
            $sql="SELECT MAX(c.cre_intereses_p) tasa from creditos c
            WHERE c.Personas_per_identificacion='".$iden."';";
            $con=new Conexion();
            $query=$con->conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
        public function cuotasPagadas($iden){
            $sql="SELECT COUNT(*) cuotas FROM creditos c, cuotas u WHERE c.Personas_per_identificacion='".$iden."'
            and c.cre_id=u.creditos_cre_id and u.cuo_estado='Pagado';";
            //echo $sql;
            $con=new Conexion();
            $query=$con->conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
        public function nCreditos($iden){
            $sql="select COUNT(*) creditos from creditos c WHERE c.Personas_per_identificacion='".$iden."';";
            //echo $sql;
            $con=new Conexion();
            $query=$con->conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
        public function sumaMonto($iden){
            $sql="select sum(c.cre_monto) monto from creditos c 
            WHERE c.Personas_per_identificacion='".$iden."';";
            $con=new Conexion();
            $query=$con->conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }

        public function updCuota($creditoId,$fpago, $cuota,$cuenta){
            $sql="UPDATE CUOTAS 
            SET CUO_FECHA_PAGO='".$fpago."',
            CUO_ESTADO='PAGADO',
            ESTADOCUENTAS_ECT_ID=".$cuenta."
            WHERE cuo_id=".$cuota." AND 
            Creditos_cre_id=".$creditoId;
            $mensaje='';

            $query=Conexion::conectar()->prepare($sql);
            if($query->execute()){
                $mensaje="Debito Realizado";
            }else{
                $mensaje="Debito Realizado";
            }
            return $mensaje;
        }
        /**
         * @param fecha Fecha de vencimiento de las cuotas.
         * Este metodo, devuelve todas las cuotas que vencen en la fecha ingresada.
         * @return  Devuelve el listado de cuotas de la fecha ingresada.
         */
        public function cuotas($fecha){
            $sql="SELECT * FROM CUOTAS WHERE CUO_FECHA_VENCIMIENTO='".$fecha."'";
            $con=new Conexion();
            $query=$con->conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }

    }
    /*$con=new ControladorCredito();
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
    $cred->setMonto(1500);
    $cred->setPlazo(12);
    $cred->setTamortizacion("Francesa");
    $cred->setNcuotas(12);
    $cred->setTasa(10);
    $cred->setInteres(120);
    $cred->setTotal(1620);

    $con->insertarDatosCredito($cred);
    $con->insertarCredito($cred,2,"Cliente1",2);

    $datos=$con->listarParaCsv();
    foreach($datos as $key=>$value){
        $id=$value["identificacion"];
     //   $nombre=$value["per_nombre"];
       // $apellido=$value["per_apellido"];
    }
    $resId=$con->getIdDatosCreditos("01645032234");
    foreach($resId AS $key=>$value){
        $id=$value["id"];
    }
    //echo $id;
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