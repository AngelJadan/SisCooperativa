<?php

require_once "../../modelo/usuario/usuario.php";

$cedula = htmlspecialchars($_POST['txtcedula']);
$nombre = htmlspecialchars($_POST['txtnombre']);
$apellido = htmlspecialchars($_POST['txtapellido']);
$rol = htmlspecialchars($_POST['cboxrol']);
$correo = htmlspecialchars($_POST['txtcorreo']);
$telefono = htmlspecialchars($_POST['txttelefono']);
$direccion = htmlspecialchars($_POST['txtdireccion']);
$usuario = htmlspecialchars($_POST['txtusuario']);

echo $cedula.$nombre.$apellido.$rol.$correo.$telefono.$direccion.$usuario;

$user=new Usuario();
$password=$user->generarContrasenia();
//$envEmail=$user->enviarEmail($correo,$password,$usuario);

//echo "pas: ".$password;
$resultado=$user->insertarUsuario($cedula,$nombre,$apellido,$rol,$correo,$telefono,$direccion,$password,$usuario);

if($resultado=="Guardado"){
    if($rol=="Cliente"){
        header("Location: ../../../Publica/coperativa/regCliente.php?usuario=".$usuario."&nombre=".$nombre
        ."&apellido=".$apellido."&cedula=".$cedula);
    }else{
        header("Location: ../../../Publica/coperativa/administrativos.php");
    }
}


?>