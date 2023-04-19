
<?php

    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/subirBandaStyles.css">
    <link rel="icon" type="image/png" href="imgs/favicon.png"/>
</head>
<header id="header">
        <div class="container__header">
            <div class="logo">
                <a href="index.php"><img src="imgs/logoBand2.png" alt=""></a>
            </div>
            <div class="container__nav">
                <nav id="nav">
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="bands.php">Bandas</a></li>
                        <li><a href="shop.php">Tienda</a></li>
                        <li><a href="conciertos.php">Conciertos</a></li>
                        <li><a href="contacto2.php" class="select">Contacto</a></li>
                        <li><a href="<?php                         
                        if(isset($_SESSION['usuario']))
                        {
                            echo 'cerrar_sesion.php';
                        }
                        else
                        {
                            echo 'login.php';

                        }?>" class="logear"><?php
                        if(isset($_SESSION['usuario']))
                        {
                            echo 'Logout';
                        }

                        else
                        {
                            echo 'Login/Register';
                        }
                            ?></a></li>
                    </ul>
                </nav>


                <div class="btn__menu" id="btn_menu"><i class="fas fa-bars"></i></div>

            </div>

        </div>
    </header>
<body>
    <div class="root">
        <form action="" class="form-register">
            <div class="form-register__header">
                <ul class="progressbar">
                    <li class="progressbar__option active">Paso 1</li>
                    <li class="progressbar__option">Paso 2</li>
                    <li class="progressbar__option">Paso 3</li>
                </ul>
                <h1 class="form-register__title">Contacto</h1>
            </div>
            <div class="form-register__body">
                <div class="step active" id="step-1">
                    <div class="step__header">
                        <h2 class="step__title">Información Básica<small> (Paso 1)</small></h2>
                    </div>
                    <div class="step__body">
                        <input type="email" placeholder="Nombre" class="step__input">
                        <input type="text" placeholder="Apellidos" class="step__input">
                        <input type="password" placeholder="Correo Electrónico" class="step__input">
                        <input type="text" placeholder="Nº de Telf." class="step__input">
                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--next" data-to_step="2" data-step="1">Siguiente</button>
                    </div>
                </div>
                <div class="step" id="step-2">
                    <div class="step__header">
                        <h2 class="step__title">Asunto<small> (Paso 2)</small></h2>
                    </div>
                    <div class="step__body">
                        <input type="text" placeholder="Motivo" class="step__input">
                        <textarea rows="4" cols="80" placeholder="Mensaje" class="step__input"></textarea>
                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="1" data-step="2">Regresar</button>
                        <button type="button" class="step__button step__button--next" data-to_step="3" data-step="2">Siguiente</button>
                    </div>
                </div>
                <div class="step" id="step-3">
                    <div class="step__header">
                        <h2 class="step__title">Redes sociales y fotografías<small> (Paso 3)</small></h2>
                    </div>
                    <div class="step__body">
                        <input type="text" placeholder="(Opcional) Empresas" class="step__input">
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="2" data-step="3">Regresar</button>
                        <button type="submit" class="step__button">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
    <script src="js/subirBanda.js"></script>
</body>

<Footer>
    <div class="container__footer">

        <div class="box__footer">
            <div class="logo">
                <img src="" alt="">
            </div>
            <div class="terms">
                Utilizamos cookies y 
                herramientas similares para mejorar tu experiencia, prestar nuestros servicios y entender cómo utilizan los usuarios nuestros
                servicios con el fin de realizar mejoras. Terceras partes aprobadas también 
                utilizan estas herramientas en relación con la publicidad mostrada.
            </div>
        </div>

        <div class="box__footer">
            <h2>Ayuda</h2>
            <a href="contacto2.php">Contacto</a>
            <a href="reports.php">Reportar un problema</a>
        </div>

        <div class="box__footer">
            <h2>Nosotros</h2>
            <a href="#">Acerca de</a>
            <a href="#">Politica de Cookies</a>             
        </div>

        <div class="box__footer">
            <h2>Redes Sociales</h2>
            <a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i> Facebook</a>
            <a href="https://twitter.com/?lang=es"><i class="fab fa-twitter-square"></i> Twitter</a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram-square"></i> Instagram</a>
        </div>
    </div>

    <div class="box__copyright">
        <hr>
        <p>Todos los derechos reservados © 2023 <b>BandVerse by Javi Gargallo</b></p>
    </div>
</Footer>

</html>

