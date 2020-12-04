<?php
require_once('libs/Class.bdatos.php');
require_once('config/Config.php');

$login =$_POST['login'];
$password =$_POST['password'];
$sql ="SELECT idusuario,login,password,nombre,apellidos FROM usuario where login='$login'";
$usuario = new Bdatos();
$datos =$usuario->listarRegistros($sql);


if (count($datos)==1) {
    if (password_verify($password, $datos['0']->password)) {
        session_start();
        $_SESSION['idusuario']=$datos['0']->idusuario;
        $_SESSION['login']=$datos['0']->login;
        $_SESSION['nombre']=$datos['0']->nombre;
        $_SESSION['apellidos']=$datos['0']->apellidos;     
        header('Location:'.RUTA.'vistas/muro.php');
        exit();
    } else {
        echo 'Datos erroneos';
    }
} else {
    echo 'Datos Erroneos';
}