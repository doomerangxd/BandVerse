<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ander Troys</title>

    <link rel="stylesheet" href="css/bandaAnderStyle.css">
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

                <h1>Ander Troys</h1>
                <h2>Castellón de la Plana, Com. Valenciana, Spain</h2>
            
            <div class="container-testimonials">

            <p class="descripcion"> Ander Troys es un proyecto musical que empezó en el año 2020 junto a una pianista y dos chelistas,<p class="descripcion"> actualmente ha incorporado la percusión 
                y una segunda guitarra.</p><p class="descripcion"> Ander escribe sobre todo aquello que le duele o le remueve por dentro, 
                Cuenta con un EP llamado "Hojas de Sal" publicado en 2022. Recientemente ha actuado en <p class="descripcion">varias de las mejores salas de Castellón de la Plana</p></p>
            </p>

            <div class="botones">
                
                <a href="https://www.instagram.com/andertroys/"><div class="icon_instagram">
                    <span><i class="fab fa-instagram"></i></span>
                </div></a>
                

                <a href="https://www.facebook.com/ander.murillo.589"><div class="icon_facebook">
                    <span><i class="fab fa-facebook-f"></i></span>
                </div></a>

                <a href="https://www.youtube.com/@andertroys6354"><div class="icon_youtube">
                    <span class="youtube"><i class="fab fa-youtube"></i></span>
                </div></a>

                </div>
            </div>

            <div class="foto">
                <img src="imgs/ander1.jpg" width="500px" height="300px">
                <img class="foto2" src="imgs/ander2.jpg" width="500px" height="300px">

            </div>

            <div>
                <h1>Discografía</h1>
                <div class="container__article">
                    <div class="box__article"> <a href="https://andertroys.bandcamp.com/track/sin-direcci-n" ><img src="imgs/sindireccion.jpg" width="300px" height="300px"> </a> Sin dirección - Single (2020)</div>
                    <div class="box__article"> <a href="https://andertroys.bandcamp.com/album/hojas-de-sal"><img src="imgs/hojasdesal.jpg" width="300px" height="300px"> </a> Hojas de Sal (2022)</div>
                </div>
            </div>

            <div>
                <h1>Miembros</h1>
                <div class="container__article">
                    <div class="box__article2"> <img src="imgs/ander.jpg" width="200px" height="250px"> Ander (Voz y guitarra) </div>
                    <div class="box__article2"> <img src="imgs/olivia.JPG" width="200px" height="250px"> Olvia Romaní (Violonchelo)</div>
                    <div class="box__article2"> <img src="imgs/raquelMontesa.JPG" width="200px" height="250px"> Raquel Montesa (Piano)</div>
                    <div class="box__article2"> <img src="imgs/javi.JPG" width="200px" height="250px"> Javi (Guitarra)</div>
                    <div class="box__article2"> <img src="imgs/nacho.JPG" width="200px" height="250px"> Nacho Doménech (Batería)</div>

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