<?php
require_once('libs/Class.bdatos.php');
require_once('config/Config.php');

$usuario = $_SESSION['idusuario'];

$sql = "SELECT * from publicacion where usuario_idusuario ='$usuario' ORDER BY fecha DESC";
$usuario = new Bdatos();
$datos =$usuario->listarRegistros($sql);
