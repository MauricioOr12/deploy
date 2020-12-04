<?php
require_once('libs/Class.bdatos.php');

/*Datos enviados del formulario */

$id = $_GET['id'];
$sql = "DELETE FROM publicacion WHERE idpublicacion='$id'";
$usuario = new Bdatos();
$datos = $usuario->insertarRegistros($sql);
echo $datos;