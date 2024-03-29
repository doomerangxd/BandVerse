<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dry River</title>

    <link rel="stylesheet" href="css/bandaDryRiverStyle.css">
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

                <h1>Dry River</h1>
                <h2>Castellón de la Plana, Com. Valenciana, Spain</h2>
            
            <div class="container-testimonials">

            <p class="descripcion"> Dry river es una banda de Rock/Metal progresivo formada hace años ya</p><p class="descripcion"> pasando por distintas formaciones y 
                empezando como una banda de covers 
                <p class="descripcion" >Su ritmo se caracteriza por una mezcla de melodias dulces y riffs energéticos.<p class="descripcion"> Su último trabajo "Cuarto Creciente" está recibiendo muy buenas
                criticas por parte de revistas reconocidas dentro del panorama del metal</p></p>
            </p>

            <div class="botones">
                
                <a href="https://www.instagram.com/dryriver/"><div class="icon_instagram">
                    <span><i class="fab fa-instagram"></i></span>
                </div></a>
                

                <a href="https://www.facebook.com/DryRiverCS"><div class="icon_facebook">
                    <span><i class="fab fa-facebook-f"></i></span>
                </div></a>

                <a href="https://www.youtube.com/user/DryRiverBand"><div class="icon_youtube">
                    <span class="youtube"><i class="fab fa-youtube"></i></span>
                </div></a>

                </div>
            </div>

            <div class="foto">
                <img src="imgs/dryriverfoto.jpg" width="500px" height="350px">
                <img class="foto2" src="imgs/dryriverfoto2.jpg" width="500px" height="350px">

            </div>

            <div>
                <h1>Discografía</h1>
                <div class="container__article">
                    <div class="box__article"> <a href="http://www.dry-river.com/tienda-dryriver/CD-El-Circo-de-la-Tierra-p360303342" ><img src="imgs/circodelatierra.jpeg" width="300px" height="300px"> </a> El circo de la Tierra (2011) </div>
                    <div class="box__article"> <a href="http://www.dry-river.com/tienda-dryriver/CD-Quien-tenga-algo-que-decir-Que-calle-para-siempre-p360297984"><img src="imgs/quientenga.jpg" width="300px" height="300px"> </a> Quien Tenga Algo Que Decir... Que Calle Para Siempre (2014)</div>
                    <div class="box__article"> <a href="http://www.dry-river.com/tienda-dryriver/CD-DVD-Rock-&-Rollo-Y-cana-p360304756" ><img src="imgs/rockrollo.jfif" width="300px" height="300px"> </a> Rock & Rollo.. ¡Y caña! - Live (2017)</div>
                    <div class="box__article"> <a href="http://www.dry-river.com/tienda-dryriver/CD-2038-p360304758" ><img src="imgs/2038.jfif" width="300px" height="300px"> </a> 2038 (2018)</div>
                    <div class="box__article"> <a href="http://www.dry-river.com/tienda-dryriver/CD-DVD-DC-Directo-p360304759" ><img src="imgs/dc.jpg" width="300px" height="300px"> </a> DC - Live (2019)</div>
                    <div class="box__article"> <a href="http://www.dry-river.com/tienda-dryriver/CD-Cuarto-Creciente-Nuevo-album-p492224455" ><img src="imgs/cuartocreciente.jpg" width="300px" height="300px"> </a> Cuarto Creciente (2022)</div>
                </div>
            </div>

            <div>
                <h1>Miembros</h1>
                <div class="container__article">
                    <div class="box__article2"> <img src="imgs/angel.jpg" width="200px" height="250px"> Angel Belinchón (Voz) </div>
                    <div class="box__article2"> <img src="imgs/matias.jpg" width="200px" height="250pxpx"> Matias Oreo (Guitarra)</div>
                    <div class="box__article2"> <img src="imgs/daviddryriver.jpg" width="200px" height="250pxpx"> David (Bajo)</div>
                    <div class="box__article2"> <img src="imgs/marti.jpg" width="200px" height="250px"> Martí (Teclados)</div>
                    <div class="box__article2"> <img src="imgs/guillermo.jpg" width="200px" height="250px"> Guillermo (Guitarra)</div>
                    <div class="box__article2"> <img src="imgs/pedro.jpg" width="200px" height="250px">  Pedro (Batería)</div>
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