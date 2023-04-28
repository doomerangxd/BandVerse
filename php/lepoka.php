<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lèpoka</title>

    <link rel="stylesheet" href="css/bandaLepokaStyle.css">
    <link rel="icon" type="image/png" href="imgs/favicon.png"/>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

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

                        }?>"
                        class="logear"><?php
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

                <h1>Lèpoka</h1>
                <h2>Castellón de la Plana, Com. Valenciana, Spain</h2>
            
            <div class="container-testimonials">

            <p class="descripcion"> Lèpoka es una banda de Folk Metal formada en Castellón en el año 2010, su sonido es muy variado,<p class="descripcion"> pasando dede el heavy groove más potente 
                hasta ritmos más acelerados como pueden ser el power o el Ska.</p><p class="descripcion"> Han realizado varias colaboraciones con bandas de alto nivel como Mägo de Oz en su 
                "¡¡Stay Oz!!" con la canción Vodka and Roll en el año 2018.</p>
            </p>

            <div class="botones">
                
                <a href="https://www.instagram.com/lepokafolk/?hl=es"><div class="icon_instagram">
                    <span><i class="fab fa-instagram"></i></span>
                </div></a>
                

                <a href="https://www.facebook.com/lepokafolk"><div class="icon_facebook">
                    <span><i class="fab fa-facebook-f"></i></span>
                </div></a>

                <a href="https://www.youtube.com/@lepokafolk"><div class="icon_youtube">
                    <span class="youtube"><i class="fab fa-youtube"></i></span>
                </div></a>

                </div>
            </div>

            <div class="foto">
                <img src="imgs/lepokaBand.jpg" width="500px" height="350px">
                <img class="foto2" src="imgs/lepoka2.jpg" width="500px" height="350px">

            </div>

            <div>
                <h1>Discografía</h1>
                <div class="container__article">
                    <div class="box__article"> <a href="lepoka.html" ><img src="imgs/folcoholic metal.jpg" width="300px" height="300px"> </a> Folkoholic Metal (2014) </div>
                    <div class="box__article"> <a href="https://kstore.es/producto/cd-beerserkers/"><img src="imgs/beerserkers.JPG" width="300px" height="300px"> </a> Beerserkers (2016)</div>
                    <div class="box__article"> <a href="https://kstore.es/producto/cd-bibere-vivere/" ><img src="imgs/biberevivere.jpg" width="300px" height="300px"> </a> Bivere Vivere (2018)</div>
                    <div class="box__article"> <a href="https://kstore.es/producto/digipack-el-baile-de-los-caidos/" ><img src="imgs/baile.jpg" width="300px" height="300px"> </a> El Baile de los Caídos (2020)</div>
                </div>
            </div>

            <div>
                <h1>Miembros</h1>
                <div class="container__article">
                    <div class="box__article2"> <img src="imgs/Dani.jpg" width="200px" height="250px"> Dani Nogués (Voz) </div>
                    <div class="box__article2"> <img src="imgs/popez.jpg" width="200px" height="250pxpx"> Popez (Guitarra)</div>
                    <div class="box__article2"> <img src="imgs/Dio.jpg" width="200px" height="250pxpx"> Dio (Guitarra)</div>
                    <div class="box__article2"> <img src="imgs/carlosZaph.jpg" width="200px" height="250px"> Carlos Zaph (Bajo)</div>
                    <div class="box__article2"> <img src="imgs/Jaume.jpg" width="200px" height="250px"> Jaume (Batería)</div>
                    <div class="box__article2"> <img src="imgs/DaniFuentes.jpg" width="200px" height="250px">  Dani Fuentes (Violín)</div>
                    <div class="box__article2"> <img src="imgs/Zarach.jpg" width="200px" height="250px">  Zarach Llach (Vientos)</div>
                </div>

            </div>


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
                    <a href="acercade.php">Acerca de</a>
                    <a href="">Politica de Cookies</a>             
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