<!DOCTYPE html>
<html>
    <head>
        <link href="./img/logo.png" rel="shortcut icon"/>
        <meta charset="utf-8"/>
        <meta content="width=1440, maximum-scale=1.0" name="viewport"/>
        <link href="./css/consultafecha.css" rel="stylesheet" type="text/css"/>
        <meta content="AnimaApp.com - Design to code, Automated." name="author">
    </head>
    <body style="margin: 0;background: rgba(255, 255, 255, 1.0);">
        <input id="anPageName" name="page" type="hidden" value="cansultafecha"/>
        <form action="consultafecha.php" method="post">
             <?php include("conexion.php");
                        if(isset($_SESSION['message'])){?>
            <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?=  $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
           
            <?php session_unset(); } #Libera todas las variables de sesión ?>
    
        <div class="anima-container-center-horizontal">
            <div class="cansultafecha anima-flexbox-container anima-screen ">
                <div class="encabesado-jjxew7">
                    <img class="rectangle-rCREGI" src="./img/inicio-rectangle-5.png"/>
                    <img class="rectangle-Wbaokx" src="./img/cansultafecha-rectangle-1.png"/>
                    <a href="cansultafecha.html">
                        <img class="rectangle-91Pcc3" src="./img/inicio-rectangle-7@2x.png"/>
                    </a>
                    <div class="inico-Q4q8Pi font-class-1">
                        INICO
                    </div>
                    <a href="cansultafecha.html">
                        <img class="rectangle-rfFNEM" src="./img/cansultafecha-rectangle-3@2x.png"/>
                    </a>
                    <div class="mi-cuenta-Bratmu font-class-1">
                        Mi cuenta
                    </div>
                    <a href="cansultafecha.html">
                        <img class="rectangle-A7bZhs" src="./img/contactenos-rectangle-4@2x.png"/>
                    </a>
                    <a href="cansultafecha.html">
                        <img class="rectangle-zP8AVO" src="./img/contactenos-rectangle-4@2x.png"/>
                    </a>
                    <a href="cansultafecha.html">
                        <img class="rectangle-bGRHnJ" src="./img/contactenos-rectangle-4@2x.png"/>
                    </a>
                    <div class="consultar-acceso-h1xAT8 font-class-1">
                        Consultar<br />acceso
                    </div>
                    <div class="modificar-usuario-gWGMOx font-class-1">
                        Modificar<br />Usuario
                    </div>
                    <div class="perfil-9YiQ1v font-class-1">
                        Perfil
                    </div>
                    <a href="cansultafecha.html">
                        <img class="rectangle-dwB45Y" src="./img/noticias-rectangle-5@2x.png"/>
                    </a>
                    <div class="solisitar-credito-kEIu4f font-class-1">
                        Solisitar<br />credito
                    </div>
                    <a href="cansultafecha.html">
                        <img class="rectangle-r9t2OO" src="./img/cansultafecha-rectangle-8@2x.png"/>
                    </a>
                    <div class="consultar-estado-2xTcs5 font-class-1">
                        Consultar<br />estado
                    </div>
                    <img class="logo" src="./img/logo.png"/>
                    <a href="cansultafecha.html">
                        <div class="boton-CkmsDY anima-flexbox-container">
                            <div class="cerrar-sesion-KxDLYJ font-class-3">
                                Cerrar<br /> Sesion
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cuerpo-YJb1mx anima-flexbox-container">
                    <div class="fecha-6069GP anima-flexbox-container">
                        <div class="dd-wd0IjM font-class-1">
                            <p>                 
                            Desde: <input type="date" name="hasta" list="listafechascita"> </p>
                            <p>  
                            Hasta: <input type="date" name="hasta" list="listafechascita">
                            </p>
          
                        </div>
                        <div class="boton-consulta-xgv5zX anima-flexbox-container">
                            <a href="cansultafecha.html">
                                <div class="consultar-rxqKGU font-class-1">
                                
                                    <input class="consultar-rxqKGU font-class-1" type="submit" value="Consultar">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tabla-fecha-AH5GsO anima-flexbox-container">
                         <div>
                        <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Detalle</th>
                              <!--  <th>Deposito</th>
                                <th>Retiros</th>-->
                                <th>Saldo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php       $desde = $_POST['desde'];
                                        $hasta = $_POST['hasta'];
                                        $query = "SELECT * FROM `estadocuentas` WHERE   ect_fecha BETWEEN '$desde' AND '$hasta'";
                                        $result = mysqli_query($conn, $query);

                                         
                                        while($row = mysqli_fetch_array($result)){ 
                                        #Obtiene una fila de resultados como un array asociativo, numérico, o ambos
                            ?>
                            <tr>
                                <td><?php echo $row['ect_fecha'] ?></td>
                                <td><?php echo $row['ect_tipo_operacion'] ?></td>
                              <!--  <td><?php echo $row['Deposito'] ?></td>
                                <td><?php echo $row['Retiros'] ?></td>-->
                                <td><?php echo $row['ect_saldo'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                <div class="pie-de-pagina-dtfXso anima-flexbox-container">
                    <div class="cooperativa-progres-3E6yx3 font-class-1">
                        Cooperativa "Progresista" Ltda.
                    </div>
                    <div class="todos-los-derechos-r-88lQJw font-class-1">
                        Todos los derechos reservados | Ecuador 2020
                    </div>
                </div>
            </div>
        </div>
        </form>
        <!-- Scripts -->
        
       
        <!-- End of Scripts -->
    </body>
</html>
