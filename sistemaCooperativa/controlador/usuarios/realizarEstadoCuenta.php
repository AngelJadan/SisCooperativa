<?php
require_once '../../sistemaCooperativa/conexiondb/conexiondb.php';

class EstadoCuenta extends Conexion{
     
    public function __construct(){  }

    public function listarEstadoCuenta(){
        $sql = "select cli_cuenta_ahorros, usuarios_usu_usuario, ect_fecha,ect_saldo  from estadocuentas inner join clientes where estadocuentas.ect_id=clientes.cli_id";
        //$sql ="select * from estadocuentas;";
        $query=Conexion::conectar()->prepare($sql);
        $query->execute();
        return $query->fetchAll();

    }
}
?>