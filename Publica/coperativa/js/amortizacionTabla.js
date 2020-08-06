function obtenerIdTabla() {
    var table = document.getElementById("resumenCre");
    var rows = table.getElementsByTagName("tr");
    for (i = 0; i < rows.length; i++) {
        var currentRow = table.rows[i];
        var createClickHandler = function(row) {
            return function() {
                var cell = row.getElementsByTagName("td")[0];
                var id = cell.innerHTML;
                window.location.href = '././amortizacion.php?id=' + id;
            };
        };
        currentRow.onclick = createClickHandler(currentRow);
    }
}

function generarTabla() {

    var monto = document.getElementById('monto');
    const plazo = document.getElementById('plazo');
    const interes = document.getElementById('interes');
    const llenarTabla = document.querySelector('#lista-tabla tbody');

    calcularCuota(monto.value, plazo.value, interes.value);

    function calcularCuota(monto, plazo, interes) {
        let fechas = [];
        let fechaActual = Date.now();
        let mes_actual = moment(fechaActual);
        mes_actual.add(1, 'month');

        let pagoInteres = 0,
            pagoCapital = 0,
            cuota = 0;

        cuota = monto * (Math.pow(1 + interes / 100, plazo) * interes / 100) / (Math.pow(1 + interes / 100, plazo) - 1);

        for (let i = 1; i <= plazo; i++) {

            pagoInteres = parseFloat(monto * (interes / 100));
            pagoCapital = cuota - pagoInteres;
            monto = parseFloat(monto - pagoCapital);

            //fomato Fecha
            fechas[i] = mes_actual.format('DD-MM-YY');
            mes_actual.add(1, 'month');
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${fechas[i]}</td>
                <td>${cuota.toFixed(2)}</td>
                <td>${pagoInteres.toFixed(2)}</td>
                <td>${pagoCapital.toFixed(2)}</td>
                <td>${monto.toFixed(2)}</td>
            `;
            llenarTabla.appendChild(row);
        }

    }



}

function goBack() {
    window.history.back();
}

function desabilitarTextos() {
    document.getElementById('monto').disabled = true;
    document.getElementById('plazo').disabled = true;
    document.getElementById('interes').disabled = true;
    document.getElementById('amortizacion').disabled = true;
}