(
    function(){
        var formuario=document.getElementsByName("formCred")[0];
        var elementos=formuario.getElements;
        var boton=document.getElementById("enviar");

        var validaCampos = function (e) {
            if (formuario.txtdocumento.value.length>0){
                alert("00")
            }
    }

        var validar= function (e) {
            validaCampos(e);
    }
        formuario.addEventListener("submit", validar);
    }()
)