<?php

    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BandVerse</title>

    <link rel="stylesheet" href="css/indexStyles.css">
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
                        <li><a href="index.php" class="select">Inicio</a></li>
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

        <div class="cover">

            <div class="container__cover">

                <div class="container__info">
                    <h1>Welcome to</h1>
                    <h2>BandVerse</h2>
                    <p>El sitio web hecho por músicos para músicos. ¿Quieres ser la nueva estrella de tu país? ¡Únete a nosotros, un gran sitio lleno de bandas y autores te espera!</p>

                </div>
                <div class="slider-frame">

                    <!--El class anterior era container__vector-->
                    <ul>
                        <li><img src="imgs/bandaUno.jpg" alt=""></li>
                        <li><img src="imgs/bandaDos.jpg" alt=""></li>
                        <li><img src="imgs/bandaCuatro.jpg" alt=""></li>
                        <li><img src="imgs/linoIron.jpeg" alt=""></li>
                        <li><img src="imgs/bandaSeis.jpg" alt=""></li>
                        <li><img src="imgs/bandaCinco.jpg" alt=""></li>
                    </ul>
                </div>
            </div>

        </div>

    

        <div class="body__Page">
            <div> 
                <h1>Últimas Novedades</h1>
                <h2>¡No te pierdas nada!</h2>
            </div>
            <div class="container__article">
                <div class="box__article"> <a href="https://www.resurrectionfest.es/" ><img src="imgs/resurrectionFest.jpg" width="200px" height="250px"> </a> Resurrection Fest 2023 </div>
                <div class="box__article"> <a href="https://www.leyendasdelrockfestival.com/" ><img src="imgs/leyendas.jpg" width="200px" height="250px"> </a> Leyendas del Rock 2023 </div>
                <div class="box__article"> <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley" ><img src="imgs/linopiaLeyendas.jpg" width="200px" height="250px"> </a> Linòpia en LDR 2023 </div>
                <div class="box__article"> <a href="https://alcalasuena.es/" ><img src="imgs/alcala2023.jpg" width="200px" height="250px"> </a> Vuelve Alcalá Suena </div>
                <div class="box__article"> <img src="imgs/carnavalOnda.jpg" width="200px" height="250px"> </a> Carnaval Metal Fest en Onda </div>
                <div class="box__article"> <a href="https://www.metallica.com/72-seasons/" ><img src="imgs/72seasons.jpg" width="200px" height="250px"> </a> Metallica - 72 Seasons </div>
                <div class="box__article"> <a href="https://www.verkami.com/projects/30512-dover-die-for-rock-roll-el-documental-definitivo" ><img src="imgs/doverDocumental.jpg" width="200px" height="250px"> </a> El Documental de Dover</div>
                <div class="box__article"> <a href="https://www.tomaticket.es/es-es/artista/marea" ><img src="imgs/marea.jpg" width="200px" height="250px"> </a> Gira de Marea en 2023</div>
            </div>
            <div class="container-testimonials">
                <div class="box__testimonials">
                    <h1>¡Viernes de BandVerse!</h1>
                    <h2>Esa maravillosa sección donde cada semana descubrirás una banda nueva elegida de forma totalmente aleatoria. <p></p> ¡Para participar simplemente tienes que tener una página de banda creada en nuestra web!</h2>
                </div>

                <div class="testimonials">
                    <h2>La banda de esta semana es: </h2>
                    <h1>Under Cold Sun</h1>
                </div>
                <div class="box__testimonials">
                    <div class="mostrador">
                    <img class="foto" src="imgs/underCold.jpg" width="580px" height="360px">
                    <iframe class="reproductor" style="border-radius:12px" src="https://open.spotify.com/embed/album/4i85IIsoP9OB5D0tl8Ap1f?utm_source=generator&theme=0" 
                    width="30%" height="360" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
                    </iframe>
                    </div>
                    <p class="texto__foto">Under Cold Sun es una banda Castellonense formada en el año 2010. Con 3 discos de estudio a sus espaldas y 2 discos no oficiales publicados, han sido capaces
                        de recorrer distintos escenarios por toda la peninsula. <p class="texto__foto">Su último trabajo: "Devotion" está a la venta en formato físico, tanto CD como Vinilo y disponible en
                        todas las plataformas digitales. </p>
                    </p>
                </div>
            </div>

            <div class="container__curiosidades">
                <div class="curiosidades">
                    <h1>Curiosidades</h1>
                    <h2>Puede ser que algunas te sorprendan...</h2>
                </div>

                <div class="curiosidad1">
                    <h1>Le piden a una inteligencia artificial que analice <i>"Master of Puppets"</i><p></p> y se mete con Lars Ulrich</h1>
                    <p class="cita">Para hacer una prueba, Louder Sound ha probado a pedirle a la nueva IA de moda, ChatGPT, que criticase el 'Master of Puppets'
                        (1986) de Metallica: su respuesta ha sido de lo más curiosa, aunque Lars Ulrich haya salido escaldado del experimento.</p>
                    <p class="cita">Criticando el album de forma positiva la IA opinó positivamente sobre todos los miembros de la agrupación, en especial al difunto 
                        Cliff Burton y su magnifica forma de tocar el bajo.</p>
                    <p class="cita">Sin embargo, si le pides a la herramienta que critique de forma negativa, el disco, se centrará en la forma de tocar de Lars Ulrich.</p>
                    <p class="cita2"><i>"La forma de tocar de Ulrich en el álbum se describe a menudo como simplista y poco inspirada, carente de la complejidad y 
                        la habilidad de otros baterías del género thrash metal. Sus interpretaciones en canciones como 'Battery' y 'Leper Messiah' son particularmente decepcionantes,
                        con patrones repetitivos y básicos que no logran elevar la música."</i></p>
                    <p class="cita">Fuente: RockFM.fm España</p>
                    <img class="lars" src="imgs/shaggy.jpg" width="360px" height="360px">
                    
                </div>


                <div class="curiosidad3">
                    <h1>Detalles ocultos en la Portada de Powerslave</h1>
                    <h2>de Iron Maiden</h2>
                    <p class="cita">Si miramos con mucho detalle la portada del disco <i>“Powerslave”</i>, veremos que hay partes en la que Dereck Riggs
                    no se tomó en serio su trabajo</p>
                    <p class="cita">En la ilustración que hizo el Riggs, podemos ver a personajes como Mickey Mouse o Indiana Jones que tal vez en ese mundo ficticio 
                        formaban parte de la mitología como Horus, Ra, Amon, Isis, Anubis, entre otros.</p>
                    <p class="cita">Tal vez, el artista británico no supo que estos detalles iban a ser encontrados, pero gracias a la tecnología del zoom podremos reírnos 
                        un rato de los detalles que nos dejó.</p>
                    <img class="iron" src="imgs/powerslave.jpg" width="330px" height="310px">
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