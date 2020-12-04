<?php
require_once('libs/Class.bdatos.php');
require_once('config/Config.php');


$sql = "SELECT * from publicacion ORDER BY fecha DESC";
$usuario = new Bdatos();
$datos =$usuario->listarRegistros($sql);
echo json_encode($datos);

