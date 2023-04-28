<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/CSS" href="css/loginStyle.css">
    <link rel="icon" type="image/png" href="imgs/favicon.png"/>

    <title>¿Problemas para iniciar sesión?</title>
</head>

<body>

    <div class="logoBand"><a href="index.php"><img src="imgs/logoBand2.png"></div></a>

    <div class="loginForm">
        <h1>Encuentra tu cuenta de BandVerse</h1>

        <form method="post" action="encontrar_usuarios.php">

            <div class="username">
                <input  id="txtMail" type="email" name="correo" placeholder="Introduzca su correo electrónico" required>
                
            </div>

            <input id="btnSubmit" type="submit" value="Enviar Código">

            <div class="register">
                Igual ya me acuerdo... <a href="login.php">Iniciar Sesión</a>
            </div>

        </form>

    </div>

</body>

</html>