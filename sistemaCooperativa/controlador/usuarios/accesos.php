<?php
    require_once "../../conexiondb/conexiondb.php";

    class accesos {
        public function __construct(){
        }
        public function acceso(){
            $dia= date('d');
            $mes= date('m');
            $anio= date('yy');
            $fecha=$dia."/".$mes."/".$anio;
    
        }
    }
    
?>