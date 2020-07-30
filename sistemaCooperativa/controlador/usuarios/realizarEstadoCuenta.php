<?php
require_once '../../sistemaCooperativa/conexiondb/conexiondb.php';

class EstadoCuenta extends Conexion{
     
    public function __construct(){  }

    public function listarEstadoCuenta($cliente){
        $sql = "select E.ect_id, E.ect_fecha, E.ect_tipo_operacion, E.ect_saldo  from estadocuentas  E , clientes C
        where C.usuarios_usu_usuario= '".$cliente."' AND E.clientes_cli_cuenta_ahorros=C.cli_cuenta_ahorros";
        //$sql ="select * from estadocuentas;";
        //echo $sql;
        $query=Conexion::conectar()->prepare($sql);
        $query->execute();
        return $query->fetchAll();

    }

    public function listarAccesos($cliente){
        $sql = "select ace_fecha_intento from acessos where usuarios_usu_usuario='".$cliente."'";
        $query=Conexion::conectar()->prepare($sql);
        $query->execute();
        return $query->fetchAll();

    }

    public function resumenCreditos($cliente){
        $sql = "select A.cre_id, B.dcr_tipo, A.cre_monto, E.ect_saldo, D.cuo_fecha from creditos A, datos_creditos B, estadocuentas E, cuotas D, usuarios U where A.usuarios_usu_usuario = '".$cliente."' and  A.cre_estado='activo' group by A.cre_id;";
        $query=Conexion::conectar()->prepare($sql);
        $query->execute();
        return $query->fetchAll();

    }
}
?>