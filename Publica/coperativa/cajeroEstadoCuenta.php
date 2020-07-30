<!DOCTYPE html>
<html>

<head>
    <link href="./img/favicon.png" rel="shortcut icon" />
    <meta charset="utf-8" />
    <meta content="width=1440, maximum-scale=1.0" name="viewport" />
    <link href="./css/estadoCuenta.css" rel="stylesheet" type="text/css" />
    <script src="./js/calculoAmortizacion.js"></script>
    <script src="./js/moment.js"></script>
    <meta content="AnimaApp.com - Design to code, Automated." name="author">
    </meta>
</head>

<body style="margin: 0;
 background: rgba(255, 255, 255, 1.0);">
    <input id="anPageName" name="page" type="hidden" value="inicio" />
    <div class="anima-container-center-horizontal">
        <div class="inicio anima-screen ">

            <div class="cuerpo-W3vS2v anima-flexbox-container">

                <div class="fondAdmi">

                    <div>

                        <?php
                        $cliente = $_GET["usuario"];
                        echo "<h2>Bienvenido: $cliente</h2>";
                        ?>

                        <table border="1">
                            <tr>
                                <th>Número </th>
                                <th>Tipo de transacción</th>
                                <th>Fecha última transacción</th>
                                <th>Saldo</th>
                            </tr>
                            <?php
                            require_once "../../sistemaCooperativa/controlador/usuarios/realizarEstadoCuenta.php";
                            $ect = new EstadoCuenta();

                            $saldo = 0;
                            foreach ($ect->listarEstadoCuenta($cliente) as $key => $value) {
                                $saldo = $value['ect_saldo'];
                            ?>
                                <tr>
                                    <td><?php echo $row = $value['ect_id'] ?></td>
                                    <td><?php echo $row = $value['ect_tipo_operacion'] ?></td>
                                    <td><?php echo $row = $value['ect_fecha'] ?></td>
                                    <td><?php echo $row = $value['ect_saldo'] ?></td>
                                </tr>
                            <?php
                            } ?>
                            <tr>
                                <td colspan="3">Saldo disponible</td>
                                <td><?php echo $saldo ?></td>
                            </tr>
                        </table>

                    </div>
                </div>

            </div>
            <div class="cuerpo-W3vS2v anima-flexbox-container">
                <div>
                    <?php
                    $cliente = $_GET["usuario"];
                    ?>

                    <table>
                        <tr>
                            <th>Fecha</th>
                        </tr>
                        <?php
                        require_once "../../sistemaCooperativa/controlador/usuarios/realizarEstadoCuenta.php";
                        $ect = new EstadoCuenta();

                        foreach ($ect->listarAccesos($cliente) as $key => $value) {
                        ?>
                            <tr>
                                <td><?php echo $row = $value['ace_fecha_intento'] ?></td>

                            </tr>
                        <?php
                        } ?>

                        </tr>
                    </table>
                </div>
                <div>
                    <?php
                    $cliente = $_GET["usuario"];
                    ?>

                    <table id="resumenCre" border="2">
                        <tbody>
                            <tr>
                                <th>Num. Credito</th>
                                <th>Tipo</th>
                                <th>Valor Credito</th>
                                <th>Saldo</th>
                                <th>Fecha ultimo Vencimiento</th>
                            </tr>
                            <?php
                            require_once "../../sistemaCooperativa/controlador/usuarios/realizarEstadoCuenta.php";

                            $ect = new EstadoCuenta();

                            foreach ($ect->resumenCreditos($cliente) as $key => $value) {
                            ?>
                                <tr>
                                    <td><?php echo $row = $value['cre_id'] ?></td>
                                    <td><?php echo $row = $value['dcr_tipo'] ?></td>
                                    <td><?php echo $row = $value['cre_monto'] ?></td>
                                    <td><?php echo $row = $value['ect_saldo'] ?></td>
                                    <td><?php echo $row = $value['cuo_fecha'] ?></td>
                                    <td><input type="button" id="btnCalculatr" value="Amortiacion" onclick="calcularCuota(5000, 12, 1.5)">

                                </tr>

                            <?php
                            } ?>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="encabesado-jjxew7">
                <img class="rectangle-rCREGI" src="./img/inicio-rectangle-5.png" />
                <img class="rectangle-Wbaokx" src="./img/contactenos-rectangle-1.png" />
                <a href="inicio.html">
                    <img class="rectangle-91Pcc3" src="./img/inicio-rectangle-7@2x.png" />
                </a>
                <div class="inico-Q4q8Pi font-class-1">
                    INICO
                </div>
                <a href="nosotros.html">
                    <img class="rectangle-rfFNEM" src="./img/nosotros-rectangle-3@2x.png" />
                </a>
                <div class="nosotros-ip8ni7 font-class-1">
                    Nosotros
                </div>
                <a href="contactenos.html">
                    <img class="rectangle-A7bZhs" src="./img/contactenos-rectangle-4@2x.png" />
                </a>
                <div class="contactanos-FpFxEv font-class-1">
                    Contactanos
                </div>
                <a href="noticias.html">
                    <img class="rectangle-zP8AVO" src="./img/noticias-rectangle-5@2x.png" />
                </a>
                <div class="noticias-TCxFzP font-class-1">
                    Noticias
                </div>
                <a href="productoyservicios.html">
                    <img class="rectangle-bGRHnJ" src="./img/contactenos-rectangle-6@2x.png" />
                </a>
                <div class="productos-y-servicios-uRxy3W font-class-1">
                    Productos yServicios
                </div>
                <img class="whats-app-image-2020-05-14-at-8-07-51-pm-E33ASQ" src="./img/login-whatsapp-image-2020-05-14-at-80751-pm@2x.png" />
                <div class="boton-CkmsDY">
                    <a href="login.html">
                        <img class="rectangle-6CDbpr" src="./img/noticias-rectangle-7@2x.png" />
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
                    <img class="iconos-3-v7TSqb" src="./img/inicio-iconos-3@2x.png" />
                </div>
                <div class="overlap-group7-0KByYh">
                    <div class="rectangle-GqzhJ4">
                    </div>
                    <img class="iconos-4-DcyczL" src="./img/inicio-iconos-4@2x.png" />
                </div>
                <div class="overlap-group5-ypHxwY">
                    <div class="rectangle-zF1Ge3">
                    </div>
                    <img class="iconos-xr2DH6" src="./img/inicio-iconos@2x.png" />
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <!-- End of Scripts -->
</body>

</html>