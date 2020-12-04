<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RED SOCIAL :::</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>

<body>
    <div class="grid-container">
        <div class="formulario">
            <form action="" method="POST " id = "frmRegistro">
                <h2>Hacer Registro</h2>
                <br>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" />
                <label for="apellidos">Apellidos:</label>
                <input type="text" name="apellidos" />
                <label for="login">Login:</label>
                <input type="text" name="login" placeholder="Ingrese el Username que desee usar en el sistema" />
                <label for="email">Email:</label>
                <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                    title="Debe contener un Email correcto" required />
                <label for="password">Password:</label>
                <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Debe contener al menos una mayuscula, una minuscula y minimo 8 caracteres" required />
                <br><br>
                <input type="submit" class="boton" value="Enviar" />
                <br>
                <span class="centro">
                    <a href="login.php">Regresar al Login</a>
                </span>
            </form>

            <div class = "letrero" id ="letrero"></div>
        </div>
    </div>
<p>letrero</p>
    <script src="assets/js/registro.js"></script>
</body>

</html>