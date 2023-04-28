
<?php

    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conciertos</title>

    <link rel="stylesheet" href="css/conciertosStyles.css">
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
                        <li><a href="bands.php">Bandas</a></li>
                        <li><a href="shop.php">Tienda</a></li>
                        <li><a class="select" href="conciertos.php">Conciertos</a></li>
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

                <h1>Próximos conciertos</h1>
                <h2>¡Corre, que las entradas vuelan!</h2>
            
            <div class="container__article">
                <div class="box__article"> <a href="" ><img src="imgs/lepokacartel.jpg" width="250px" height="300px"></a> Celtas Cortos + Lèpoka (Castellón)  </div>
                <div class="box__article"> <a href="https://ticketgate.es/es/events/z-live-on-tour-dry-river-en-valladolid"><img src="imgs/carteldryriver.jpg" width="250px" height="300px"> </a> Dry River (Valladolid)</div>
                <div class="box__article"> <a href="https://www.ticketsstarter.es/es/entradas-pixies?gclid=CjwKCAiAl9efBhAkEiwA4TorihX9WMAsG2z6w2m9hQdbHkb602U2tqxNZabqqtaPNpYGVJkncYAFZhoCbvkQAvD_BwE"><img src="imgs/pixiescartel.jpg" width="250px" height="300px"> </a> Gira Pixies 2023</div>
                <div class="box__article"> <a href="https://www.wegow.com/es-es/artistas/steve-vai"><img src="imgs/cartelstevevai.jpg" width="250px" height="300px"> </a> Gira Steve Vai 2023</div>
                <div class="box__article"> <a href="https://www.taquilla.com/entradas/wasp" ><img src="imgs/waspcartel.jpg" width="250px" height="300px"> </a> Gira W.A.S.P 2023 </div>
                <div class="box__article"> <a href="https://www.viagogo.com/ww/Concert-Tickets/Rock-and-Pop/Roger-Waters-Tickets?AffiliateID=49&adposition=&PCID=PSROWGOOCONROGER6CB7D2BB6&AdID=620960547307&MetroRegionID=&psc=%2c&ps=cc-ES&ps_p=0&ps_c=12774829401&ps_ag=132687482311&ps_tg=kwd-367371147776&ps_ad=620960547307&ps_adp=%2c&ps_fi=%2c&ps_li=%2c&ps_lp=1005436&ps_n=g&ps_d=c&gclid=CjwKCAiAl9efBhAkEiwA4TorilfzGO3pOcBxpzcodp5QTyJt70vvnvL1FLHl291xhg298wUsQJx0FhoCcv8QAvD_BwE"><img src="imgs/pinkfloydmadrid.jpg" width="250px" height="300px"> </a> Roger Waters (Madrid y Barcelona)</div>
                <div class="box__article"> <a href="https://mutick.com/e/yngwie-malmsteen-en-madrid" ><img src="imgs/yngwiecartel.jfif" width="250px" height="300px"> </a> Yngwie Malmsteen (Madrid y Barcelona)</div>
                <div class="box__article"> <a href="https://www.salarazzmatazz.com/22-04-2023/avalanch" ><img src="imgs/avalanchcartel.jpg" width="250px" height="300px"> </a> Avalanch (Barcelona) </div>
                <div class="box__article"> <a href="https://www.entradas.com/event/tokio-hotel-sala-apolo-13382613/?affiliate=ADE&gclid=CjwKCAiAl9efBhAkEiwA4Torijzkojcwvp2bjmpqKFiebh9zb23EQqEpp3gaHHvpH0ugCawsRgOj3hoCusYQAvD_BwE" ><img src="imgs/tokyohotelcartel.jpg" width="250px" height="300px"> </a> Tokio Hotel (Barcelona) </div>
                <div class="box__article"> <a href="https://www.ticketmaster.es/artist/coldplay-entradas/10139" ><img src="imgs/coldplaycartel.jfif" width="250px" height="300px"> </a> Coldplay (Barcelona) </div>
                <div class="box__article"> <a href="https://www.ticketmaster.es/event/joe-satriani-entradas/21023" ><img src="imgs/joesatrianicartel.jpg" width="250px" height="300px"> </a> Gira Joe Satriani 2023 </div>
                <div class="box__article"> <a href="https://www.elcorteingles.es/entradas/conciertos/entradas-the-who-hits-back-tour-barcelona/" ><img src="imgs/thewhocartel.jpg" width="250px" height="300px"> </a> The Who (Barcelona) </div>
                <div class="box__article"> <a href="https://www.viagogo.es/Entradas-Conciertos/Hard-Rock-Metal/Moetley-Cruee-Entradas?AffiliateID=49&adposition=&PCID=PSESGOOCONMOTLE0043571FFD&AdID=629870060293&MetroRegionID=&psc=%2c&ps=cc-ES&ps_p=0&ps_c=13172994882&ps_ag=142702799716&ps_tg=kwd-1851724952782&ps_ad=629870060293&ps_adp=%2c&ps_fi=%2c&ps_li=%2c&ps_lp=1005436&ps_n=g&ps_d=c&gclid=CjwKCAiAl9efBhAkEiwA4ToriqyfWQfmozQC5t4wm_fW8PpMy7H1e1RjhWKw1zCFaBl7bgNMk2y0xxoC9xIQAvD_BwE" ><img src="imgs/motleycartel.jpg" width="250px" height="300px"> </a> Mötley Crüe + Def Lepard (Madrid) </div>
                <div class="box__article"> <a href="https://www.viagogo.es/Entradas-Conciertos/Indie-Rock/Arctic-Monkeys-Entradas?AffiliateID=49&adposition=&PCID=PSESGOOCONARCTIF8EE7F91E3&AdID=639367988619&MetroRegionID=&psc=%2c&ps=cc-ES&ps_p=0&ps_c=15287372612&ps_ag=134688736739&ps_tg=kwd-1930153478638&ps_ad=639367988619&ps_adp=%2c&ps_fi=%2c&ps_li=%2c&ps_lp=1005436&ps_n=g&ps_d=c&gclid=CjwKCAiAl9efBhAkEiwA4ToritDWj0ux8P55aWhJkshE3YW4FD5JPpW2ZCrpdHDzU8VuCxxhGKC8NRoCWqYQAvD_BwE" ><img src="imgs/articmonkeyscartel.jpg" width="250px" height="300px"> </a> Artic Monkeys (Madrid)</div>
                <div class="box__article"> <a href="https://bizkaiaarena.bilbaoexhibitioncentre.com/eventos/iron-maiden/" ><img src="imgs/cartelironmaiden.jpg" width="250px" height="300px"> </a> Iron Maiden (Bilbao)</div>
                <div class="box__article"> <a href="https://www.wegow.com/es-es/artistas/helloween" ><img src="imgs/helloweencartel.jpg" width="250px" height="300px"> </a> Helloween (Madrid y Barcelona)</div>
                <div class="box__article"> <a href="https://www.viagogo.es/Entradas-Conciertos/Pop-Rock/Blink-182-Entradas?AffiliateID=49&adposition=&PCID=PSESGOOCONBLINKD6AD001CD6&AdID=627719566745&MetroRegionID=&psc=%2c&ps=cc-ES&ps_p=0&ps_c=18572991078&ps_ag=145196721031&ps_tg=kwd-1824779192329&ps_ad=627719566745&ps_adp=%2c&ps_fi=%2c&ps_li=%2c&ps_lp=1005436&ps_n=g&ps_d=c&gclid=CjwKCAiAl9efBhAkEiwA4TorikS8u12qA92ef82PPVxaxNgVpadSwoAXL_w4eP2JX3lqF7ejZv9s5hoCTTMQAvD_BwE" ><img src="imgs/blinkcartel.jpg" width="250px" height="300px"> </a> Blink-182 (Madrid y Barcelona)</div>
                <div class="box__article"> <a href="https://www.ticketmaster.es/artist/metallica-entradas/1240?clickId=10FWCbTWixyNWauUyyWD3WMfUkAyKY0FFT2wy80&irgwc=1&utm_source=1338187-Oscar%20Ricoy%20Trasancos&utm_medium=affiliate&utm_campaign=1338187" ><img src="imgs/metallicacartel.jpg" width="250px" height="300px"> </a> Metallica (Madrid 2024)</div>
            </div>

            <h1>Festivales 2023</h1>
            <h2>De lo mejorcito, no te los pierdas!</h2>

            <div class="container__article">
                <div class="box__article"> <a href="https://sansanfestival.com/" ><img src="imgs/sansanfestival.jpg" width="250px" height="300px"> </a>Sansan Festival (6-8 de Abril 2023)</div>
                <div class="box__article"> <a href="https://springalicante.es/abonos/" ><img src="imgs/springfest.jpg" width="250px" height="300px"> </a>Spring Festival (26-27 de Mayo 2023)</div>
                <div class="box__article"> <a href="https://www.resurrectionfest.es/entradas/" ><img src="imgs/resurrectionFest.jpg" width="250px" height="300px"> </a>Resurrection Fest (28 Jun-1 de Julio 2023)</div>
                <div class="box__article"> <a href="http://bigsoundfestival.com/" ><img src="imgs/bigsound.jpg" width="250px" height="300px"> </a>BigSound Festival (29 Jun-2 de Julio 2023)</div>
                <div class="box__article"> <a href="https://fiberfib.com/abonos/" ><img src="imgs/fibcartel.png" width="250px" height="300px"> </a>FIB Benicassim (13-16 de Julio 2023)</div>
                <div class="box__article"> <a href="https://www.zevrafestival.com/entradas" ><img src="imgs/zevra.jpg" width="250px" height="300px"> </a>Zevra Festival (22-15 de Julio 2023)</div>
                <div class="box__article"> <a href="https://www.arenalsound.com/abonos/" ><img src="imgs/arenalsound.jpg" width="250px" height="300px"> </a>Arenal Sound (1-6 de Agosto 2023)</div>
                <div class="box__article"> <a href="https://somfestival.es/entradas" ><img src="imgs/somfest.jpeg" width="250px" height="300px"> </a>SOM Festival Castelló (4-13 de Agosto 2023)</div>
                <div class="box__article"> <a href="https://www.leyendasdelrockfestival.com/tickets/" ><img src="imgs/leyendasfest.jpg" width="250px" height="300px"> </a>Leyendas del Rock (9-13 de Agosto 2023)</div>
                
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