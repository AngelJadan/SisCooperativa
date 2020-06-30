<?php

require_once "../../modelo/usuario/usuario.php";
<<<<<<< HEAD
=======
require_once "../../modelo/accesos.php";
>>>>>>> master

$usuario = htmlspecialchars($_POST['txtusuario']);
$password = htmlspecialchars($_POST['txtpassword']);

<<<<<<< HEAD
$user=new Usuario();
=======

$user=new Usuario();
$acc=new accesoModelo();

>>>>>>> master
$resultado=$user->buscarUsuario($usuario,$password);
$usubd="";
foreach($resultado as $key =>$value){
    $usubd=$value["usu_usuario"];
<<<<<<< HEAD
}
if($usuario==$usubd){
    header("");
}else{
    echo "usuario o clave incorrecta";
}

=======
    $tusu=$value["usu_tipo_usuario"];
}
if($usuario==$usubd){
    $dia= date('d');
    $mes= date('m');
    $anio= date('yy');
    $fecha=$dia."/".$mes."/".$anio;
    $acc->guardarAccesos($fecha,$tusu,'conectado',$usubd);
}

/**
 * revisa que tipo de usuario es y redirecciona a cada directorio
 */
if($usuario==$usubd){
    session_start();
    $_SESSION["usuario"]=$usuario;
    
    if($tusu=="Cajero"){
        header("Location: ../../../Publica/coperativa/InicioCajero.php?usuario=".$usuario);
    }if($tusu=="Administrador"){
        header("Location: ../../../Publica/coperativa/administrativos.php?usuario=".$usuario);
    }if($tusu=="Cliente"){
        header("Location: ../../../Publica/coperativa/cajeroEstadoCuenta.php?usuario=".$usuario);
    }
}else{
    //echo "usuario o clave incorrecta";
    ?>
    <script type="text/javascript">
    window.alert("Usuario o contraseña incorrectos");
    window.location.href="../../../Publica/coperativa/login.html";
    </script>
    <?php
}


>>>>>>> master
?>