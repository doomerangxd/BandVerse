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
        <h1>Iniciar sesión</h1>

        <form method="post" action="logear_usuarios.php">

            <div class="username">
                <input type="text" name="user" placeholder="Usuario" required>

            </div>

            <div class="username">
                <input type="password" name="password"  placeholder="Contraseña" required>
            </div>

            <div class="olvidona"><a href="problemsLogin.php">¿No puedes iniciar sesión?</a></div>

            <input type="submit" value="Acceder">

            <div class="register">
                ¿No tienes cuenta? <a href="register.php">Regístrate</a>
            </div>
        </form>
    </div>
</body>


</html>