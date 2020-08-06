<?php

//include_once '../conexiondb/conexiondb.php';
include_once '../../conexiondb/conexiondb.php';
class ControladorEstadoCuenta{
    public function __construct()
    {

    }

    public function consultarSaldo($cuenta){
        $sql="SELECT * FROM ESTADOCUENTAS WHERE Clientes_cli_cuenta_ahorros=".$cuenta;
        $con=new Conexion();
            $query=$con->conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
    }
    public function debitoCredito($cuenta, $operacion, $monto, $saldoAnterior){
        $nuevoSaldo = $saldoAnterior-$monto;
        $dia= date('d');
        $mes= date('m');
        $anio= date('yy');
        $fecha=$anio."/".$mes."/".$dia;
        $mensaje="";

        $sql="INSERT INTO ESTADOCUENTAS VALUES(0,'".$fecha."','".$operacion."','".$cuenta."',".$monto.",
        ".$nuevoSaldo.")";
        $query=Conexion::conectar()->prepare($sql);
        if($query->execute()){
            $mensaje="Guardado";
        }else{
            $mensaje="No guardado";
        }
        return $mensaje;
    }
    /**
     * @param Cuenta Recibe el numero de cuenta de ahorro.
     * @return id Devuelve el ultimo numero de transaccion
     */
    public function consultaIdUlt($cuenta, $operacion){
        $sql="SELECT MAX(ect_id) AS id FROM estadocuentas 
        where clientes_cli_cuenta_ahorros=".$cuenta." AND ect_tipo_operacion ='".$operacion."'";
        $id=0;
            $con=new Conexion();
            $query=$con->conectar()->prepare($sql);
            $query->execute();
            $row= $query->fetchAll();
            foreach($row as $fil=>$key){
                $id=$key['id'];
            }
        return $id;
    }
}

/*$cetc=new ControladorEstadoCuenta();
$id=$cetc->consultaIdUlt(1,'N/D Credito');
echo $id;*/
?>