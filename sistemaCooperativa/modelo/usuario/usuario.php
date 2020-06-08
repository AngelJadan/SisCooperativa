<?php
require_once "../../conexiondb/conexiondb.php";

class Usuario extends Conexion {
    public function __construct(){
    }
    public function insertarUsuario($cedula,$nombre,$apellido,$rol,$correo,$telefono,$direccion,$password,$usuario){
        $dia= date('d');
        $mes= date('m');
        $anio= date('yy');
        $fecha=$dia."/".$mes."/".$anio;
        
        $insPer="INSERT INTO PERSONAS VALUES(0,'".$cedula."','".$nombre."','".$apellido."','".$telefono."','".$direccion."','".$correo."');";
        $insUsu="INSERT INTO USUARIOS VALUES(0,'".$usuario."','".$password."','".$rol."','".$fecha."','".$cedula."');";

        echo $insPer.":  ".$insUsu;

        $query=Conexion::conectar()->prepare($insPer);
        $query2=Conexion::conectar()->prepare($insUsu);
        $mensaje="";
        if($query->execute()&&$query2->execute()){
            $mensaje="Guardado";
        }else{
            $mensaje="Noguardado";
        }
        return $mensaje;
    }
    public function buscarUsuario($usuario,$password){   
        echo $usuario;   
        $sql="SELECT * FROM USUARIOS WHERE USU_USUARIO='".$usuario."' AND USU_PASSWORD='".$password."';";
        $query=Conexion::conectar()->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function buscarUsuarioPer($usuario,$cedula){   
        echo $usuario;   
        $sql="SELECT U.usu_usuario, P.per_identificacion FROM USUARIOS U, PERSONAS P WHERE USU_USUARIO='".$usuario."' AND USU_PERSONAS_IDENTIFICACION='".$cedula."';";
        $query=Conexion::conectar()->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function generarContrasenia(){
        $caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $longpalabra=6;
        for($pass='', $n=strlen($caracteres)-1; strlen($pass) < $longpalabra ; ) {
        $x = rand(0,$n);
        $pass.= $caracteres[$x];
        }
        return $pass;
    }
    public function enviarEmail($correo,$password,$usuario){
        
				include("sendemail.php");//Mando a llamar la funcion que se encarga de enviar el correo electronico
				
				/*Configuracion de variables para enviar el correo*/
				$mail_username="angel.jadan12@gmail.com";//Correo electronico saliente ejemplo: tucorreo@gmail.com
				$mail_userpassword="";//Tu contraseña de gmail
				$mail_addAddress=$correo;//correo electronico que recibira el mensaje
				$template="email_template.html";//Ruta de la plantilla HTML para enviar nuestro mensaje
				
				/*Inicio captura de datos enviados por $_POST para enviar el correo */
				$mail_setFromEmail=$_POST['customer_email'];
				$mail_setFromName=$_POST['customer_name'];
				$txt_message=$_POST['message'];
				$mail_subject=$_POST['subject'];
				
				sendemail($mail_username,$mail_userpassword,$mail_setFromEmail,$mail_setFromName,$mail_addAddress,$txt_message,$mail_subject,$template);//Enviar el mensaje
    }
}
?>