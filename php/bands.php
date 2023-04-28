
<?php

    session_start();

    include 'conexion.php';

    $sql = "SELECT * FROM bandas ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);


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
                <div class="box__article"> <a href="undercold.php" ><img src="imgs/portadaUndercold.jpg" width="200px" height="250px"> </a> Under Cold Sun </div>
                <div class="box__article"> <a href="runallena.php" ><img src="imgs/runallena.jpg" width="200px" height="250px"> </a> Runa Llena</div>
                <div class="box__article"> <a href="redsoil.php" ><img src="imgs/redsoil.jpg" width="200px" height="250px"> </a> Red Soil </div>
                <div class="box__article"> <a href="dryriver.php" ><img src="imgs/dryriver.jpg" width="200px" height="250px"> </a> Dry River </div>
                <div class="box__article"> <a href="angelusapatrida.php" ><img src="imgs/Angelus-Apatrida.jpg" width="200px" height="250px"> </a> Angelus Apatrida</div>
                <?php 
                
                $consulta = "SELECT id FROM bandas WHERE id > 15 ORDER BY ID DESC LIMIT 1";
                $resultado = mysqli_query($conn, $consulta);
                $columna = mysqli_fetch_row($resultado);
                $count = (int) $columna[0];

                if($count === 19 || $count === 20 || $count === 21)
                {
                    ?><div class="box__article"> <a href="nueva_banda.php" ><img src="uploads/<?php echo $row["portada"]; ?>" width="200px" height="250px"> </a> <?php echo $row["nombre"]; ?> </div><?php  
                }
                else
                {
                    echo " ";
                }
                ?>

                
                <div class="box__article"> <a href="<?php
                        if(isset($_SESSION['usuario']))
                        {
                            echo 'subirbandaDos.php';
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

        
            <h1 style="margin-top:10px">BandVerse Radio</h1>
            <h2 style="margin-bottom:5px">¡Activa las 24h del día!</h2>
        <div class="radio" style="display:block; align-items: center; text-align:center;">
            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/2aYW0yxtqdQRVq5t3kh3HB?utm_source=generator" width="80%" height="352" frameBorder="0" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
        </div>


        <style>
            video::-webkit-media-controls-current-time-display {
            display:none !important;
            }
            video::-webkit-media-controls-time-remaining-display {
            display:none !important;
            }
            video::-webkit-media-controls-timeline {
            display:none !important;
            }
        </style>

        
        <div class="directo" style="display:block;  align-items: center; text-align:center;">
            <h1>BandVerse Live Channel</h1>
            <h2>¡Actuaciones en directo everywhere, baby!</h2>
            <video id="video_directo" controls autoplay loop muted width="950" height="560">
            <script>
            // get the video element
                var video = document.getElementById('video_directo');
                
                // add an event listener to save the playback time to localStorage every 5 seconds
                setInterval(function() {
                    localStorage.setItem('videoTime', video.currentTime);
                }, 1000);
                
                // check if the playback time is saved in localStorage and resume the video from where it left off
                var savedTime = localStorage.getItem('videoTime');
                if (savedTime) {
                    video.currentTime = savedTime;
                }
            </script>
                <source src="imgs/dryRiverLive.mp4" type="video/mp4">
            </video>
            <h1 style="margin-top:5px">Dry River - Live @ Sala Copérnico</h1>
            <h2>Si quieres que tu actuación sea transmitida en directo</h2>
            <h2>no dudes en ponerte en contacto con nosotros</h2>


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


</body>
</html>