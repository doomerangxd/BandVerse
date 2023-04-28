<?php

    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de</title>
    <link rel="stylesheet" href="css/acercade.css">
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
                        <li><a href="contacto2.php">Contacto</a></li>
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
    <div class="textos">
        <p>BandVerse es una web creada por músicos para músicos, el sitio web está enfocado a la promoción</p>
        <p>de artistas y bandas emergentes, independientes o con sello discográfico que quieran registrarse en la web</p>
        <br>
        <p>El proyecto comenzó a finales de 2022 con un primer borrador descartado, en Abril de 2023</p>
        <p>termina la creación de la página y es lanzada al público, a dia de hoy cuenta con alguas bandas</p>
        <p>De gran reconocimiento registradas en su base de datos</p>
        <br>

        <p><i>"La música es mi arma. Creo en la música, en su espiritualidad, su exaltación, su nobleza estática, su humor, su poder para </i></p>
        <p><i>penetrar hasta la estrechez básica de todo ser humano. Quiero vivir en todo el mundo de la música. El ritmo es una concepción,</i></p>
        <p><i>no una realidad física. Un compositor debe ser alguien con un definido punto de vista, preferiblemente individual. Si el compositor </i></p>
        <p><i>actual admira a los viejos maestros no debe imitar su estilo."</i></p> 
        <p>Henry Cowell (1897-1965)</p>
        <br>
        <p>Todos los derechos reservados © 2023 <b>BandVerse by Javi Gargallo</b></p>
        
    </div>
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
            <a href="acercade.php">Acerca de</a>
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
