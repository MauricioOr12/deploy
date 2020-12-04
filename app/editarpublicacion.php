<?php
require_once('libs/Class.bdatos.php');

/*Datos enviados del formulario */
$id = $_POST['id'];
$fecha = $_POST['fecha'];
$detalle = $_POST['detalle'];

$sql = "UPDATE publicacion set fecha='$fecha', detalle='$detalle' where idpublicacion='$id'";
$usuario = new Bdatos();
$datos = $usuario->insertarRegistros($sql);
echo $datos;
