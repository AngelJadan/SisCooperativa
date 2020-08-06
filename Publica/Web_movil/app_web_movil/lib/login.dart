import 'package:flutter/material.dart';

String usename;

class LoginPage extends StatelessWidget {
  
  Widget crearInput() {
    return Padding(
      padding: const EdgeInsets.only(top: 50),
      child: TextFormField(
        decoration: InputDecoration(hintText: 'Usuario o Correo electronico'),
      ),
    );
  }

  Widget crearInput2() {
    return Padding(
      padding: const EdgeInsets.only(top: 5),
      child: TextFormField(
        decoration: InputDecoration(hintText: 'Contraseña'),
        obscureText: true,
      ),
    );
  }
  Widget btnEntrar(){
    return Container(
      padding: const EdgeInsets.only(top: 20),
      child: RaisedButton(
        child: Text('Entrar'),
        onPressed: (){},
      ),
    );
  }
  Widget btnCambioPass(){
    return Container(
      padding: const EdgeInsets.only(top: 20),
      child: RaisedButton(
        child: Text('Cambiar Contraseña'),
        onPressed: (){},
      ),
    );
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        body: Container(
      padding: EdgeInsets.symmetric(horizontal: 30),
      decoration: BoxDecoration(color: Colors.blueGrey),
      child: ListView(children: [
        Image.asset(
          'assets/image/LogoCUP_02.png',
          width: 340,
          height: 230,
        ),
        crearInput(),
        crearInput2(),
        btnEntrar(),
        btnCambioPass(),
      ]),
    ));
  }
}
