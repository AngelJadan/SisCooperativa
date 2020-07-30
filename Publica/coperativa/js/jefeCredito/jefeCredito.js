function agregarFila() {
  var id;
  var identificacion;
  var amortizacion;
  var monto;
  var plazo;
  var cuotas;
  var estado;
  var interes;
  var tasa;
  var actividad;
  var empresa;
  var dirempresa;
  var tiempoempleo;
  var ingreso;
  var tipo;
  var proposito;
  var avaluo;
  var garante;
  var edad;
  var total;

  $.ajax({
    type: "POST",
    url: "../../../sistemaCooperativa/controlador//credito/listarCreditos.php",
    data:"" ,
    success: function (response){
      let obj = JSON.parse(response);
      obj.forEach(obj => {
         id=obj.id;
         identificacion = obj.identificacion;
         amortizacion = obj.amortizacion;
         monto = obj.monto;
         plazo = obj.plazo;
         cuotas = obj.cuotas;
         estado = obj.estado;
         interes = obj.interes;
         tasa = obj.tasa;
         actividad = obj.actividad;
         empresa = obj.empresa;
         dirempresa = obj.dirempresa;
         tiempoempleo = obj.tiempoempleo;
         ingreso = obj.ingreso;
         tipo = obj.tipo;
         proposito = obj.proposito;
         avaluo = obj.avaluo;;
         garante = obj.garante;
         edad = obj.edad;
         total = obj.total;
         
         document.getElementById("tblreporte").insertRow(-1).innerHTML = "<tr><label>"+id+
         "</label><td>"+identificacion+"</td><td>"+amortizacion+"</td><td>"+monto+"</td><td>"+plazo+"</td><td>"+cuotas+"</td><td>"+estado
         +"</td><td>"+interes+"</td><td>"+tasa+"</td><td>"+actividad+"</td><td>"+empresa+"</td><td>"+dirempresa+"</td><td>"+tiempoempleo
         +"</td><td>"+ingreso+"</td><td>"+tipo+"</td><td>"+proposito+"</td><td>"+avaluo+"</td><td>"+garante+"</td><td>"+edad+"</td><td>"+total
         +"</td><td><button>Aceptar</button></td><td><button>Rechazar</button></td></tr>";

      });
    }
  });
}
function leerCsv(){
  $.ajax({
    type: "GET",
    url: "../../../sistemaCooperativa/controlador//credito/datos.csv",
    dataType: "text",
    success: function(data) {processData(data);}
 });
}
function processData(allText) {
  var record_num = 5;  // or however many elements there are in each row
  var allTextLines = allText.split(/\r\n|\n/);
  var entries = allTextLines[0].split(',');
  var lines = [];

  var headings = entries.splice(0,record_num);
  while (entries.length>0) {
      var tarr = [];
      for (var j=0; j<record_num; j++) {
          tarr.Push(headings[j]+":"+entries.shift());
      }
      lines.Push(tarr);
  }
  // alert(lines);
}