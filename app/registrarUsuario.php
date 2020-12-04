<?php
require_once('libs/Class.bdatos.php');

/*Datos enviados del formulario */
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$login = $_POST['login'];
$email = $_POST['email'];
//$password = $_POST['password'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); //bcrypt
$sql = "INSERT INTO usuario(nombre, apellidos, login, email, password) VALUES('$nombre','$apellidos','$login','$email','$password')";
$usuario = new Bdatos();
$datos = $usuario->insertarRegistros($sql);


echo json_encode($datos);

/* echo $datos;
echo "<a href = '../vistas/registro.php'> Registrar otro Usuario</a>"; */