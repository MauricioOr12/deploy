<?php
require_once('libs/Class.bdatos.php');
session_start();
/*Datos enviados del formulario */

$fecha = $_POST['fecha'];
$detalle = $_POST['detalle'];
$usuario = $_SESSION['idusuario'];

$sql = "INSERT INTO publicacion(fecha,detalle,usuario_idusuario) VALUES('$fecha','$detalle','$usuario')";
$usuario = new Bdatos();
$datos = $usuario->insertarRegistros($sql);
echo $datos;