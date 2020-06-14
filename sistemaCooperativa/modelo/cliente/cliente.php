<?php
require_once "../../conexiondb/conexiondb.php";

class Cliente extends Conexion {
    public function __construct(){
    }
    /**
     * @param Recibe un numero de cuenta a registrar y el nombre de usuario.
     * @return Devuelve un mensaje de Guardado si se reliza correctamente todo el proceso.
     */
    public function insertarCliente($cta,$usuario){
        $dia= date('d');
        $mes= date('m');
        $anio= date('yy');
        $fecha=$dia."/".$mes."/".$anio;
        
        $insPer="INSERT INTO CLIENTES VALUES(0,'".$cta."','".$fecha."','".$usuario."');";

        //echo $insPer;
        $query=Conexion::conectar()->prepare($insPer);
        $mensaje="";
        if($query->execute()){
            $mensaje=="Guardado";
        }else{
            $mensaje="Noguardado";
        }
        return $mensaje;
    }
    public function crearEstadoCta($cuenta,$operacion,$saldo){
        $dia= date('d');
        $mes= date('m');
        $anio= date('yy');
        $fecha=$anio."-".$mes."-".$dia;
        
        $insPer="INSERT INTO ESTADOCUENTAS VALUES(0,'".$fecha."','".$operacion."',".$saldo.",'".$cuenta."');";
        
        //echo $insPer;
        $query=Conexion::conectar()->prepare($insPer);
        $mensaje="";
        if($query->execute()){
            $mensaje="Guardado est. Cta.";
        }else{
            $mensaje="Noguardado est. cta.";
        }
        return $mensaje;
    }
    
    /**
     * @param Recibe el numero de cuenta del cliente.
     * @return Retrona una arreglo con los datos de 
     * numero de cuenta, nombre del cliente,
     * apellido del cliente, identificacion.
     */
    public function buscarCliente($cta){   
        echo $cta;   
        $sql="SELECT C.CLI_CUENTA_AHORROS,P.PER_NOMBRE,P.PER_APELLIDO,P.PER_IDENTIFICACION
        FROM CLIENTES C, USUARIOS U, PERSONAS P WHERE C.CLI_CUENTA_AHORROS='".$cta."' 
        AND C.USUARIOS_USU_USUARIO=U.USU_USUARIO AND U.PERSONAS_PER_IDENTIFICACION=P.PER_IDENTIFICACION;";
        
        $query=Conexion::conectar()->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    public function depositarCliente($cdepositante,$ndepositante,$monto,$cta,$cajero,$estCta){
        $dia= date('d');
        $mes= date('m');
        $anio= date('yy');
        $fecha=$dia."/".$mes."/".$anio;
        
        $insPer="INSERT INTO DEPOSITOS VALUES(0,'".$cdepositante."','".$ndepositante
        ."',".$monto.",'".$cta."','".$cajero."',".$estCta.",'".$fecha."');";

        //echo $insPer;
        $query=Conexion::conectar()->prepare($insPer);
        $mensaje="";
        if($query->execute()){
            $mensaje="Guardado";
        }else{
            $mensaje="Noguardado";
        }
        return $mensaje;
    }
    public function retirarCliente($cbene,$monto,$cajero,$cta,$estCtaId){
        $dia= date('d');
        $mes= date('m');
        $anio= date('yy');
        $fecha=$anio."-".$mes."-".$dia;
        
        $insPer="INSERT INTO Retiros VALUES(0,'".$cbene."',".$monto
        .",'".$fecha."','".$cajero."',".$cta.",".$estCtaId.");";

        //  echo $insPer;

        $query=Conexion::conectar()->prepare($insPer);
        $mensaje="";
        if($query->execute()){
            $mensaje="Retirado";
        }else{
            $mensaje="Noretirado";
        }
        return $mensaje;
    }
    public function consultaSaldo($cta){        
        $insPer="SELECT ECT_SALDO FROM ESTADOCUENTAS,CLIENTES 
        WHERE CLI_CUENTA_AHORROS=".$cta." AND CLIENTES_CLI_CUENTA_AHORROS=CLI_CUENTA_AHORROS";

        //echo $insPer;
        $query=Conexion::conectar()->prepare($insPer);
        $query->execute();
        return $query->fetchAll();
    }
    public function actualziarEstCta($cta, $nuevoSaldo,$opearacion){
        $dia= date('d');
        $mes= date('m');
        $anio= date('yy');
        $fecha=$anio."/".$mes."/".$dia;
        
        $insPer="INSERT INTO EstadoCuentas  VALUES(0,'".$fecha."','".$opearacion
        ."',".$nuevoSaldo.",'".$cta."');";

        //echo $insPer;
        $query=Conexion::conectar()->prepare($insPer);
        $mensaje="";
        if($query->execute()){
            $mensaje="Guardado";
        }else{
            $mensaje="Noguardado";
        }
        return $mensaje;
    }
    /**
     * Este método busca el id del estado de cuenta.
     * @param fecha del registro de la cuenta, $operacion: tipo INICIAL, DEPOSITO, RETIRO.
     * 
     */
    public function consultaIdEstCta($fecha,$operacion,$nuevoSaldo,$cta){
        $sql="SELECT ECT_ID FROM EstadoCuentas WHERE ect_fecha='".$fecha."' 
        AND ect_tipo_operacion='".$operacion."' AND ect_saldo=".$nuevoSaldo.
        " AND Clientes_cli_cuenta_ahorros='".$cta."';";
        
        $query=Conexion::conectar()->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    public function consultaEstCtaId($cta){
        $sql="SELECT ECT_ID FROM EstadoCuentas WHERE Clientes_cli_cuenta_ahorros='".$cta."';";
        
        $query=Conexion::conectar()->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
}
?>