<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Amortizacion</title>
</head>

<body onload="generarTabla(), desabilitarTextos()">
    <?php
    $valor = $_GET["id"];
    ?>
    <div class="cabezeraDatos">
        <h1 class="titulos">Datos Cliente</h1>
    </div>
    <div class="cabezeraDatos">
        <?php
        require_once "../../sistemaCooperativa/controlador/usuarios/realizarEstadoCuenta.php";
        $ect = new EstadoCuenta();
        foreach ($ect->buscarDatos($valor) as $key => $value) {
        ?>
            <form action="" class="formulario">
                <label for="monto">Monto:</label>
                <input type="text" class="input" id="monto" name="monto" value="<?php echo $value['cre_monto'] ?>"><br>
                <label for="plazos">Plazo:</label>
                <input type="text" class="input" id="plazo" name="plazos" value="<?php echo $value['cre_plazo'] ?>"><br>
                <label for="intereses">Interes:</label>
                <input type="text" class="input" id="interes" name="Intereses" value="<?php echo $value['cre_interes'] ?>"><br>
                <label for="amortizacion">Amortizacion:</label>
                <input type="text" class="input" id="amortizacion" name="amortizacion" value="<?php echo $value['cre_tipo_amortizacion'] ?>">

            </form>
        <?php
        } ?>
    </div>
    <div class="tablaAmortizacion">
        <h1 class="titulos">TABLA DE AMORTIZACION</h1>
        <table id="lista-tabla">
            <thead>
                <tr>
                    <th>PERIODO</th>
                    <th>CUOTA</th>
                    <th>INTERESES</th>
                    <th>ABONO</th>
                    <th>SALDO</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>

    </div>
    <div class="btn">
        <button class="btnSalir" onclick="goBack()">Salir</button>
    </div>
    <script src="./js/moment.js"></script>
    <script src="./js/amortizacionTabla.js"></script>
    <link href="./css/tablaAmortizacion.css" rel="stylesheet" type="text/css" />
</body>

</html>