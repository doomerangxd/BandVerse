<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under Cold Sun</title>

    <link rel="stylesheet" href="css/bandaUndersStyles.css">
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

                <h1>Under Cold Sun</h1>
                <h2>Castellón, Com. Valenciana, Spain</h2>
            
            <div class="container-testimonials">

            <p class="descripcion"> Under Cold Sun es una banda de thrash metal formada en 2010,<p class="descripcion"> sus riffs y melodias agresivas cautivan a su gran público
                </p><p class="descripcion"> Cuentan con un total de 4 discos de estudio
                
            </p>

            <div class="botones">
                
                <a href="https://www.instagram.com/undercoldsunband/?hl=es"><div class="icon_instagram">
                    <span><i class="fab fa-instagram"></i></span>
                </div></a>
                

                <a href="https://www.facebook.com/undercoldsun"><div class="icon_facebook">
                    <span><i class="fab fa-facebook-f"></i></span>
                </div></a>

                <a href="https://www.youtube.com/@undercoldsun"><div class="icon_youtube">
                    <span class="youtube"><i class="fab fa-youtube"></i></span>
                </div></a>

                </div>
            </div>

            <div class="foto">
                <img src="imgs/underDos.jpg" width="500px" height="330px">
                <img class="foto2" src="imgs/underLinea.jpg" width="500px" height="330px">

            </div>

            <div>
                <h1>Discografía</h1>
                <div class="container__article">
                    <div class="box__article"> <a href="https://undercoldsun.bandcamp.com/album/prepare-for-pain" ><img src="imgs/primerDiscoUndercold.jpg" width="300px" height="300px"> </a> ...Prepare for Pain (2012)</div>
                    <div class="box__article"> <a href="https://undercoldsun.bandcamp.com/album/apocalyptic-destruction" ><img src="imgs/apocaliptic.jpg" width="300px" height="300px"> </a> Apocalyptic Destruction (2015)</div>
                    <div class="box__article"> <a href="https://undercoldsun.bandcamp.com/album/a-new-beginning" ><img src="imgs/newbeginning.jpg" width="300px" height="300px"> </a> A new beginning (2017)</div>
                    <div class="box__article"> <a href="https://undercoldsun.bandcamp.com/album/devotion" ><img src="imgs/devotion.jpg" width="300px" height="300px"> </a> Devotion (2021)</div>
                </div>
            </div>

            <div>
                <h1>Miembros</h1>
                <div class="container__article">
                    <div class="box__article2"> <img src="imgs/portadaUndercold.jpg" width="200px" height="250px"> Pablo Prió (Voz) </div>
                    <div class="box__article2"> <img src="imgs/pablogargallo.jpg" width="200px" height="250px"> Pablo Gargallo (Guitarra)</div>
                    <div class="box__article2"> <img src="imgs/diegoUndercold.jpg" width="200px" height="250px"> Diego Moreno (Batería)</div>
                    <div class="box__article2"> <img src="imgs/porky.jpg" width="200px" height="250px"> Porky (Guitarra)</div>
                    <div class="box__article2"> <img src="imgs/fernando.jpg" width="200px" height="250px"> Fernando (Bajo)</div>

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