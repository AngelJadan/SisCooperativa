const monto = 5000;
const plazo = 12;
const interes = 0.3;

const llenarTabla = document.querySelector('#resumenCre tbody');

function calcularCuota(monto, plazo, interes) {

    let fechas = [];
    let fechaActual = Date.now();
    let mes_actual = moment(fechaActual);

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
            <td>${pagoCapital.toFixed(2)}</td>
            <td>${pagoInteres.toFixed(2)}</td>
            <td>${monto.toFixed(2)}</td>`;
    }
    console.log(cuota);
}