<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Mi red Social </title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/muro.css">
</head>

<body>
    <div class="grid-container">
        <nav>
            <img class="logo" src="assets/img/logoicon.jpg" alt="logo de la app" srcset="">
            <ul class="menu">
                <li> <a href="muro.php">Muro</a> </li>
                <li> <a href="publicar.php">Hacer publicacion</a> </li>
                <li> <a href="editarmispub.php">Editar mis publicaciones</a> </li>
                <li> <a href="../app/cerrarsesion.php">Salir</a> </li>
                <li> Usuario: <b> <?php
             session_start();              
             echo $_SESSION['nombre'].'   ';
             echo $_SESSION['apellidos'];
            ?></b> </li>
            </ul>
        </nav>

        <div class="lateral">
            <img src="assets/img/cp2.jpg" alt="" srcset="">

        </div>
        <div class="contenido">