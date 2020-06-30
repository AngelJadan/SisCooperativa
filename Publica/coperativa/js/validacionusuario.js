/**
 * Llama a la funcion de validarCedula y le corre.
 */
function cedula(){
  validarCedula();
}
/**
 * Vaclia el numero de la cedula
 */
function validarCedula() {
  var ced=document.getElementById("txtcedula").value;
  if(ced.length==10){
    var cad = document.getElementById("txtcedula").value.trim();
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
        document.getElementById("txtcedula").style.color = "green";
      }else{
        document.getElementById("txtcedula").style.color = "red";
      }
    }
  }
  if (ced.length>10 || ced.length<10){
    document.getElementById("txtcedula").style.color = "red";
  }
}
/**
 * valida el campo del correo electronico
 * 
 */
function validaCorreo(){
  mail=document.getElementById("txtcorreo").value.trim();
  
  var patron=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
  if(mail.search(patron)==0)
	{
		//Mail correcto
		document.getElementById("txtcorreo").style.color = "green";
	}else{
    document.getElementById("txtcorreo").style.color = "red";
  }
}
function limpiarFormulario(){
  document.getElementById("txtcedula").value="";
  document.getElementById("txtnombre").value="";
  document.getElementById("txtapellido").value="";
  document.getElementById("txtcorreo").value = "";
  document.getElementById("txttelefono").value="";
  document.getElementById("txtdireccion").value = "";
  document.getElementById("txtusuario").value = "";

  document.getElementById("txtcedula").style.color="black";
  document.getElementById("txtnombre").style.color="black";
  document.getElementById("txtapellido").style.color="black";
  document.getElementById("txtcorreo").style.color="black";
  document.getElementById("txttelefono").style.color="black";
  document.getElementById("txtdireccion").style.color="black";
  document.getElementById("txtusuario").style.color="black";
}