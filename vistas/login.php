<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::: Red Social :::</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="shortcut icon" href="assets/img/logoicon.jpg" type="image/x-icon">
</head>

<body>
    <div class="grid-container">
        <div class="formulario">

            <form action="../app/validarIngreso.php" method="POST">

                <h2>Ingresar al sistema</h2>
                <br>
                <label for="login">Login:</label>
                <input type="text" name="login" required />
                <label for="password">Password:</label>
                <input type="password" name="password" required />
                <br><br>
                <input type="submit" class="boton" value="Enviar" />
                <br>
                <span class="centro">
                    <a href="registro.php">Olvidaste tu contraseña ?</a>
                </span>
                <span class="centro">
                    <a href="registro.php">Crear cuenta nueva</a>
                </span>

            </form>




        </div>
    </div>

</body>

</html>