import 'dart:convert';
import 'package:cooperativamovil/pages/estadoCuenta.dart';
import 'package:cooperativamovil/pages/login.dart';
import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;

void main() => runApp(LoginApp());

String username;

class LoginApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'Cooperativa Movil',
      home: LoginPage(),
      routes: <String, WidgetBuilder>{
        '/login': (BuildContext context) => new Login(),
        '/estadoCuenta': (BuildContext context) => new EstadoCuentas(),
        '/LoginPage': (BuildContext context) => LoginPage(),
      },
    );
  }
}

class LoginPage extends StatefulWidget {
  @override
  _LoginPageState createState() => _LoginPageState();
}

class _LoginPageState extends State<LoginPage> {
  TextEditingController controllerUser = new TextEditingController();
  TextEditingController controllerPass = new TextEditingController();

  String mensaje = '';

  Future<List> login() async {
    final response = await http.post(
        "http://10.0.2.2:8080/SisCooperativa/Publica/cooperativa_movil/conexion/login.php",
        body: {
          "usu_usuarios": controllerUser.text,
          "usu_password": controllerPass.text,
        });

    // If the server did return a 201 CREATED response,
    // then parse the JSON.

    var datouser = json.encode(response.body);
    var datauser = json.decode(datouser);

    if (datauser.length == 0) {
      setState(() {
        mensaje = "Usuario o contrasena incorrecta";
      });
    } else {
      if (datauser[0]['usu_tipo_usuario'] == 'Cliente') {
        Navigator.pushReplacementNamed(context, '/estadoCuenta');
      } else {
        Navigator.pushReplacementNamed(context, '/login');
      }

      setState(() {
        username = datauser[0]['username'];
      });
    }

    return datauser;
  }

  @override
  Widget build(BuildContext context) {
    Widget crearInput() {
      return Padding(
        padding: const EdgeInsets.only(top: 50),
        child: TextFormField(
          controller: controllerUser,
          decoration: InputDecoration(
              hintText: 'Usuario o Correo electronico',
              icon: Icon(
                Icons.email,
                color: Colors.black,
              )),
        ),
      );
    }

    Widget crearInput2() {
      return Padding(
        padding: const EdgeInsets.only(top: 5),
        child: TextFormField(
          controller: controllerPass,
          decoration: InputDecoration(
              hintText: 'Contraseña',
              icon: Icon(
                Icons.vpn_key,
                color: Colors.black,
              )),
          obscureText: true,
        ),
      );
    }

    Widget btnEntrar() {
      return Container(
        padding: const EdgeInsets.only(top: 20),
        child: RaisedButton(
          child: Text('Entrar'),
          shape: new RoundedRectangleBorder(
              borderRadius: new BorderRadius.circular(40.0)),
          onPressed: () {
            login();
            Navigator.pop(context);
          },
        ),
      );
    }

    Widget btnCambioPass() {
      return Container(
        padding: const EdgeInsets.only(top: 20),
        child: RaisedButton(
          child: Text('Cambiar Contraseña'),
          shape: new RoundedRectangleBorder(
              borderRadius: new BorderRadius.circular(40.0)),
          onPressed: () {},
        ),
      );
    }

    return Scaffold(
        body: Container(
      padding: EdgeInsets.symmetric(horizontal: 30),
      decoration: BoxDecoration(color: Colors.blueGrey),
      child: ListView(children: [
        Image.asset(
          'assets/images/LogoCUP.png',
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
