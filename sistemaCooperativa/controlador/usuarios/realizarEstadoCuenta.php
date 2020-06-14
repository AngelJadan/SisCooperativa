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
}
?>