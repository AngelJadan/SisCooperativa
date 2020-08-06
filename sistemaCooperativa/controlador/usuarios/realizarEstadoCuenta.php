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
        $sql = "SELECT A.cre_id, A.cre_monto, A.cre_tipo, A.cre_total, B.cuo_fecha_vencimiento
        FROM creditos A, cuotas B
        WHERE A.cre_estado='Activo'";
        $query=Conexion::conectar()->prepare($sql);
        $query->execute();
        return $query->fetchAll();

    }

    public function buscarDatos($idCredito){
        $sql = "select cre_monto, cre_plazo, cre_interes, cre_tipo_amortizacion from creditos where cre_id = '".$idCredito."'";
        $query=Conexion::conectar()->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
}
