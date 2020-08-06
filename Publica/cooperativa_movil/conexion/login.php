<?php

    include 'conexion.php';

    $username = $_POST['usu_usuario'];
    $password = $_POST['Usu_password'];

    $consultar=$connect->query("SELECT * FROM usuarios WHERE usu_usuario='".$username."' and password='".$usu_password."'");

    $resultado=array();

    while($extraerDatos=$consultar->fetch_assoc()){
        $resultado[]=$extraerDatos;
    }

    echo json_encode($resultado);

    ?>