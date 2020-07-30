function llamadosel(){
    var docu=document.getElementById("iden").value;
    var tdocu=document.getElementById("txtdocumento").value.trim();
    //console.log(docu);
    if (docu==1){
        validaCedula();
    }if(docu==2) {
        if(tdocu.length>5){
            buscarCliente();
            clearDatC();
        }
    }if(docu==3) {
        if(tdocu.length>5){
            buscarCliente();
            clearDatC();
        }
    }
}
function validacion(){
    var docu=document.getElementById("iden").value;
    var tdocu=document.getElementById("txtdocumento").value.trim();
    if (docu==1){
        clearDatC();
        validaCedula();
    }if(tdocu.length>0 &&docu==0){
        alert("Seleccione el tipo de documento");
    }if(docu==2) {
        clearDatC();
        if(tdocu.length>5){
            buscarCliente();
            clearDatC();
        }
    }if(docu==3) {
        clearDatC();
        if(tdocu.length>5){
            buscarCliente();
            clearDatC();
        }
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
      var busqueda=$("#txtdocumento").val();
      $.ajax({
          url:'../../../sistemaCooperativa/controlador/credito/backcredito.php',
          type:'POST',
          data:{busqueda},
            success:  function(response){
              let obj = JSON.parse(response);
              if(obj.length>0){
                obj.forEach(obj => {
                          document.getElementById("txtnombre").value=obj.nombre;
                          document.getElementById("txtapellido").value=obj.apellido;
                          document.getElementById("txtemail1").value=(obj.correo).toLowerCase();
                          document.getElementById("txtemail2").value=(obj.correo).toLowerCase();
                          document.getElementById("txttelefono").value = obj.telefono;
                          document.getElementById("txtdireccion").value=obj.direccion;
                          document.getElementById("cboxsocio").checked = true;
                });
              }else{
                $("#txtnombre").removeAttr("readonly");
                $("#txtapellido").removeAttr("readonly");
                $("#txtemail1").removeAttr("readonly");
                $("#txtemail2").removeAttr("readonly");
                $("#txttelefono").removeAttr("readonly");
                $("#txtdireccion").removeAttr("readonly");
                document.getElementById("cboxsocio").checked = false;
              }
              
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
    document.getElementById("cboxsocio").checked = false;
  }

  function lisProv(){
    var busqueda="1";
    
    $.ajax({
        url:'../../../sistemaCooperativa/controlador/credito/provincia.php',
        type:'POST',
        data:{busqueda},
        success:  function(response){
            let obj = JSON.parse(response);
            
            obj.forEach(obj => {
                var option=$(document.createElement('option'));
                option.text(obj.nombre);
                option.val(obj.nombre);
                $("#cboxprovincia").append(option);
            });
        }
    })
  }
  window.onload = lisProv();
  function lisCiu(){
    document.getElementById('cboxciudad').innerText = "Seleccionar";
    var selec=document.getElementById("cboxprovincia").value;
    $.ajax({
        url:'../../../sistemaCooperativa/controlador/credito/ciudades.php',
        type:'POST',
        data:{selec},
        success:  function(response){
            let obj = JSON.parse(response);
            
            obj.forEach(obj => {
                var option=$(document.createElement('option'));
                option.text(obj.nombre);
                option.val(obj.nombre);
                $("#cboxciudad").append(option);
            });
        }
    })
  }
function mySubmitFunction(e){
    var socio = document.getElementById("cboxsocio").checked;
    var tCredito = document.getElementById("cboxtipoc").value;
    var tIden = document.getElementById("iden").value;
    var doc = document.getElementById("txtdocumento").value;
    var nombre = $("#txtnombre").val();
    var apellido = $("#txtapellido").val();
    var sexo = $("#cboxsexo").val();
    var ecivil = $("#ecivil").val();
    var email1 = $("#txtemail1").val();
    var email2 = $("#txtemail2").val();
    var telefono = $("#txttelefono").val();
    var provincia = $("#cboxprovincia").val();
    var ciudad = $("#cboxciudad").val();
    var direccion = $("#txtdireccion").val();
    var actividad = $("#txtactividad").val();
    var empresa = $("#txtempresa").val();
    var dempresa = $("#txtdiremp").val();
    var aempresa = $("#txtactividademp").val();
    var ingresos = $("#txtingresos").val();
    var avaluo = $("#txtavaluo").val();
    var monto = $("#txtmonto").val();
    var plazo = $("#txtmonto").val();

    if(tCredito!="Seleccionar" && tIden!="Seleccionar"
    &&doc.length>0 && nombre.length>0 && apellido.length>0 &&sexo!="Seleccionar" && ecivil!="Seleccionar" 
    &&email1!=""&& email2!="" && telefono.length>0 && provincia!="Seleccionar"&&ciudad!="Seleccionar"&&direccion.length>0
    &&actividad.length>0 && empresa.length>0 && dempresa.length>0 && aempresa.length>0 && ingresos.length>0
    &&avaluo.length>0 && monto.length>0 && parseFloat(monto)>0 && plazo>0 && parseInt(plazo)>0)
    {           
        var datos=$("#formCred").serialize();
        var direccion="../../../sistemaCooperativa/controlador/credito/guardarCredito.php";
        //alert("correcto");
        guardarDatos(datos, direccion);
        //alert(datos);
    }else{
        e.preventDefault();
        alert("falta");
    }
}
function guardarDatos(datos, direccion){
    $.ajax({
        type:"POST",
        url: (direccion),
        data:datos,
        success:function(r){
            console.log(r);
            alert(r);
        }
    });
}