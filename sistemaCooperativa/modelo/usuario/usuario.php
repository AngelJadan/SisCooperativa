<?php

/**
 * Angel Mesias Jadan Corte.
 * 
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

require_once "../../conexiondb/conexiondb.php";

class Usuario extends Conexion {
    public function __construct(){
    }
    /**
     * Este metodo guarda los datos de una persona y usuario.
     * @param Recibe los datos personales de cada persona y ademas un usuario que puede elegir.
     */
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
    /**
     * Este metodo lo que hace es buscar un usuario con sus datos de la base de datos.
     * @param Recibe el usuario y la contraseña del usuari, pues de esta forma valida que
     * es el usuario propietario.
     */
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

    /**
     * Este metodo genera una contraseña de forma aleatoria.
     */
    public function generarContrasenia(){
        $caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $longpalabra=6;
        for($pass='', $n=strlen($caracteres)-1; strlen($pass) < $longpalabra ; ) {
        $x = rand(0,$n);
        $pass.= $caracteres[$x];
        }
        return $pass;
    }
    /**
     * Este metodo lo que hace es enviar los datos de correo, contraseña y usuario.
     * @param Recibe la contraseña generada, el correo a enviar y el nombre del usuario.
     */
    public function enviarEmail($password,$femail,$usuario){
            // Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'angel.jadan12@gmail.com';                     // correo ectronico a enivar
                $mail->Password   = '';                               // clave de correo electronico
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                //Recipients
                $mail->setFrom('angel.jadan12@gmail.com', 'Sistema registro de usuarios');
                $mail->addAddress($femail, $usuario);     // Add a recipient
                //$mail->addAddress('ellen@example.com');               // Name is optional
                //$mail->addReplyTo('info@example.com', 'Information');
                //$mail->addCC('cc@example.com');
                //$mail->addBCC('bcc@example.com');

                // Attachments
                //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Usuario y Contraseña';
                $mail->Body    = 'Sus credenciales son: </br> Su usuario es: '.$usuario."</br>"."Contraseña ".$password;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo 'Correo enviado';
            } catch (Exception $e) {
                echo "No se pudo enviar el correo Error: {$mail->ErrorInfo}";
            }
				
    }
}
?>