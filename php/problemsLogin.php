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

        <form method="post">

            <div class="username">
                <input  id="txtMail" type="email" required>
                <label>Correo Electrónico o Nombre de Usuario</label>
            </div>

            <input id="btnSubmit" type="submit" value="Enviar Código">

            <script>

                let mail = document.getElementById("txtMail");

                function showMessage()
                {
                    alert("Hemos enviado un correo con el código de recuperación a " + txtMail.value)
                }

                document.getElementById("btnSubmit").onclick = showMessage;


            </script>

            <div class="register">
                Igual ya me acuerdo... <a href="login.html">Iniciar Sesión</a>
            </div>

        </form>

    </div>

</body>

</html>