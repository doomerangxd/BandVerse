
<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandas</title>

    <link rel="stylesheet" href="css/bandStyle.css">
    <link rel="icon" type="image/png" href="imgs/favicon.png"/>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

</head>
<body>


    <header id="header">
        <div class="container__header">
            <div class="logo">
                <a href="index.php"><img src="imgs/logoBand2.png" alt=""></a>
            </div>
            <div class="container__nav">
                <nav id="nav">
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a class="select" href="bands.php">Bandas</a></li>
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

    <div class="container__all" id="container_all">


        <div class="body__Page">

                <h1>Bandoteca</h1>
                <h2>¡Conoce las bandas inscritas en BandVerse!</h2>
            
            <div class="container__article">
                <div class="box__article"> <a href="lepoka.php" ><img src="imgs/lepoka.jpg" width="200px" height="250px"> </a> Lèpoka </div>
                <div class="box__article"> <a href="anderTroys.php"><img src="imgs/ander.jpg" width="200px" height="250px"> </a> Ander Troys</div>
                <div class="box__article"> <a href="linopia.php" ><img src="imgs/linopia.jpg" width="200px" height="250px"> </a> Linòpia </div>
                <div class="box__article"> <a href="runallena.php" ><img src="imgs/runallena.jpg" width="200px" height="250px"> </a> Runa Llena</div>
                <div class="box__article"> <a href="redsoil.php" ><img src="imgs/redsoil.jpg" width="200px" height="250px"> </a> Red Soil </div>
                <div class="box__article"> <a href="dryriver.php" ><img src="imgs/dryriver.jpg" width="200px" height="250px"> </a> Dry River </div>
                <div class="box__article"> <a href="angelusapatrida.php" ><img src="imgs/Angelus-Apatrida.jpg" width="200px" height="250px"> </a> Angelus Apatrida</div>
                <div class="box__article"> <a href="<?php
                        if(isset($_SESSION['usuario']))
                        {
                            echo 'subirbanda.php';
                        }

                        else
                        {
                            echo '';
                        }
                            ?>" ><img src="imgs/unirse.jpg" width="200px" height="250px"> </a> ¡Da el salto!</div>
            </div>
            <div class="container-testimonials">
                <div class="box__testimonials">

                </div>
            </div>

        </div>




        <!-- Aquí empieza el footer -->
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

</div>


<script src=""></script>
</body>
</html>