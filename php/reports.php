<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/CSS" href="css/reportsStyle.css">
    <link rel="icon" type="image/png" href="imgs/favicon.png"/>

    <title>Reportes</title>
</head>

<body>

    <div class="logoBand"><a href="index.php"><img src="imgs/logoBand2.png" width="400px" height="60px"></div></a>

    <div class="loginForm">
        <h1>Reportar un problema</h1>

        <form method="post" action="enviar_reporteDos.php" enctype="multipart/form-data">

            <label>¿Dónde se encuentra el problema?</label>
            <div class="select">
                
                <select name="value">
                    <option value="Inicio">Inicio</option>
                    <option value="Bandas" >Bandas</option>
                    <option value="Tienda" >Tienda</option>
                    <option value="Conciertos" >Conciertos</option>
                    <option value="Contacto" >Contacto</option>
                    <option value="Login" >Login</option>
                    <option value="Register" >Register</option>
                    <option value="Reportes" >Reportes</option>
                </select>
                
            </div>

            <label>Describa brevemente el problema</label>

            <div class="username2">
                <input type="text" name="descripcion" required placeholder="Escriba aquí:">

            </div>

                <label>Adjuntar pruebas (OBLIGATORIO)</label>


            <div class="select">
                <input type="file" name="archivo" required>
            </div>


            <input class="btnSend" type="submit" name="btn_enviar" value="Enviar">


        </form>

    </div>

</body>

</html>