<!DOCTYPE html>
<html>
    <head>
        <link href="./img/favicon.png" rel="shortcut icon"/>
        <meta charset="utf-8"/>
        <meta content="width=1440, maximum-scale=1.0" name="viewport"/>
        <link href="./css/inicio.css" rel="stylesheet" type="text/css"/>
        <meta content="AnimaApp.com - Design to code, Automated." name="author">
        </meta>
    </head>
    <body style="margin: 0;
 background: rgba(255, 255, 255, 1.0);">
        <input id="anPageName" name="page" type="hidden" value="inicio"/>
        <div class="anima-container-center-horizontal">
            <div class="inicio anima-screen ">
                <div class="fondo-gHfdzk">
                    <div class="e2-80-94-pngtree-e2-80-94social-20media-20icons-20set-3551895-gm3OaT">
                    </div>
                    <div class="rectangle-xR2ake">
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
                <div class="cuerpo-W3vS2v anima-flexbox-container">
                    <div class="fondAdmi">
                        <div>
                            <h1>Depositos: </h1>
                        </div>
                        <div>
                            <?php
                            $cta=$_GET["cta"];
                            $nombre=$_GET["nombre"];
                            $apellido=$_GET["apellido"];
                            $cedula=$_GET["cedula"];
                            ?>
                        <form action="../../sistemaCooperativa/controlador/usuarios/realizarDep.php" method="POST">
                            <table class="tablaRegUsu">
                                <tbody>
                                    <tr></tr>
                                    <tr><td><label>Cuenta:</label></td><td><input id="txtcta" name="txtcta" value="<?php echo $cta?>" readonly=»readonly»></td></tr>
                                    <tr><td><label>Nombres:</label></td></td><td><input id="txtnombre" name="txtnombre" value="<?php echo $nombre?>" readonly=»readonly»></td></tr>
                                    <tr><td><label>Apellidos:</label> </td><td><input id="txtapellido" name="txtapellido" value="<?php echo $apellido?>" readonly=»readonly»></td></tr>
                                    <tr><td><label>Cedula/Pasaporte:</label></td><td><input id="txtcedula" name="txtcedula" value="<?php echo $cedula?>" readonly=»readonly»></td></tr>
                                    <tr><td><label>Cedula/Pasaporte del Depositante:</label></td><td><input id="txtcedulaDep" name="txtcedulaDep"></td></tr>
                                    <tr><td><label>Nombre del Depositante:</label></td><td><input id="txtnomDep" name="txtnomDep"></td></tr>
                                    <tr><td><label>Monto a depositar:</label></td><td><input id="txtmonto" name="txtmonto" ></td></tr>
                                    <tr><td><button type="submit" name="btndepositar" id="btndepositar">Depositar</button></td>
                                    <td><button type="submit" name="btncancelar" id="btncancelar">Cancelar</button></td></tr>
                                </tbody>
                            </table>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="encabesado-jjxew7">
                    <img class="rectangle-rCREGI" src="./img/inicio-rectangle-5.png"/>
                    <img class="rectangle-Wbaokx" src="./img/contactenos-rectangle-1.png"/>
                    <a href="inicio.html">
                        <img class="rectangle-91Pcc3" src="./img/inicio-rectangle-7@2x.png"/>
                    </a>
                    <div class="inico-Q4q8Pi font-class-1">
                        INICO
                    </div>
                    <a href="nosotros.html">
                        <img class="rectangle-rfFNEM" src="./img/nosotros-rectangle-3@2x.png"/>
                    </a>
                    <div class="nosotros-ip8ni7 font-class-1">
                        Nosotros
                    </div>
                    <a href="contactenos.html">
                        <img class="rectangle-A7bZhs" src="./img/contactenos-rectangle-4@2x.png"/>
                    </a>
                    <div class="contactanos-FpFxEv font-class-1">
                        Contactanos
                    </div>
                    <a href="noticias.html">
                        <img class="rectangle-zP8AVO" src="./img/noticias-rectangle-5@2x.png"/>
                    </a>
                    <div class="noticias-TCxFzP font-class-1">
                        Noticias
                    </div>
                    <a href="productoyservicios.html">
                        <img class="rectangle-bGRHnJ" src="./img/contactenos-rectangle-6@2x.png"/>
                    </a>
                    <div class="productos-y-servicios-uRxy3W font-class-1">
                        Productos yServicios
                    </div>
                    <img class="whats-app-image-2020-05-14-at-8-07-51-pm-E33ASQ" src="./img/login-whatsapp-image-2020-05-14-at-80751-pm@2x.png"/>
                    <div class="boton-CkmsDY">
                        <a href="login.html">
                            <img class="rectangle-6CDbpr" src="./img/noticias-rectangle-7@2x.png"/>
                        </a>
                        <div class="coprerativa-virtual-mH4mCL font-class-3">
                            Cerrar <br />Sesión
                        </div>
                    </div>
                </div>
                <div class="iconos-2-Vlaxun anima-flexbox-container">
                    <div class="overlap-group6-nxjBjH">
                        <div class="rectangle-9VoLNw">
                        </div>
                        <img class="iconos-3-v7TSqb" src="./img/inicio-iconos-3@2x.png"/>
                    </div>
                    <div class="overlap-group7-0KByYh">
                        <div class="rectangle-GqzhJ4">
                        </div>
                        <img class="iconos-4-DcyczL" src="./img/inicio-iconos-4@2x.png"/>
                    </div>
                    <div class="overlap-group5-ypHxwY">
                        <div class="rectangle-zF1Ge3">
                        </div>
                        <img class="iconos-xr2DH6" src="./img/inicio-iconos@2x.png"/>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <!-- End of Scripts -->
    </body>
</html>
