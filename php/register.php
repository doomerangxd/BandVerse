
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/CSS" href="css/loginStyle.css">
    <link rel="icon" type="image/png" href="imgs/favicon.png"/>

    <title>Iniciar sesión en BandVerse</title>
</head>

<header id="header">
    <div class="container__header">
        <div class="logo">
            <a href="index.php"><img src="imgs/logoBand2.png" alt=""></a>
        </div>

    </div>
</header>

<body>

    <div class="loginForm">
        <h1>Registrarse</h1>

        <form method="POST" action="registrar_usuarios.php">

            <div class="username">
                <input type="text" name="nombre" placeholder="Nombre" required>

            </div>

            <div class="username">
                <input type="text" name="apellidos" placeholder="Apellidos" required>

            </div>

            <div class="username">
                <input type="email" name="email" placeholder="Correo Electrónico" required>

            </div>

            <div class="username">
                <input type="text" name="username" placeholder="Nombre de usuario" required>

            </div>

            <div class="username">
                <input type="password" name="contrasena" placeholder="Contraseña" required>

            </div>


            <input type="submit" value="Acceder" name="register">

            <div class="register">
                ¿Ya tienes cuenta? <a href="login.php">Iniciar sesión</a>
            </div>

        </form>

    </div>

</body>

</html>

