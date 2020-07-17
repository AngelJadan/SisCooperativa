function llamadosel(){
    var docu=document.getElementById("  ").value;
    var tdocu=document.getElementById("txtdocumento").value.trim();
    console.log(tdocu.length);
    if (docu==1){
        validaCedula();
    }if(docu==2) {
        clearDatC();
    }if(docu==3) {
        clearDatC();
    }
}
function validacion(){
    var docu=document.getElementById("iden").value;
    var tdocu=document.getElementById("txtdocumento").value.trim();
    if (docu==1){
        validaCedula();
        console.log("ced");
    }if(tdocu.length>0 &&docu==0){
        alert("Seleccione el tipo de documento");
    }if(docu==2) {
        clearDatC();
    }if(docu==3) {
        clearDatC();
    }
}
function validaCedula() {
    $('#txtdocumento').keyup(function (){
        let docu=$('#txtdocumento').val();
        if (docu.length==10){var ced=document.getElementById("txtdocumento").value;
            if(ced.length==10){
            var cad = document.getElementById("txtdocumento").value.trim();
            var total = 0;
            var longitud = cad.length;
            var longcheck = longitud - 1;
        
            if (cad !== "" && longitud === 10){
                for(i = 0; i < longcheck; i++){
                if (i%2 === 0) {
                    var aux = cad.charAt(i) * 2;
                    if (aux > 9) aux -= 9;
                    total += aux;
                } else {
                    total += parseInt(cad.charAt(i)); // parseInt o concatenará en lugar de sumar
                }
                }
        
                total = total % 10 ? 10 - total % 10 : 0;
        
                if (cad.charAt(longitud-1) == total) {
                document.getElementById("txtdocumento").style.color = "green";
                buscarCliente();
                }else{
                document.getElementById("txtdocumento").style.color = "red";
                clearDatC();
                }
            }
            }
            if (ced.length>10 || ced.length<10){
            document.getElementById("txtdocumento").style.color = "red";
            }
        }
        if (docu.length==0||docu.length>10 && document.getElementById("cedula")!="cedula"){
            document.getElementById("txtdocumento").style.color = "black"
        }
    })
  }
  function buscarCliente(){
      var busqueda=document.getElementById('txtdocumento').value;
      var json;
      $.ajax({
          url:'../../../sistemaCooperativa/controlador/credito/backcredito.php',
          type:'POST',
          data:{busqueda},
          success:  function(response){
              let obj = JSON.parse(response);
              obj.forEach(obj => {
                  document.getElementById("txtnombre").value=obj.nombre;
                  document.getElementById("txtapellido").value=obj.apellido;
                  document.getElementById("txtemail1").value=(obj.correo).toLowerCase();
                  document.getElementById("txtemail2").value=(obj.correo).toLowerCase();
                  document.getElementById("txttelefono").value = obj.telefono;
                  document.getElementById("txtdireccion").value=obj.direccion;
              });
          }
      })
  } 
  function clearDatC(){
    document.getElementById("txtnombre").value="";
    document.getElementById("txtapellido").value="";
    document.getElementById("txtemail1").value="";
    document.getElementById("txtemail2").value="";
    document.getElementById("txttelefono").value = "";
    document.getElementById("txtdireccion").value="";
  }
