
<?php

    session_start();

    include 'conexion.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/CSS" href="css/loginStyle.css">
    <link rel="icon" type="image/png" href="imgs/favicon.png"/>

    <title>Pago</title>
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
        <h1>Pago final</h1>

        <form method="POST" action="verificar_compra.php">

            <div class="username">
                <input type="text" name="nombre" placeholder="Nombre y apellidos" required>

            </div>

            <div class="username">
                <input type="email" name="email" placeholder="Correo Electrónico" required>

            </div>

            <div class="username">
                <input type="text" name="contrasena" placeholder="Contraseña" required>

            </div>

            <div class="username">
                <input type="password" name="tarjeta" placeholder="Nº de tarjeta" required>

            </div>


            <input type="submit" value="Pagar" name="register">

            <div class="register">

            </div>

        </form>

    </div>

</body>

</html>

