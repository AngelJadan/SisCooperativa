<!DOCTYPE html>
<html>
    <head>
        <link href="./img/favicon.png" rel="shortcut icon"/>
        <meta charset="utf-8"/>
        <meta content="width=1440, maximum-scale=1.0" name="viewport"/>
        <link href="./css/inicio.css" rel="stylesheet" type="text/css"/>
        <link href="./css/administrativos.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="./js/validacionusuario.js"></script>
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
                            <h1>Bienvenido: </h1>
                        </div>
                        <div>
                        <form action="../../sistemaCooperativa/controlador/usuarios/registrarUsu.php" method="POST" name="formDatos" id="formDatos">
                            <table class="tablaRegUsu">
                                <tbody>
                                    <tr><td><label>Cedula:</label></td><td><input id="txtcedula" name="txtcedula" onkeyup="cedula()" ></td><td><label id="vcedula" name="vcedula"></label></td></tr>
                                    <tr><td><label>Nombres:</label></td></td><td><input id="txtnombre" name="txtnombre"></td><td><label id="vnombre"name="vnombre"></label></td></tr>
                                    <tr><td><label>Apellidos:</label> </td><td><input id="txtapellido" name="txtapellido"></td><td><label id="vapellido" name="vapellido"></label></td></tr>
                                    <tr><td><label>Rol</label></td><td><select name="cboxrol">
                                                                                    <option value="Administrador">Administrador</option> 
                                                                                    <option value="Cajero" selected>Cajero</option>
                                                                                    <option value="Cliente">Cliente</option>
                                                                                    <option value="Asesor">Asesor de crédito</option>
                                                                        </select></td><td></td></tr>
                                    <tr><td><label>Correo:</label></td><td><input id="txtcorreo" name="txtcorreo" onkeyup="validaCorreo()"></td><td><label id="vcorreo" name="vcorreo"></label></td></tr>
                                    <tr><td><label>Teléfono:</label></td><td><input id="txttelefono" name="txttelefono"></td><td><label id="vtelefono" name="vtelefono"></label></td></tr>
                                    <tr><td><label>Direccion:</label></td><td><input id="txtdireccion" name="txtdireccion"></td><td><label id="vdireccion" name="vdireccion"></label></td></tr>
                                    <tr><td><label>Usuario:</label></td><td><input id="txtusuario" name="txtusuario"></td><td> <label id="vusuario" name="usuario"></label></td></tr>
                                    <tr><td><button type="submit" name="registrar" id="registrar">Registrar</button></td>
                                    <td><button type="submit" name="actualizar" id="actualizar">Actualizar</button></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><input type="button" onclick="limpiarFormulario()" value="Limpiar formulario"></td>
                                    </tr>
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
                            <a href="../../sistemaCooperativa/controlador/usuarios/cerrarSesion.php">Cerrar<br />Sesión</a>
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
        <script type="text/javascript">
                                    (
                                        function(){
                                            var formulario = document.getElementsByName("formDatos")[0];
                                            var elementos=formulario.getElements;
                                            var boton = document.getElementById("registrar");

                                            var validaCedula = function(e){
                                                if(formulario.txtcedula.value<10||formulario.txtcedula.value>10){
                                                    formulario.txtcedula.style.color="red";
                                                    e.preventDefault();
                                                }if(formulario.txtcedula.style.color=="red"){
                                                    e.preventDefault();
                                                }if(formulario.txtcedula.value<1){
                                                    formulario.txtcedula.value="*";
                                                    formulario.txtcedula.style.color="red";
                                                    e.preventDefault();
                                                }
                                            }
                                            var validaNombre = function(e){
                                                if(formulario.txtnombre.value<1){
                                                    formulario.txtnombre.value="*";
                                                    formulario.txtnombre.style.color="red";
                                                    e.preventDefault();
                                                }
                                            }
                                            var validaApellido = function(e){
                                                if(formulario.txtapellido.value.length<1){
                                                    formulario.txtapellido.value="*";
                                                    formulario.txtapellido.style.color="red";
                                                    e.preventDefault();
                                                }
                                            }
                                            var validaCorreo = function(e){
                                                if(formulario.txtcorreo.value.length<1){
                                                    formulario.txtcorreo.value="*";
                                                    formulario.txtcorreo.style.color="red";
                                                    e.preventDefault();
                                                }if(formulario.txtcorreo.style.color=="red"){
                                                    e.preventDefault();
                                                }
                                            }
                                            var validaTelefono = function(e){
                                                if(formulario.txttelefono.value.length<1){
                                                    formulario.txttelefono.value="*";
                                                    formulario.txttelefono.style.color="red";
                                                    e.preventDefault();
                                                }if(formulario.txttelefono.style.color=="red"){
                                                    e.preventDefault();
                                                }
                                            }
                                            var validaDireccion = function(e){
                                                if(formulario.txtdireccion.value.length<1){
                                                    formulario.txtdireccion.value="*";
                                                    formulario.txtdireccion.style.color="red";
                                                    e.preventDefault();
                                                }if(formulario.txtdireccion.style.color=="red"){
                                                    e.preventDefault();
                                                }
                                            }
                                            var validaUsuario = function(e){
                                                if(formulario.txtusuario.value.length<1){
                                                    formulario.txtusuario.value="*";
                                                    formulario.txtusuario.style.color="red";
                                                    e.preventDefault();
                                                }if(formulario.txtusuario.style.color=="red"){
                                                    e.preventDefault();
                                                }
                                            }
                                            var validar = function(e){
                                                validaCedula(e);
                                                validaNombre(e);
                                                validaApellido(e);
                                                validaCorreo(e);
                                                validaTelefono(e);
                                                validaDireccion(e);
                                                validaUsuario(e);
                                            }
                                            formulario.addEventListener("submit", validar);
                                        }()
                                    )
                                    </script>
    </body>
</html>
