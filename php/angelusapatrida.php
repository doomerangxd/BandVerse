<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angelus Apatrida</title>

    <link rel="stylesheet" href="css/bandaAngelusStyle.css">
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

                <h1>Angelus Apatrida</h1>
                <h2>Albacete, Castilla-La Mancha, Spain</h2>
            
            <div class="container-testimonials">

            <p class="descripcion"> Angelus Apatrida es una banda de Thrash Metal formada en el año 2000</p><p class="descripcion"> por los hermanos José y Guillermo izquierdo 
                <p class="descripcion" >Gracias a su gran profesionalidad y esfuerzo han llegado a ser renocodios<p class="descripcion"> a nivel internacional, tocando en los mejores
                    festivales de metal
                </p></p>
            </p>

            <div class="botones">
                
                <a href="https://www.instagram.com/angelusapatrida/"><div class="icon_instagram">
                    <span><i class="fab fa-instagram"></i></span>
                </div></a>
                

                <a href="https://www.facebook.com/angelusapatrida"><div class="icon_facebook">
                    <span><i class="fab fa-facebook-f"></i></span>
                </div></a>

                <a href="https://www.youtube.com/channel/UC6wABAUD9QlirdA_OWnzLqA"><div class="icon_youtube">
                    <span class="youtube"><i class="fab fa-youtube"></i></span>
                </div></a>

                </div>
            </div>

            <div class="foto">
                <img src="imgs/angelusfoto2.jpg" width="500px" height="350px">
                <img class="foto2" src="imgs/angelusfoto.jpg" width="500px" height="350px">

            </div>

            <div>
                <h1>Discografía</h1>
                <div class="container__article">
                    <div class="box__article"> <a href="https://www.amazon.es/dp/B0193QP380/ref=sr_1_1?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=2PV7G3PJ7MVJ7&keywords=give+em+war+angelus+apatrida&qid=1675852619&s=books&sprefix=give+em+wa+angelus+apatrida%2Cstripbooks%2C91&sr=1-1" ><img src="imgs/evilangelus.jpg" width="300px" height="300px"> </a> Evil Unleashed (2006) </div>
                    <div class="box__article"> <a href="https://www.amazon.es/dp/B0193QP380/ref=sr_1_1?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=2PV7G3PJ7MVJ7&keywords=give+em+war+angelus+apatrida&qid=1675852619&s=books&sprefix=give+em+wa+angelus+apatrida%2Cstripbooks%2C91&sr=1-1"><img src="imgs/giveem.jpg" width="300px" height="300px"> </a> Give 'Em War (2007) </div>
                    <div class="box__article"> <a href="https://www.amazon.es/Clockwork-Vinilo-Angelus-apatrida/dp/B0B41VJKYR/ref=sr_1_1?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=3G719QYQMJ0XA&keywords=clockwork+angelus+apatrida&qid=1675852579&s=books&sprefix=clockwork+angelus+apatrid%2Cstripbooks%2C98&sr=1-1" ><img src="imgs/clock.jpg" width="300px" height="300px"> </a> Clockwork (2010)</div>
                    <div class="box__article"> <a href="https://www.amazon.es/Call-Angelus-Apatrida/dp/B0081LX7PA/ref=sr_1_6_mod_primary_new?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&keywords=angelus+apatrida&qid=1675852502&s=books&sbo=RZvfv%2F%2FHxDF%2BO5021pAnSA%3D%3D&sr=1-6" ><img src="imgs/thecall.jpg" width="300px" height="300px"> </a> The Call (2012)</div>
                    <div class="box__article"> <a href="https://www.amazon.es/music/player/albums/B017NV4XZQ?_encoding=UTF8&qid=1675852502&sr=1-4" ><img src="imgs/hiddenevolution.jpg" width="300px" height="300px"> </a> Hidden Evolution (2015)</div>
                    <div class="box__article"> <a href="https://www.amazon.es/Cabaret-Guillotine-Vinilo-Angelus-Apatrida/dp/B079VRR18T/ref=sr_1_2?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&keywords=angelus+apatrida&qid=1675852502&s=books&sr=1-2" ><img src="imgs/cabaret.jpg" width="300px" height="300px"> </a> Cabaret de la Guillotine (2018)</div>
                    <div class="box__article"> <a href="https://www.amazon.es/Angelus-Apatrida-Vinilo/dp/B08NVBVWGZ/ref=sr_1_1?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&keywords=angelus+apatrida&qid=1675852488&s=books&sr=1-1" ><img src="imgs/angelusdisco.jpg" width="300px" height="300px"> </a> Angelus Apatrida (2021)</div>
                </div>
            </div>

            <div>
                <h1>Miembros</h1>
                <div class="container__article">
                    <div class="box__article2"> <img src="imgs/joseizquierdo.jpg" width="200px" height="250px"> José Izquierdo (Bajo) </div>
                    <div class="box__article2"> <img src="imgs/guiller.jpeg" width="200px" height="250pxpx"> Guillermo Izquierdo <p></p>(Voz - Guitarra)</div>
                    <div class="box__article2"> <img src="imgs/victorvalera.jpg" width="200px" height="250pxpx"> Victor Valera (Batería)</div>
                    <div class="box__article2"> <img src="imgs/davialvarez.jpg" width="200px" height="250px"> David Álvarez (Guitarra)</div>
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